<!DOCTYPE html>
<html>
<head>
	<title>Administrasi | IT PEDIA</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 
	<h3></h3>
 
	<a href="/surat" class="btn btn-primary" style="margin-left:20px;"> Kembali</a>
	
	<br/>
	<br/>
	<div class="card" style="width: 90%; margin: 0 auto;">
  <div class="card-body">
	<table class="table table-striped">
	<form action="/surat/store" method="post">
		{{ csrf_field() }}
	<div class="mb-3">
	<tr>
		<td>No Surat </td>
		<td><input type="text" name="kode" required="required" ></td>
	</tr>
	<tr>
		<td>Perihal </td>
		<td><input type="text" name="perihall" required="required" ></td>
	</tr>
	<tr>
		<td>Isi Ringkasa Surat </td>
		<td><input type="text" name="isi" required="required" ></td>
	</tr>
	<tr>
		<td>Asal </td>
		<td><input type="text" name="asal" required="required" ></td>
	</tr>
	<tr>
		<td>tanggal </td>
		<td><input type="date" name="tanggal" required="required" ></td>
	</tr>
	</div>
		<input type="submit" value="Simpan Data"> 
	</form>
	</table>
</div>
</div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>