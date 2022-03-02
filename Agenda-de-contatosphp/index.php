<?php
include("DB/connect.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos v1</title>
</head>

<body>
    <header>
        <h1>
            Sistema de Contatos
            <nav>
                <a href="index.php?menuop=Home"> Home</a> |
                <a href="index.php?menuop=Contatos"> Contatos</a> |
                <a href="index.php?menuop=Pessoas"> Pessoas</a>
            </nav>
        </h1>
    </header>
    <hr>
    <main>
        <?php
        $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : ["Home"];
        switch ($menuop) {
            case 'Home':
                include("Arquivos/Home/home.php");
                break;
            case 'Pessoas';
                include("Arquivos/Pessoa/Pessoas.php");
                break;
            case 'Contatos';
                include("Arquivos/Contatos/contatos.php");
                break;
            case 'cadastro_de_Contatos';
                include("Arquivos/Contatos/cadastro_de_Contatos.php");
                break;
            case 'cadastro_de_Pessoas';
                include("Arquivos/Pessoa/cadastro_de_Pessoas.php");
                break;
            case 'inserir-contato';
                include("Arquivos/Contatos/inserir_contato.php");
                break;
            case 'inserir-pessoa';
                include("Arquivos/Pessoa/inserir-pessoa.php");
                break;
            case 'editar-contato';
                include("Arquivos/Contatos/editar-contato.php");
                break;
            case 'atualizar-contato';
                include("Arquivos/Contatos/atualizar-contato.php");
                break;
            case 'excluir-contato';
                include("Arquivos/Contatos/excluir-contato.php");
                break;
        }
        ?>
    </main>

</body>

</html>