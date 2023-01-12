<?php
include_once'topo.php';
// abri conexão com o banco 
include_once'conexao.php';
/// montar instrução sql para selecionar todos os registros
$sql="select * from aluno";
// executar a consulta
$rs = mysqli_query($con,$sql);
if (mysqli_num_rows($rs)>0) {
    ?>
    <table class="table">
    <tr>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Telefone</td>
        <td>Data de Cadastro</td>
    </tr>   
    <?php
    while ($row = mysqli_fetch_array($rs)){
    ?>
        <tr>
        <td><?php echo $row["nome"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["telefone"]; ?></td>
        <td><?php echo $row["datacadastro"]; ?></td>
        </tr>
        <?php
    } 
}else {
    echo "nenhum aluno cadastrado";
}
// exibir os dados da consulta na pagina 

// fechar a conexão com o banco de dadoss
?>