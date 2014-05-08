<?php
/**
* 关键字高亮
*/
if ( ! function_exists('keyHH')){
	
	function keyHH($str, $phrase, $tag_open = '<span style="color:#FF6600">', $tag_close = '</span>'){
		if ($str == ''){
			return '';
		}

		if ($phrase != ''){
			return preg_replace('/('.preg_quote($phrase, '/').')/i', $tag_open."\\1".$tag_close, $str);
		}

		return $str;
	}
}
/**
* 截取字符
*/
if ( ! function_exists('sysSubStr')){
	function sysSubStr($String,$Length,$Append = false){
		if(strlen($String) <= $Length ){
			return $String;
		}else{
			$I = 0;
			while ($I < $Length){
				$StringTMP = substr($String,$I,1);
				if( ord($StringTMP) >=224 ){
					$StringTMP = substr($String,$I,3);
					$I = $I + 3;
				}elseif( ord($StringTMP) >=192 ){
					$StringTMP = substr($String,$I,2);
					$I = $I + 2;
				}else{
					$I = $I + 1;
				}
				$StringLast[] = $StringTMP;
			}
			$StringLast = implode("",$StringLast);
			
			if($Append){$StringLast .= "...";}
			
			return $StringLast;
		}
	} 
}

?>