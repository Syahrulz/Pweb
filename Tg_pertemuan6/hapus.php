<?php
    require_once("koneksi.php");
    
    $id = $_GET['id'];
    $query = "DELETE FROM movie_table WHERE id = $id"; // query hapus data
    
    if(mysqli_query($conn, $query)){
        header("Location: beranda.php");
    }else{
        echo "Hapus data gagal";
}
?>