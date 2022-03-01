<header>
    <h3>Contatos</h3>
</header>
<div>
    <a href="index.php?menuop=cadastro_de_Contatos"> Novo Contato</a>
</div>
<div>
    <form action="index.php?menuop=Contatos" method="POST">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">
    </form>
</div>
<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Descrição</th>
            <th>Pessoa</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $txt_pesquisa =(isset($_POST['txt_pesquisa']))?$_POST['txt_pesquisa']:"";
        $sql = "SELECT * FROM contatos 
        WHERE 
        fk_Pessoa='{$txt_pesquisa}' or
        Nome_Contato LIKE '%{$txt_pesquisa}%'
        ";
        $rs = mysqli_query($conexao, $sql) or die("Erro de execução"
            . mysqli_error($conexao));
        while ($dados = mysqli_fetch_assoc($rs)) {


        ?>
            <tr>
                <td><?= $dados["Contatos"] ?></td>
                <td><?= $dados["Nome_Contato"] ?></td>
                <td><?= $dados["Email_Contato"] ?></td>
                <td><?= $dados["Telefone_Contato"] ?></td>
                <td><?= $dados["Descrição_Contato"] ?></td>
                <td><?= $dados["fk_Pessoa"] ?></td>
                <td><a href="index.php?menuop=editar-contato&Contatos=<?= $dados["Contatos"] ?>">Editar</a>
                <td><a href="index.php?menuop=excluir-contato&Contatos=<?= $dados["Contatos"] ?>">Excluir</a>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
