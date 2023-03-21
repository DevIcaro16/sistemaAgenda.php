<?php

include_once('conexao.php');

$nome_turma = $_POST['nome_turma'] ;
$data_anotacao = $_POST['data_anotacao'] ;
$disciplina = $_POST['disciplina'] ;
$professor = $_POST['professor'] ;
$conteudo = $_POST['conteudo'] ;
$observacao = $_POST['observacao'] ;

$query = 'INSERT INTO tb_anotacoes(nome_turma,data_anotacao,disciplina,professor,conteudo,observacao) VALUES (:nome_turma,:data_anotacao,:disciplina,:professor,:conteudo,:observacao)' ;

$stmt = $connect -> prepare($query) ;
$stmt->bindParam(':nome_turma',$nome_turma);
$stmt->bindParam(':data_anotacao',$data_anotacao);
$stmt->bindParam(':disciplina',$disciplina);
$stmt->bindParam(':professor',$professor);
$stmt->bindParam(':conteudo',$conteudo);
$stmt->bindParam(':observacao',$observacao);


$stmt -> execute();