<?php 
		include "koneksi.php";
		$nomor = 1;
    $row=[];
		$query_mysqli = mysqli_query($koneksi,"SELECT * FROM users");
     while($data = mysqli_fetch_array($query_mysqli))
    $datas[] = $data;
		foreach($datas as $data){
		// while($data = mysqli_fetch_array($query_mysqli)){
		?>
    
    <?php } ?>
