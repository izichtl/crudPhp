<?php
    require_once "conexao.php";
    $sql = "SELECT info FROM img ORDER BY id "; 
    $result = mysqli_query($conexao, $sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<?php
	while($row = mysqli_fetch_array($result)) {
        
	?>
        
        <img src="data:image/jpeg;base64,<?= base64_encode($row["info"]) ?>" />
	
<?php		
	}
    mysqli_close($conexao);
?>
</BODY>
</HTML>