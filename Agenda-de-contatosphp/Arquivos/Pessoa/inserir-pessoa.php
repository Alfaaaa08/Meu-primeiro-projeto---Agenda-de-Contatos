<header>
    <h3>Inserir Pessoa</h3>
</header>
<?php
try {
    $NomePessoa = mysqli_real_escape_string($conexao, $_POST["Nome_Pessoa"]);
    $cpfPessoa = mysqli_real_escape_string($conexao, $_POST["CPF_Pessoa"]);

    $sql = "INSERT INTO pessoas(cpf, nome) VALUES ( '{$cpfPessoa}', '{$NomePessoa}')";
    mysqli_query($conexao, $sql) or die("Erro de execução"
        . mysqli_error($conexao));

    echo "O registro foi validado com sucesso!";
    sleep(1);
    header('Location:http://localhost/Agenda-de-contatosphp/index.php?menuop=Pessoas');
} catch (Exception $e) {
    echo 'Ocorreu um erro ao cadastrar a pessoa.';
}
