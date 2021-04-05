<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Edit Pertanyaan</h3>

	<a href="/pertanyaan"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($question as $p)
	<form action="/pertanyaan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$p->id}}"> <br/>
		Content <textarea required="required" name="content" value="{{$p->content}}">{{$p->content}}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>