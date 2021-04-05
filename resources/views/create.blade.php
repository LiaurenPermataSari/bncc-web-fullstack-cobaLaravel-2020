<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<h3>Data Pertanyaan</h3>

	<a href="/pertanyaan"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pertanyaan/store" method="post">
		{{ csrf_field() }}
		Content <textarea name="content"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
		


</body>
</html>