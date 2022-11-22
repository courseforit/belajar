<DOCTOTYPE html>
<html lang="en">
<head>
	<!-- Membutuhkan meta tag -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1. shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<title>Membuat Input Data Dengan Javascript Tanpa Database</title>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8"><h1>Hello, world!</h1>
				<form name="datapribadi" method="" action"">
			<div class="form-group">
				<label for="exampleFormControlInput1">Nama</label>
				<input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="isi nama asli....">
				<label for="exampleFormControlInput1">Email</label>
				<input type="email" class="form-control" name="email" id="exampleFormControlInput2" placeholder="isi email aktif....">
			</div>
			
			<div class="form-group">
			<button type="button" onClick='inputdata()' class="btn btn-success">Simpan</button>
			<button type="reset" class="btn btn-warning">Batal</button>
			</div>

		<div class="row">
			<table class="table" id="databel">
				<thead>
					<tr>
						<th scope="col">Nama</th>
						<th scope="col">Email</th>
					</tr>
				</thead>
			</table>
		</div>
	</form>
			</div>
		</div>	<div class="col-md-2"></div>
		
	<!-- Pilihan Javascript ==>
	<!-- jQuery pertama, setelah Popper.js, Setela Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootsrap.min.js"></script>

</body>
</html>