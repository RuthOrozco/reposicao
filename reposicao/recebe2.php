<?php
$nome = $_POST["nome"];
$email =$_POST["email"];
$telefone= $_POST["telefone"];
$data= date("d/m/Y");
// abrir conexão com banco
include_once'conexao.php';
//mostrar  a intrução para gravar os dadois da tela no banco
$novadata = explode ("/",$data);
$novadata = array_reverse($novadata);
$data1 = implode("-",$novadata);


$sql = "insert into aluno values(null,'".$nome."','".$email."','".$telefone."','".$data."')";
//executar
if (mysqli_query($con,$sql)) {
    echo "Gravado com sucesso";
}else {
    echo"erro ao gravar.";
}
mysqli_close($con);
header("location:formulario.2php?msg=")



?>