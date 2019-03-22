@extends('layouts.app')
@section('title')
Data Mata Kuliah
@endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4><i class="fa fa-user"></i> Daftar Mata Kuliah</h4><hr>
		<div class=row><div class="col-md-6">
			<a href="/matkul/create" class="btn btn-primary">
				<i class="fa fa-plus-circle"></i> Tambah Mata Kuliah
			</a>
		</div>
	<div class="col-md-2"></div><div class="col-md-4"></div>
</div>
<br>
@if(count($matkul))
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover table-condensed tfix">
		<thead align="center"><tr>
			<td><b>Kode Matkul</b></td>
			<td><b>Nama Matkul</b></td>
			<td><b>Kelas</b></td>
			<td><b>Dosen Pengajar</b></td>
			<td colspan="2"><b>Menu</b></td></tr>
		</thead>
		@foreach($matkul as $m)
		<tr>
			<td>{{ $m->kodematkul }}</td>
			<td>{{ $m->namamatkul }}</td>
			<td>{{ $m->kelas }}</td>
			<td>{{ $m->namadosen }}</td>
			<td align="center" width="30px">
				<form method="POST" action="{{ route('matkul.destroy', $m->kodematkul) }}" accept-charset="UTF-8">
					<input name="_method" type="hidden" value="DELETE">
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<a href="{{route('matkul.edit', $m->kodematkul)}}" class="btn btn-primary">Edit</a>
					<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
				</form>
			</td></tr>
		@endforeach
	</table>
</div>
@else
<div class="alert alert-warning">
	<i class="fa fa-exclamation-triangle"></i> Data Mata kuliah belum ada
</div>
@endif
</div></div>
@endsection