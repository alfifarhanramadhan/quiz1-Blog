@extends('tamplate.index')
@section('content')
<div class="container-fluide bg-dark">
<div class="container bg-info">
<div class="container">
<h3>Daftar Photo</h3>

<table>
	<tr>
		<td>Date</td>
		<td>Title</td>
		<td>Text</td>
		<td>Upload</td>
		<td>ID post</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->photo_date }}</td>
		<td>{{ $row->photo_title }}</td>
		<td>{{ $row->photo_text }}</td>
		<td>{{ $row->photo_upload }}</td>
		<td>{{ $row->post_id }}</td>
		<td><form action="{{ url('photo/'.$row->photo_id) }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			@csrf
			<button>Hapus</button>
		</form></td>
		<td><a href="{{ url('photo/'.$row->photo_id.'/edit') }}"><button>Edit</button></a></td>
	</tr>
	</tr>
@endforeach
</table>
<div><a href="{{ url('photo/create') }}">Tambah Data</a></div>
</div>
</div>
@endsection 