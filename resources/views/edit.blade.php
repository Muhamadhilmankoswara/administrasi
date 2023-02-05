<!DOCTYPE html>
<html>
<head>
	<title>Administrasi | IT PEDIA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<br>
	<a href="/surat" class="btn btn-primary" style="margin-left:20px;"> Kembali</a>
	
	<br/>
	<br/>
	<div class="card" style="width: 90%; margin: 0 auto;">
  <div class="card-body">
  	<table class="table table-borderless">
	@foreach($surat_masuk as $p)
	<form action="/surat/update" method="post">
		{{ csrf_field() }}
	<div class="mb-3">
	<tr>
		<td><input type="hidden" name="kode" value="{{ $p->kode_agenda }}"></td>
	</tr>
	<tr>
		<td>Perihal </td>
		<td><input type="text" name="perihall" required="required" value="{{ $p->perihal }}"></td>
	</tr>
	<tr>
		<td>Isi Ringkas Surat</td>
		<td><input type="textarea" name="isi" required="required" value="{{ $p->isi_ringkassurat }}"></td>
	</tr>
	<tr>
		<td>Asal Surat</td>
		<td><input type="text" name="asal" required="required" value="{{ $p->asal_surat }}"></td>
	</tr>
	<tr>
		<td>Tanggal Surat</td>
		<td><input type="date" required="required" name="tanggal" value="{{ $p->Tgl_surat }}"></input></td>
	</tr>
	</div>
		<input type="submit" value="Simpan Data"> 
	</form>
	@endforeach
	</table>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>