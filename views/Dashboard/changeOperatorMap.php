<?php
session_start();
//echo 'asdas';
$_SESSION['phone']=$_GET['data'];
header("Location: ../../index.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

