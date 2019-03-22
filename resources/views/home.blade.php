@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<br><br>
<div class="col-md-4">
	<div class="text-center">
		<ul class="list-group">
			<li class="list-group-item"><i class="fa fa-user fa-5x"></i></li>
			<li class="list-group-item"><a href="/mhs" class="btn btn-primary">DATA MAHASISWA</a></li>
		</ul>
	</div>
</div>
<div class="col-md-4">
	<div class="text-center">
		<ul class="list-group">
			<li class="list-group-item"><i class="fa fa-university fa-5x"></i></li>
			<li class="list-group-item"><a href="/dosen" class="btn btn-primary">DATA DOSEN</a></li>
		</ul>
	</div>
</div>
<div class="col-md-4">
	<div class="text-center">
		<ul class="list-group">
			<li class="list-group-item"><i class="fa fa-book fa-5x"></i></li>
			<li class="list-group-item"><a href="/matkul" class="btn btn-primary">DATA MATA KULIAH</a></li>
		</ul>
	</div>
</div>
@endsection