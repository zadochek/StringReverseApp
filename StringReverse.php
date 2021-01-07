<?php 

class StringReverse{

    public function reverseWordsText($text) {
        
        function str_revers($str) {
            $str = iconv('utf-8', 'windows-1251', $str);
            $firstSymbolUpper = false;
            if(ctype_upper(substr($str, 0, 1))){
                $str = lcfirst($str);
                $firstSymbolUpper = true;
            }
            preg_match("/^([^(\?|\.|,|!)]*)/", $str, $chars);
            if(count($chars) > 0){
                $symbol = str_replace($chars[0], "", $str);
                $str = strrev($chars[0]);
                $result = $str . $symbol;
            }else {
                $result = strrev($str);
            }
            if($firstSymbolUpper) {
                $result = ucfirst($result);
            }
            $result = iconv('windows-1251', 'utf-8', $result);
            return $result;
        }
        
        $sentences = preg_split("/(?<=[.?!])\s+/", $text);

        $result = [];
        
        foreach($sentences as $sentence){
            $result[] = implode(" ", array_map('str_revers', explode(" ", $sentence)));
        }
        return implode(" ", $result);
    }
}
