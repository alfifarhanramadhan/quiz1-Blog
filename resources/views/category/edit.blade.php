@extends('tamplate.index')

@section('content')
<div class="container-fluide bg-dark">
<div class="container bg-info">
<div class="container">
	<h3>Edit Data Album</h3>
		<form action="{{ url('/category/' . $row->category_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="category_name" value="{{ $row->category_name }}"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="category_text" value="{{ $row->category_text }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</div>
</div>
@endsection 