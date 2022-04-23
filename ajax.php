<?php 
 session_start();
//quentity update by ajax call 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $quentity = $_GET['quentity'];
    // $_SESSION['carts'][$id]['qty'] = $quentity;
    if ($_SESSION['carts'][$id]['qty'] = $quentity) {
      echo 1;
    }
    
  
}


