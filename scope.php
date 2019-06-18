<?php
$access_token = 'P64t_fWm9euVL8MsaPockFNn0rZ8klPvuN7sKheV8Kuz50XbGyObRKehTa8tXnAxM6lWP2JCe8i1ZGeGrnjWn1LsplkF5s6d0BvgBTb5MPONxM8Lo3PIMt0CU8OTAFDJXbACAJPD';
$appid = 'wx9aaf652c59da8400';

$redirect_uri = urlencode ( 'http://www.otteryuan.cn/getUserInfo.php' );
//snsapi_userinfo
$url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
header("Location:".$url);