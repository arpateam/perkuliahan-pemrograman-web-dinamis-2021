<!DOCTYPE html>
<html>
<head>
	<title>Hal. Registrasi</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<?php

		if (isset($_POST['submit'])) {

			$nik 				= $_POST['nik'];
			$nama 				= $_POST['nama'];
			$gol_darah 			= $_POST['gol_darah'];
			$riwayat_penyakit 	= $_POST['riwayat_penyakit'];
			$jenis_vaksin 		= $_POST['jenis_vaksin'];
			$vaksin_ke 			= $_POST['vaksin_ke'];

			if(empty($nik)){
				$arrayGagal[] = "NIK anda belum diisi!";
			}
			if(empty($nama)){
				$arrayGagal[] = "NAMA anda belum diisi!";
			}
			if(empty($gol_darah)){
				$arrayGagal[] = "GOLONGAN DARAH anda belum diisi!";
			}
			if(empty($riwayat_penyakit)){
				$arrayGagal[] = "Riwayat Penyakit anda belum diisi!";
			}
			if(empty($jenis_vaksin)){
				$arrayGagal[] = "Jenis Vaksin anda belum diisi!";
			}
			if(empty($vaksin_ke)){
				$arrayGagal[] = "Vaksin Ke- anda belum diisi!";
			}

			$jmlArray	= count($arrayGagal);

			if ($jmlArray===0) {
				// include database connection file
				include_once("koneksi.php");
				// Insert user data into table
				$result = mysqli_query($con, "INSERT INTO data_vaksinasi VALUES ('$nik','$nama', '$gol_darah','$riwayat_penyakit','$jenis_vaksin','$vaksin_ke')");
				// Show message when user added
				echo "Data berhasil disimpan";
			}
		}

	?>
</head>
<body>

	<div class="row justify-content-center my-5">
		<div class="col-5 bg-primary rounded shadow">
			<form class="p-4">
			  	<div class="mb-3">
				    <label for="nik" class="form-label">NIK</label>
				    <input type="number" class="form-control" id="nik" required min="16">
			  	</div>
				<div class="mb-3">
				    <label for="nama" class="form-label">Nama</label>
				    <input type="text" class="form-control" id="nama">
				</div>
				<div class="mb-3">
				    <label for="gol_darah" class="form-label">Gol. Darah</label>
				    <input type="text" class="form-control" id="gol_darah">
				</div>
				<div class="mb-3">
				    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
				    <input type="text" class="form-control" id="riwayat_penyakit">
				</div>
				<div class="mb-3">
			      	<label for="jenis_vaksin" class="form-label">Jenis Vaksin</label>
			      	<select id="jenis_vaksin" class="form-select">
			        	<option value="Sinovac">Sinovac</option>
			        	<option value="AstraZeneca">AstraZeneca</option>
			        	<option value="Sinopharm">Sinopharm</option>
			        	<option value="Moderna">Moderna</option>
			      	</select>
			    </div>
				<div class="mb-3">
			      	<label for="vaksin_ke" class="form-label">Vaksin Ke-</label>
			      	<select id="vaksin_ke" class="form-select">
			        	<option value="1">1</option>
			        	<option value="2">2</option>
			      	</select>
			    </div>
			  	<button type="submit" name="submit" class="btn btn-warning">Submit</button>
			</form>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>