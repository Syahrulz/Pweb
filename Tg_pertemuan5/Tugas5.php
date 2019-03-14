<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
        
    </head>
    
    <body>

        <nav class="navbar navbar-fixed-bottom navbar-inverse bg-inverse" style="background-color: #000000;">
                <div class="font-weight-bold text-white">
                    <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Learning Hero
                </div>   
        </nav>
                

        <div class="jumbotron text-align-center">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <h1> Pendaftaran Seminar Pelatihan Learning Hero </h1><hr><br>
                </div>
                <div class="col-sm-4 offset-sm-4">
                    <form class="form-horizontal" method="POST" action="" name="form">              
                        <div class="form-group">
                            <label class="control-label" for="nama">Nama :</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                            <span id="error_nama" class="text-danger"></span>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="email">Email :</label>
                            <input type="text" class="form-control" id="email" placeholder="example@mail.com" name="email">
                            <span id="error_email" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="kontak">No.Hp :</label>
                            <input type="text" class="form-control" id="kontak" placeholder="No.Hp" name="kontak">
                            <span id="error_kontak" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                    <label class="control-label" for="pekerjaan">Pekerjaan</label>
                                    <select class="form-control" id="pekerjaan">
                                    <option>--Pilih--</option>
                                    <option>Web Developer</option>
                                    <option>Game Developer</option>
                                    <option>Pelajar/Mahasiswa</option>
                                    <option>Lainnya</option>
                                    </select>
                                    <span id="error_pekerjaan" class="text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                    <label for="ktg">Kategori yang diminati</label>
                                    <select class="form-control" id="kategori">
                                    <option>--Pilih--</option>
                                    <option> Web</option>
                                    <option>Game</option>
                                    <option>AI</option>
                                    </select>
                                    <span id="error_kategori" class="text-danger"></span>
                            </div>                           
                        </div>

                        <input type="button" class="btn btn-primary" onclick="kirim()" value="Daftar">
                    </form>                 
                </div>

                <div class="col-sm-6 offset-sm-3"><hr></div>

                
            </div>    
        </div>

        <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    <?php
                        if(isset($_POST["nama"]) && $_POST["email"] && $_POST["kontak"] && $_POST["kontak"]) {
                            echo "<h2>Selamat, anda berhasil terdaftar dengan format : </h2>";
                            echo "<br>Nama : ".$_POST["nama"];
                            echo "<br>Email : ".$_POST["email"];
                            echo "<br>No.Hp : ".$_POST["kontak"];
                            echo "<br>Kode Pendaftaran : ".(rand(750, 1500) . "<br><br>Mohon tunjukkan screenshot laman ini atau tiket yang telah kami kirim ke email anda. Terimakasih telah mendaftar.");
                        }
                    ?>
                 <br><br>   
                </div>
        </div> 

        <script>
            function kirim(){
                var form = document.getElementsByName("form");
                var nama = document.getElementById("nama").value;
                var email = document.getElementById("email").value;
                var kontak = document.getElementById("kontak").value;
                var pekerjaan = document.getElementById("pekerjaan").value;
                var kategori = document.getElementById("kategori").value;
                
                
                if(nama !="" && email !="" && kontak !="" && pekerjaan !="--Pilih--" && kategori !="--Pilih--"){
                    form[0].submit();
                }
                else{
                    if (nama==""){
                        document.getElementById("error_nama").innerHTML = "nama tidak boleh kosong";
                    }
                    if (email==""){
                        document.getElementById("error_email").innerHTML = "email tidak boleh kosong";
                    }
                    if (kontak==""){
                        document.getElementById("error_kontak").innerHTML = "kontak tidak boleh kosong";
                    }
                    if (pekerjaan=="--Pilih--"){
                        document.getElementById("error_pekerjaan").innerHTML = "silahkan pilih pekerjaan";
                    }
                    if (kategori=="--Pilih--"){
                        document.getElementById("error_kategori").innerHTML = "silahkan pilih kategori yang diminati";
                    }
                }
            }
        </script>
  
        <nav class="navbar navbar-fixed-bottom navbar-inverse bg-inverse" style="background-color: #000000;"> </nav>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
    </body>
</html>