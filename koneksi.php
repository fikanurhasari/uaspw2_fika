<?php

$hostDB = 'ec2-52-22-136-117.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'de0tup3k55enqp';
$userDB = 'mxjgkkcsbbaenq';
$pwDB = '886e2c5c6916185b5ff6db0844670360c80cf7a3fb95a146f9835ed0663b6f11';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>
