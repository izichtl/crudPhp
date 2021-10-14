<?php
    require_once "conexao.php";
    if(isset($_GET['image_id'])) {
        $sql = "SELECT id,info FROM img ORDER BY id";
		$result = mysqli_query($conexao, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . "image/jpg");
        echo $row["info"];
	}
	mysqli_close($conexao);
?>