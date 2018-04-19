<?php
namespace App\Common;
class Curl{
public $userAgent = NULL;// 伪造浏览器标识
protected $url;//网页地址
protected $object;
protected $curlInfo =  array();// 采集信息
/**公共初始化CURL选项*/
protected function _init($url='',$issetcookie=FALSE,$isfollow=FALSE)
{
	$this->url =$url;
    $this->object = curl_init($this->url);
    date_default_timezone_set('PRC');
    curl_setopt($this->object, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($this->object, CURLOPT_HEADER, 0);
	if(isset($this->userAgent))
	{
		curl_setopt($this->object,CURLOPT_USERAGENT, $this->userAgent);
	} // 是否设置 COOKIE
	if($issetcookie){
		curl_setopt($this->object, CURLOPT_COOKIESESSION, TRUE);
		curl_setopt($this->object, CURLOPT_COOKIEFILE, "cookiefile");
		curl_setopt($this->object, CURLOPT_COOKIEJAR, "cookiefile");
	}
	if($isfollow)
	{
		curl_setopt($this->object, CURLOPT_FOLLOWLOCATION,1);    //允许url跳转
	}
}
/**     * get 抓取网页 调用接口     * url    抓取的网页     * pearm  参数     */
public function curlGet($url,$pearm='')
{
	$str = '';
	if(is_array($pearm))
	{
	foreach ($pearm as $key => $value)
	{
	if(empty($str))
	{
	$str .= '?'.$key.'='.$value;
	}
	else
	{
	$str .= '&'.$key.'='.$value;
	}
	}
	}
	else
	{
	$str = '?'.$pearm;
	}
	$this->_init($url.$str);
	$content  = $this->curlExec($this->object);
	// curl_close($this->object);
	 return $content;
 }
 /**     * post 抓取网页 调用接口     * url  网址     * pearm  参数     */
 public function curlPost($url,$pearm='')
 {
	 $this->_init($url);  curl_setopt($this->object, CURLOPT_POST, 1);        //使用post去传值
	 curl_setopt($this->object, CURLOPT_POSTFIELDS, $pearm);  // 传递参数
	 curl_setopt($this->object, CURLOPT_HTTPHEADER, array('application/x-www-form-urlencoded', 'Content-length: '.strlen($pearm)));
	 $content  = $this->curlExec($this->object);
	 return $content;
}
/**    *  获取抓取信息*/
public function getInfo()
{
	return curl_getinfo($this->object);
}
	/**     *  释放句柄     */
public function __destruct()
{
	curl_close($this->object);
}
/**     * 执行curl会话     */
protected function curlExec($object)
{
	$info = curl_exec($this->object);
		if(curl_errno($this->object))
			{
				return  'Curl error: ' . curl_error($this->object);
			}
		else
			{
				return $info;
			}
}
}