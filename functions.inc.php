<?php

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


function makeWeb($filename, $htmlContent, $qrcodeurl)
{
    file_put_contents($filename, $htmlContent);

}




function saveConf($wifiname, $mode="WPA", $key)
{
 //file_put_contents("security/last.dat", $wifiname . "<::>" . $mode . "<::>" . $key);
}




function loadConf()
{
 if (file_exists("security/last.dat"))
        {
          $buffer=file_get_contents("security/last.dat");
          return explode("<::>", $buffer);
        }else{
          return array("");
        }
}


?>
