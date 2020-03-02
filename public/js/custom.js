function checkString($str, $numberOfLetter){
    if(strlen($str) > $numberOfLetter){
        return str_replace(substr($str, $numberOfLetter, strlen($str)-$numberOfLetter),'...', $str);
    } else{
        return $str;
    }
}