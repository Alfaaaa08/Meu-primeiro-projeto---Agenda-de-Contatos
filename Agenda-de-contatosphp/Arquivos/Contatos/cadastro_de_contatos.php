<?php $sql = "SELECT * FROM pessoas";
                $rs = mysqli_query($conexao, $sql) or die("Erro de execução"
                    . mysqli_error($conexao));
                ?>

<header>
    <h3> Cadastro de Contatos </h3>
</header>
<div>

    <form action="index.php?menuop=inserir-contato" method="post">
        <div>
            <label for="Nome_Contato"> Nome</label>
            <input type="text" name="Nome_Contato">
        </div>
        <div>
            <label for="Email_Contato"> Email</label>
            <input type="email" name="Email_Contato">
        </div>
        <div>
            <label for="Telefone_Contato"> Telefone</label>
            <input type="text" name="Telefone_Contato">
        </div>
        <div>
            <label for="Descrição_Contato"> Descrição</label>
            <input type="text" name="Descrição_Contato">
        </div>
        <div>
            <label for="IdPessoa"> IdPessoa</label>
            <select name="idPessoa">
            
            <?php while ($dados = mysqli_fetch_assoc($rs)) {?>
                <option value= <?php echo $dados["Pessoas"];?> > <?php echo $dados["nome"];?> </option>
             <?php }  ?> 
            </select>
        </div>
        <div>
            <input type="submit" value="Adicionar novo Contato" name="btnAdicionar">
        </div>
    </form>
</div>