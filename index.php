<?php
$dbserver='DESKTOP\SQLEXPRESS';
$dbport  ='1433';
$uname  ='DESKTOP\lenovo';
$passwd ='';
$dbname  ='WBS';

try {
  $aPDO = new PDO("sqlsrv:Server=$dbserver;Database=$dbname");
  $aPDO->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch (PDOException $e){
  print " Gagal, could not connect\n";  
    print "Error!: " . $e->getMessage() . "<br/>";
  die();
}

?>