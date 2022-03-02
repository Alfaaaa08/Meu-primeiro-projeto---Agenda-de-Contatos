<header>
    <h3>Pessoas</h3>
</header>
<div>
    <a href="index.php?menuop=cadastro_de_Pessoas"> Nova Pessoa</a>
</div>
<div>
    <form action="index.php?menuop=Pessoas" method="POST">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">
    </form>
</div>
<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $txt_pesquisa =(isset($_POST['txt_pesquisa']))?$_POST['txt_pesquisa']:"";
        $sql = "SELECT * FROM Pessoas 
        WHERE 
        Pessoas='{$txt_pesquisa}' or
        nome LIKE '%{$txt_pesquisa}%'
        ";
        $rs = mysqli_query($conexao, $sql) or die("Erro de execução"
            . mysqli_error($conexao));
        while ($dados = mysqli_fetch_assoc($rs)) {


        ?>
            <tr>
                <td><?= $dados["Pessoas"] ?></td>
                <td><?= $dados["nome"] ?></td>
                <td><?= $dados["cpf"] ?></td>
                <td><a href="index.php?menuop=editar-pessoa&Contatos=<?= $dados["Pessoas"] ?>">Editar</a>
                <td><a href="index.php?menuop=excluir-pessoa&Contatos=<?= $dados["Pessoas"] ?>">Excluir</a>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>