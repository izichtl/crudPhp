<?php
require_once("conexao.php");
$nome = "Link 01";
$link = "https://izichtl.com";
$content = "comentários sobre o link";

$insert = $conexao->prepare("INSERT INTO postagem(nome, link, content, id) VALUES(?,?,?,?)");
$insert->bind_param("sssi", $nome, $link, $content, $id);
$insert->execute();
echo "rodou";