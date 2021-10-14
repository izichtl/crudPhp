<?php
require_once("conexao.php");

$resultado = $conexao->query("SELECT * FROM postagem ORDER BY id");
while($row=$resultado->fetch_array()){
    echo $row['id'],
    " | ",
    $row['nome'],
    " | ",
    '<a href="',
    $row['link'],
    '">',
    $row['link'],
    '</a> | ',
    $row['content'],
    '<br><br>';
}
$resultado = $conexao->query("SELECT * FROM img ORDER BY id");
while($row=$resultado->fetch_array()){
    header("Content-Type:" . "image/jpg");
    echo $row['info'];
}

<img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" />
