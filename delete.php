<?php
require("conexao.php");
$id = 1;
$result = $conexao->query("DELETE FROM postagem WHERE id='$id'");
?>