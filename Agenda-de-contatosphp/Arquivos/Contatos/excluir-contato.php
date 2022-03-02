<header>
    <h3>Excluir Contato</h3>
</header>

<?php
   $idContato = mysqli_real_escape_string($conexao, $_GET["Contatos"]);
    $sql = "DELETE FROM contatos WHERE Contatos = '{$idContato}'";

 mysqli_query($conexao, $sql) or die("Erro ao excluir registro"
. mysqli_error($conexao));
echo "Registro excluido com sucesso!";
?>