<?php
    include("config.php");

    if (isset($_POST['daftar'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $notelp = $_POST['notelp'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        $fotobaru = date('dmYHis').$foto;

        $path = "crud_upload/".$fotobaru;

        if (move_uploaded_file($tmp, $path)){
            $sql = "INSERT INTO calon_siswa (nis, nama, jenis_kelamin, telp, alamat, foto) 
                VALUE ('$nis', '$nama', '$jk', '$notelp', '$alamat', '$fotobaru')";

            $query = mysqli_query($db, $sql);

            if ($query){
                header('Location: index.php?status=sukses');
            } else {
                header('Location: index.php?status=gagal');
            }
        }
        
    } else{
        die("Akses dilarang...");
    }
?>