<header>
    <h3>Excluir Pessoa</h3>
</header>

<?php
   $idPessoa = mysqli_real_escape_string($conexao, $_GET["Pessoas"]);
    $sql = "DELETE FROM pessoa WHERE Pessoas = '{$idPessoa}'";

 mysqli_query($conexao, $sql) or die("Erro ao excluir registro"
. mysqli_error($conexao));
echo "Registro excluido com sucesso!";
?>