<?php

$idContato = $_GET["Contatos"];

$sql = "SELECT * FROM  contatos WHERE contatos = {$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados" .mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs); 

?>

<?php $sql = "SELECT * FROM pessoas";
                $rs = mysqli_query($conexao, $sql) or die("Erro de execução"
                    . mysqli_error($conexao));
                ?>

<header>
    <h3> Editar Contato</h3>
</header>

<div>

    <form action="index.php?menuop=atualizar-contato" method="post">
        <div>
            <label for="Contatos"> ID</label>
            <input type="text" name="Contatos" value="<?=$dados["Contatos"] ?>">
        </div>
        <div>
            <label for="Nome_Contato"> Nome</label>
            <input type="text" name="Nome_Contato" value="<?=$dados["Nome_Contato"] ?>">
        </div>
        <div>
            <label for="Email_Contato"> Email</label>
            <input type="email" name="Email_Contato" value="<?=$dados["Email_Contato"] ?>">
        </div>
        <div>
            <label for="Telefone_Contato"> Telefone</label>
            <input type="text" name="Telefone_Contato" value="<?=$dados["Telefone_Contato"] ?>">
        </div>
        <div>
            <label for="Descrição_Contato"> Descrição</label>
            <input type="text" name="Descrição_Contato" value="<?=$dados["Descrição_Contato"] ?>">
        </div>
        <div>
            <label for="IdPessoa"> IdPessoa</label>
            <select name="IdPessoa">
            
            <?php while ($dados = mysqli_fetch_assoc($rs)) {?>
                <option value= <?php echo $dados["Pessoas"];?> > <?php echo $dados["nome"];?> </option>
             <?php }  ?> 
            </select>
        </div>
        <div>
            <input type="submit" value="Atualizar Contato" name="btnAtualizar">
        </div>
    </form>
</div>  