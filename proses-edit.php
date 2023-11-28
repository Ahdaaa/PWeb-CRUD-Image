<?php

    include("config.php");
    $id = $_GET['id'];

    if (isset($_POST['simpan'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $notelp = $_POST['notelp'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        if (empty($foto)){
            $sql = "UPDATE calon_siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jk', telp='$notelp', alamat='$alamat' WHERE id=$id";
            $query = mysqli_query($db, $sql);

            if ($query) {
                header('Location: index.php');
            } else {
                die("Gagal menyimpan perubahan...");
            }
        } else {
            $fotobaru = date('dmYHis').$foto;

            $path = "crud_upload/".$fotobaru;

            if (move_uploaded_file($tmp, $path)){
                $sql = "UPDATE calon_siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jk', telp='$notelp', alamat='$alamat',foto='$fotobaru' WHERE id=$id";
                $query = mysqli_query($db, $sql);
    
                if ($query){
                    header('Location: index.php?status=sukses');
                } else {
                    header('Location: index.php?status=gagal');
                }
            }
        }
        


    } else {
        die("Akses dilarang..");
    }

?>