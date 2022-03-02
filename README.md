# Meu-primeiro-projeto---Agenda-de-Contatos
Agenda de contatos realizada para a vaga de desenvolvedor back-end da Magazord.

AGENDA DE CONTATOS

#Sobre

- A agenda tem como função citar uma lista de pessoas e contatos, sendo possível cadastrar, visualizar, alterar e excluir esses.

#Pré-requisitos

- VSCode
- XAMPP

#Como usar 

1. Após a instalação dos programas anteriormente pré-requisitados, deve-se abrir o programa XAMPP,
 e iniciar os serviços "Apache" e "MySQL", por meio do botão start;
2. Passar a pasta "Agenda-de-contatosphp" para a pasta htdocs do xampp
3. Feito isso, clique no botão "Admin", ao lado de "MySQL", isso irá abrir uma página no navegador onde iremos configurar o nosso banco de dados;
4. Com a página "http://localhost/phpmyadmin/" aberta, vamos criar o banco de dados do nosso sistema, seguindo os seguintes passos:
	- Para começar, vamos apertar no botão "Nova", na parte esquerda da tela, e nomear a nossa base de dados como "db_agenda_contatos";
	- Depois, vamos criar a nossa primeira tabela, nomeando-a "contatos", e atribuindo 6 colunas a ela, essas colunas serão as seguintes:
		-Contatos; INT; PRIMARY(Nulo índice); Marcar a caixa AI;
		-Nome_Contato; VARCHAR; 100;
		-Email_Contato; VARCHAR; 50;
		-Telefone_Contato; VARCHAR; 30;
		-Descrição_Contato; VARCHAR; 200;
		-fk_pessoa; INT;
	-Após isso, basta apertar no botão "Guarda" para salvar nossa primeira tabela.
5. Para criar a tabela das pessoas, vamos repetir os comandos feitos anteriormente, alterando apenas alguns valores:
	- Novamente, vamos apertar no botão "Nova", dessa vez, nomeando nossa tabela como "pessoas", e atribuindo-a apenas 3 colunas:
		- Pessoas; INT; 255; PRIMARY(Nulo índice); Marcar a caixa AI;
		- cpf; VARCHAR; 14
		- nome; VARCHAR; 100;

-Depois de realizar todos os passos anteriores, basta iniciar o script baixado pelo VSCode, e abrir uma página no navegador nomeada: http://localhost/Agenda-de-contatosphp/index.php?menuop=Pessoas

E pronto! Agora você pode usar sua agenda de contatos como bem preferir!

	

