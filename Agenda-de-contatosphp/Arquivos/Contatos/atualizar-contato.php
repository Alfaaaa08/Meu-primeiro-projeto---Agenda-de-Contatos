<header>
    <h3>Atualizar Contato</h3>
</header>
<?php
try {
    $idContato = mysqli_real_escape_string($conexao, $_POST["Contatos"]);
    $NomeContato = mysqli_real_escape_string($conexao, $_POST["Nome_Contato"]);
    $EmailContato = mysqli_real_escape_string($conexao, $_POST["Email_Contato"]);
    $TelefoneContato = mysqli_real_escape_string($conexao, $_POST["Telefone_Contato"]);
    $DescriçãoContato = mysqli_real_escape_string($conexao, $_POST["Descrição_Contato"]);

    $sql = "UPDATE Contatos SET 
    Nome_Contato = '{$NomeContato}',
    Email_Contato =  '{$EmailContato}',
    Telefone_Contato = '{$TelefoneContato}',
    Descrição_Contato = '{$DescriçãoContato}'
    WHERE Contatos = '{$idContato}'
    ";

    mysqli_query($conexao, $sql) or die("Erro de execução"
        . mysqli_error($conexao));

    echo "O registro foi atualizado com sucesso!";
    sleep(1);
    header('Location:http://localhost/Agenda-de-contatosphp/index.php?menuop=Home');
} catch (Exception $e) {
    echo 'Atualizado com sucesso!';
}
