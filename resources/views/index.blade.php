<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<h3>Data Pertanyaan</h3>

	<a href="/pertanyaan/create"> Tambah Pertanyaan Baru</a><br>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
            <th>ID</th>
			<th>Pertanyaan</th>
            <th>Edit</th>
            <th>Hapus</th>
		</tr>
		@foreach($question as $p)
		<tr>
			<td>{{ $p->id}}</td>
            <td>{{ $p->content}}</td>
			<td>
				<a href="/pertanyaan/{{$p->id}}/edit">Edit Pertanyaan</a>
			</td>
            <td>
				<a href="/pertanyaan/{{$p->id}}/destroy">Hapus Pertanyaan</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>