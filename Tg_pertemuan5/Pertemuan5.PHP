<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>

<body>

    <form method="POST" action="">
        <input type="text" name="nama" id="nama" placeholder="Inputkan nama">
        <br>    
        
        <input type="text" name="email" id="email" placeholder="Inputkan email">
        <br>       
        
        <textarea name="pesan" id="pesan" placeholder="Inputkan pesan"></textarea>
        <br>
        <button>Kirim</button>
    </form>

    <?php
        if (isset($_POST["nama"]) && $_POST["nama"] && $_POST["email"] && $_POST["pesan"]) {
            echo "<br>Nama : ".$_POST["nama"];
            echo "<br>Email : ".$_POST["email"];        
            echo "<br>Pesan : ".$_POST["pesan"];
        }
    ?> 

</body>
</html>