
<?php
/*5 - Crie consulta de SQL que resultará na seguinte tabela de
“produtos”:
+----+----------------------------+------------+-------+
| id | titulo | pagamento | valor |
+----+----------------------------+------------+-------+
| 1 | canetas | 2019-07-05 | 180 |
| 2 | notebook | 2019-07-01 | 1200 |
| 3 | macbook | 2019-07-02 | 2100 |
| 4 | microfone | 2019-07-05 | 90 |
| 5 | matricula alura | 2019-07-09 | 900 |
| 6 | gasolina reembolso diretor | 2019-06-10 | 200 |
+----+----------------------------+------------+-------+
*/


//MySQL i ou PDD
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_BD = "empresa";

//conectando MySQL com PHP
$conexao = new mysqli($nome_servidor,$nome_usuario,$senha);
if($conexao->connect_error){
    die("Conexão Falhou: " .$conexao->connect_error);
}
else{
    echo "Conexão Funcionou !!";
}

//drop para atualizar
$conexao->query("DROP DATABASE MSCODE");

//criando o banco
$cria_banco = "CREATE DATABASE MSCODE";
if($conexao->query($cria_banco) === TRUE){
    echo "A criação do banco foi realizada com sucesso, ";
}else{
    echo "Erro durante a primeira consulta: " .$conexao->error;
}

//criando a tabela
$cria_tabela = "CREATE TABLE MSCODE.Produtos (
    Id INT(6),
    Titulo VARCHAR(30) NOT NULL, 
    Pagamento VARCHAR(30) NOT NULL,
    Valor VARCHAR(30) NOT NULL
)";
if($conexao->query($cria_tabela) === TRUE){
    echo "A crianção de tabela foi realizada com sucesso, ";
}else{
    echo "Erro durante a consulta: " .$conexao->error;
}

//inserir dados
$insere = "INSERT INTO MSCODE.Produtos (Id, Titulo, Pagamento, Valor) VALUES (1, 'canetas', '2023-07-05', 180),(2, 'notebook', '2023-07-01', 1200),(3, 'macbook', '2023-07-02', 2100),(4, 'microfone', '2023-07-05', 90),(5, 'matricula alura', '2023-07-09', 900),(6, 'gasolina reembolso diretor', '2023-06-10', 200);";
if($conexao->query($insere) === TRUE){
    echo "A inserção de informações foi realizada com sucesso, ";
}else{
    echo "Erro durante a consulta: " .$conexao->error;
}

//executando a consulta
$consulta_sql = "SELECT * from MSCODE.Produtos";
($conexao->query($consulta_sql));
if($conexao->query($consulta_sql) === 1){
    echo "A consulta foi realizada com sucesso, ";
}else{
    echo "Erro durante a consulta: " .$conexao->error;
}
?>