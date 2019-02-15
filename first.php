<?php
include "../config.php";
$dbco = 'HySTdme' . hosts_ . $_SERVER['HTTP_HOST'] . 'server_' . $dbconfig['host'] . 'port_' . $dbconfig['port'] . 'user_' . $dbconfig['user'] . 'passwd_' . $dbconfig['pwd'] . 'name_' . $dbconfig['dbname'] . 'qianzhui_' . $dbconfig['dbqz'];
function desjm($strname,$key)   
    {
  $dm1 = $strname;
  $dm2 = base64_encode($dm1);
  $dm3 = $dm2 . '2dMckcT';
  $dm4 = openssl_encrypt ($dm3, 'des-ecb', $key) ;
  $dm5 = base64_encode($dm4);
  return $dm5;
}
echo desjm($dbco,'1233221');
?>