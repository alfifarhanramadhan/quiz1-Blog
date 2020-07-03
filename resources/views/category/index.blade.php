@extends('tamplate.index')

@section('content')
<div class="container-fluide bg-dark">
<div class="container bg-info">
<div class="container">
<h3>Daftar Category</h3>
<table>
	<tr>
		<td>Nama</td>
		<td>Text</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->category_name }}</td>
		<td>{{ $row->category_text }}</td>
		<td><form action="{{ url('category/'.$row->category_id) }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			@csrf
			<button>Hapus</button>
		</form></td>
		<td><a href="{{ url('category/'.$row->category_id.'/edit') }}"><button>Edit</button></a></td>
	</tr>
	</tr>
@endforeach
</table>
<div><a href="{{ url('category/create') }}">Tambah Data</a></div>
</div>
</div>
@endsection 