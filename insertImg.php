 
<?php
require_once("conexao.php");
/*
// This is the file we're going to add it in the database
$MY_FILE = $_FILES['file']['tmp_name'];
$nome = $_FILES['file']['name'];

// To open the file and store its contents in $file_contents
$file = fopen($MY_FILE, 'r');
$file_contents = fread($file, filesize($MY_FILE));
fclose($file);
// We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.//
 
$file_contents = addslashes($file_contents);
$link = $_POST['link'];
$about = $_POST['about'];
$img = $file_contents;

*/
$img= addslashes($_FILES['file']['tmp_name']);
$name= addslashes($_FILES['file']['name']);
$img= file_get_contents($img);
$img= base64_encode($img);

$insert = "INSERT INTO postagem (nome, img) VALUES ('$name','$img')";
$resultado = mysqli_query($insert,  $conexao);
if($resultado){
    echo "File INSERTED into files table successfully.";
}

?>