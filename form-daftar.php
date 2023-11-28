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
                <h3 class="text-dark">Form Daftar</h3>
            </div>

            <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
            
                <fieldset class="d-flex flex-column gap-1">
                
                    <div>
                        <label for="nis">NIS:</label>
                        <input type="text" name="nis" id="nis" placeholder="Nomor Induk">
                    </div>

                    <div>
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama Lengkap">
                    </div>
                    
                    <div>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                    </div>

                    <div>
                        <label for="notelp">Telepon:</label>
                        <input type="text" name="notelp" id="notelp" placeholder="Nama Lengkap">
                    </div>

                    <div>
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat"></textarea>
                    </div>

                    <div>
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" />
                    </div>
                    
                    <input class="btn b3 mt-5" type="submit" name="daftar" value="Daftar">
                    
                </fieldset>
        
            </form>
        </div>
    </div>
</body>