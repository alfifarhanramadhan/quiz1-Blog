@extends('tamplate.index')


@section('content')
<div class="container-fluide bg-dark">
<div class="container bg-info">
<div class="container">
	<h3>Tambah Data Category</h3>
	<form action="{{ url('/category') }}" method="post">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="category_name"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="category_text"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table> 
	</form>
</div>
</div>
@endsection