<?php
$dbHost = 'sql200.infinityfree.com:3306';
$dbUsername = 'if0_38230604';
$dbPassword = 'PpNKvQJZ069SjzV';
$dbName = 'if0_38230604_matricula';
$cnt = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conectar->connect_errno){
    echo "ERRO";
}
else
{
    echo "coneccao efetuada com sucesso";
}
 
/*
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'matricula';
$cnt = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conectar->connect_errno){
    echo "ERRO";
}
else
{
    echo "coneccao efetuada com sucesso";
}
 */   
?>