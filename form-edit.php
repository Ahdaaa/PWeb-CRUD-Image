<?php
    include("config.php");

    if( !isset($_GET['id']) ){
        header('Location: index.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan...");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="./src/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/style.css">
</head>
<body>
    <div class="d-flex align-items-center justify-content-center">
        <div class="main-cont d-flex flex-column rounded-3 justify-content-start" style="gap: 35px;">
            <div class="text-center">
                <h1 class="text-dark">Formulir Pendaftaran Siswa</h1>
                <h3 class="text-dark">Form Edit</h3>
            </div>

            <form method="POST" action="proses-edit.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
            
                <fieldset class="d-flex flex-column gap-1">
                
                    <div>
                        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                    </div>

                    <div>
                        <label for="nis">NIS:</label>
                        <input type="text" name="nis" id="nis" placeholder="Nomor Induk" value="<?php echo $siswa['nis'] ?>">
                    </div>

                    <div>
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
                    </div>

                    <div>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?> >Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?> >Perempuan</label>
                    </div>

                    <div>
                        <label for="notelp">Telepon:</label>
                        <input type="text" name="notelp" id="notelp" placeholder="notelp" value="<?php echo $siswa['telp'] ?>" />
                    </div>

                    <div>
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat"><?php echo $siswa['alamat']?></textarea>
                    </div>

                    <div>
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" />
                    </div>

                    
                    <input class="btn b3 mt-5" type="submit" name="simpan" value="Simpan">
                    
                </fieldset>
        
            </form>
        </div>
    </div>
</body>

