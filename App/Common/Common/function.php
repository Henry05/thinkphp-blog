<?php 

 /**
 * 字符串截取，支持中文和其他编码
 * static 
 * access public
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
 * return string
 */

 function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)  

    {  
  if(function_exists("mb_substr")){  

              if($suffix)  

              return mb_substr($str, $start, $length, $charset)."...";  

              else

                   return mb_substr($str, $start, $length, $charset);  

         }  

         elseif(function_exists('iconv_substr')) {  

             if($suffix)  

                  return iconv_substr($str,$start,$length,$charset)."...";  

             else

                  return iconv_substr($str,$start,$length,$charset);  

         }  

         $re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef]
                  [x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";  

         $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";  

         $re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";  

         $re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";  

         preg_match_all($re[$charset], $str, $match);  

         $slice = join("",array_slice($match[0], $start, $length));  

         if($suffix) return $slice."…";  

         return $slice;

    }


/**
*     生成随机颜色
*/
  function randColor(){
    $arr=array('D6C2F8','9BE695','D6E4B4','8FEF8F','EFD578','B8B6FC','FABF7E');  
    shuffle($arr);   
    return array_shift($arr);
             
          }


 function object_to_array($obj){
      $_arr = is_object($obj)? get_object_vars($obj) : $obj;
      foreach ($_arr as $key => $val) {
        $val = (is_array($val)) || is_object($val) ? object_to_array($val) : $val;
        $arr[$key] = $val;
       }
         return $arr;
    }