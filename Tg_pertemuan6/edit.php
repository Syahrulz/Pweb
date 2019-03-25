<?php
require_once("koneksi.php");
 
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];
 
    // query update data
    $query = "UPDATE movie_table SET judul = '$judul', genre = '$genre', rating = '$rating' WHERE id = $id";
    if(mysqli_query($conn, $query)){
        header("Location: beranda.php");
    }else{
        echo "Edit Data Gagal";
    }
}
 
$id = $_GET['id'];
$query = "SELECT * FROM movie_table WHERE id = $id";
$data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-fixed-bottom navbar-inverse bg-inverse" style="background-color: #000000;"></nav>

    <div class=" container jumbotron text-center">
            <div>
                    <h3> Edit Movie </h3><hr><br>
            </div>
        
        <?php while($row = mysqli_fetch_assoc($data)){ ?>
        <form action="edit.php" method="post">
            <h4 class="text-left">Judul</h4><br><textarea name="judul" class="form-control" rows="2" cols="20"><?php echo $row['judul']; ?></textarea><br><br>
            <h4 class="text-left">Genre</h4><br><input type="text" class="form-control" name="genre" value="<?php echo $row['genre']; ?>"><br><br>
            <h4 class="text-left">Rating</h4><br><input type="text" class="form-control" name="rating" value="<?php echo $row['rating']; ?>"><br><br>
            
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="text-right">
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan Perubahan">
            <a href="beranda.php" class="btn btn-danger text-right">Batal</a>
            </div>
        </form>
        <?php
        } // end while
    
        mysqli_close($conn); // menutup koneksi ke database
        ?>

    </div>

    
</body>
</html>