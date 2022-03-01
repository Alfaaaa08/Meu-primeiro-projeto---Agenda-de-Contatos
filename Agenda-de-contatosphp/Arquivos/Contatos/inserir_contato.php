<header>
    <h3>Inserir Contato</h3>
</header>
<?php
try {
    $NomeContato = mysqli_real_escape_string($conexao, $_POST["Nome_Contato"]);
    $EmailContato = mysqli_real_escape_string($conexao, $_POST["Email_Contato"]);
    $TelefoneContato = mysqli_real_escape_string($conexao, $_POST["Telefone_Contato"]);
    $DescriçãoContato = mysqli_real_escape_string($conexao, $_POST["Descrição_Contato"]);
    $idPessoa = mysqli_real_escape_string($conexao, $_POST["idPessoa"]);

    $sql = "INSERT INTO contatos(
    Nome_Contato,
    Email_Contato,
    Telefone_Contato,
    Descrição_Contato,
    fk_Pessoa)
VALUES(
    '{$NomeContato}',
    '{$EmailContato}',
    '{$TelefoneContato}',
    '{$DescriçãoContato}',
    '{$idPessoa}'
    )
    ";
    mysqli_query($conexao, $sql) or die("Erro de execução"
        . mysqli_error($conexao));

    echo "O registro foi validado com sucesso!";
    sleep(1);
    header('Location:http://localhost/Agenda-de-contatosphp/index.php?menuop=Home');
} catch (Exception $e) {
    echo 'Ocorreu um erro ao cadastrar o contato.';
}
