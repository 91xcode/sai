<?php
    header("Content-type: text/html; charset=utf-8");
    error_reporting(E_ERROR);
    $type = $_GET['type'];
    if($type==""){
        header("location:https://sai.vercel.app/api/");
    }else{
    if($type=="man") {
    $file = "man.txt" ;
    }elseif($type=="dongman"){ 
    $file = "动漫图片链接.txt" ;
    }elseif($type=="dongwu"){
    $file = "动物图片链接.txt" ;
    }elseif($type=="chengshi"){
    $file = "城市图片链接.txt" ;
    }elseif($type=="yingshi"){
    $file = "游戏图片链接.txt" ;
    }elseif($type=="qinggan"){ 
    $file = "情感图片链接.txt" ;
    }elseif($type=="shouhui"){
    $file = "手绘图片链接.txt" ;
    }elseif($type=="wenzi"){
    $file = "文字图片链接.txt" ;
    }elseif($type=="jixie"){
    $file = "机械图片链接.txt" ;
    }elseif($type=="youxi"){
    $file = "游戏图片链接.txt" ;
    }elseif($type=="wuyu"){
    $file = "物语图片链接.txt" ;
    }elseif($type=="meinv"){ 
    $file = "美女图片链接.txt" ;
    }elseif($type=="shijue"){
    $file = "视觉图片链接.txt" ;
    }elseif($type=="sheji"){
    $file = "设计图片链接.txt" ;
    }elseif($type=="fengjing"){
    $file = "风景图片链接.txt" ;
    }elseif($type=="dongmanpc"){
    $file = "动漫PC图片链接.txt" ;
    }elseif($type=="4k"){
    $file = "4K图片链接.txt" ;
    }elseif($type=="meinvpc"){
    $file = "电脑端美女图片链接.txt" ;
    }elseif($type=="xjjsp"){
    	$file = "小姐姐视频链接.txt" ;
    }elseif($type=="fengjingpc"){
    	$file = "电脑端风景图片链接.txt" ;
    }
    }


function link_urldecode($url) {
  $uri = '';
  $cs = unpack('C*', $url);
  $len = count($cs);
  for ($i=1; $i<=$len; $i++) {
    $uri .= $cs[$i] > 127 ? '%'.strtoupper(dechex($cs[$i])) : $url[$i-1];
  }
  return $uri;
}


$txt = "https://hefollo.com/URL/".urlencode($file);
// $txt = "https://hefollo.com/URL/%E5%8A%A8%E6%BC%AB%E5%9B%BE%E7%89%87%E9%93%BE%E6%8E%A5.txt"; //读取远程动漫图片链接.txt;

if(file_get_contents($txt)){ //判断txt文件是否存在
$data = file($txt);          //将文件存放在一个数组中,这里你也可以循环输出这个数组,我这边就随机读取数组里的一条输出;
$num = count($data);         //条数;
$id = mt_rand(0,$num-1);     //随机数字;
$url = $data[$id];
$url = link_urldecode($url);     //显示第几行数据,并去除空格;
header("location:$url");     //随机显示

}

