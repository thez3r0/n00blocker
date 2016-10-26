# N00B L0CK3R
A PHPbased web-ransomware can be use to encrypt all web-server file extension.


This is for education purpose only for this I used this encryption, this can be reverse with bruteforce. so if you thinking to use it as ransomware. you are in wrong place.


this is the encrytion algo:

 $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
SO, if you smart enough chage it with your custom algo & try harder.

<<:: for any suggestion /report abuse please mail me at : animeshroy@live.com. ::>>

./logoff

