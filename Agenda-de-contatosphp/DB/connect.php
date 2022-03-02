<?php

include("config.php");

$conexao = mysqli_connect(SERVER,USER, PASSWORD, BANK) or die("Erro na conexão"
 .mysqli_connect_error());
 
