<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | Sekolah Ngoding</title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    	<style type="text/css">
		html, 
        body { 
            height: 100%; 
            background-color: #423838;
            color: white;
            background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
        }
		.mid-center { 
            top: 50%; 
            left: 50%; 
            transform: translateX(-50%) translateY(-50%); 
        }
        
        h1 {
            color: white
            font-size: 4em;
        }
        .notifikasiy {
            color: green;
        }
        .notifikasin {
            color: red;
        }
        footer {
            margin-top: 250px;
            color: black;
        }
	</style>
</head>
 
<body>
    <div class="container">
        <header>
            <h3 class="text-center mt-5">Formulir Pendaftaran Siswa</h3>
        </header>
 
        <form action="proses-pendaftaran.php" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="nama">Nama: </label>
                <input type="text" class="form-control" name="nama" placeholder="Nama lengkap"/>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat: </label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>
            <fieldset class="form-group">
                <legend class="col-form-label">Jenis Kelamin</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="laki" name="jenis_kelamin" value="laki-laki">
                    <label class="form-check-label" for="laki">
                        Laki laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="perempuan"> 
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="agama">Agama: </label>
                <select class="form-control" name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama sekolah" />
            </div>
            <div class="form-group">
                    <label for="foto" class="form-label">Foto: </label>
                    <input type="file" name="foto" placeholder="foto" class="form-control"  />
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Daftar" name="daftar" />
            </div>
        </form>
    </div>
</body>
</html>