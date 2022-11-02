<?php
session_start();
if (!isset($_SESSION['UsuCod'])) {
    header('location: visitante/index.php');
}
elseif (isset($_SESSION['UsuCod']) == 1) {
    header('location: admin/index.php');
}
else{ 
    header('location: usuario/index.php');
}

?>