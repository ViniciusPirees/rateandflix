<?php
session_start();
include('conexao.php');

//validação para não poder acessar o login.php sem as informações do usuario ou senha
/*if (empty($_POST['UsuLogin']) || empty($_POST['UsuSenha'])) {
    header('Location: ../telalogin.php');
    exit();
}*/

$usuario = mysqli_real_escape_string($conexao, $_POST['UsuLogin']);
$senha = mysqli_real_escape_string($conexao, $_POST['UsuSenha']);

$query = "SELECT UsuCod, UsuNivel FROM usuario WHERE UsuLogin = '$usuario' AND UsuSenha = MD5('$senha')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

$_SESSION = mysqli_fetch_array($result);

if ($row == 1) {     
    
    if ($_SESSION['UsuCod']==1) {
         header('location: ../admin/index.php');
    } else {
         header('location: ../usuario/index.php');
    }
 } else {
     header('location: ../visitante/index.php#error1');
 }
?>
 