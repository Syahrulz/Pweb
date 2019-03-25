<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>beranda</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
        
    </head>
    
    <body>
        <?php
            session_start();
            include "koneksi.php";
            if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
                $username = $_SESSION["username"];
            } else {
                header("location: index.php");
            }
        ?>

        <nav class="navbar navbar-fixed-bottom navbar-inverse bg-inverse" style="background-color: #000000;">   
        </nav>
                 
        <div class="container jumbotron text-center"> 
                <div>
                    <h1> Welcome <?= $username ?></h1><hr>                            
                </div>
                <br>
                <a href="keluar.php" class="btn btn-danger text-right">keluar</a>
        </div>

        <div>
            <h2 class="text-center"> Anime Movie Rating on IMDB</h2>
            <table class="table table-bordered container"> 
                <thead scope="col" class="table-success">
                    <th>#</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Rating(IMDB)</th>
                    <th>Action</th>
                </thead>

                <tbody>   
                    <?php
                        $no = 1;
                        $query = "SELECT * FROM movie_table";
                        $result = $conn->query($query);
                        if($result->num_rows > 0){
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row["judul"]?></td>
                                    <td><?= $row["genre"]; ?></td>
                                    <td><?= $row["rating"]; ?></td>
                                    <td>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>                                                                        
                                    </td>    
                                </tr>
                            <?php }
                        }
                    ?>
                                
                </tbody>
            </table>
            <div class="text-center">
                <a href="tambah.php?id" class="btn btn-success">Tambah</a><br><br>
            </div>              
        </div>
        
        
        <nav class="navbar navbar-fixed-bottom navbar-inverse bg-inverse" style="background-color: #000000;">
                
        </nav>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
    
    </body>
</html>