@extends('layouts.app')
@section('title')
Data Mahasiswa
@endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4><i class="fa fa-user"></i> Daftar Mahasiswa</h4><hr>
		<div class=row><div class="col-md-6">
			<a href="/mhs/create" class="btn btn-primary">
				<i class="fa fa-plus-circle"></i> Tambah Mahasiswa
			</a>
		</div>
	<div class="col-md-2"></div><div class="col-md-4"></div>
</div>
<br>
@if(count($mhs))
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover table-condensed tfix">
		<thead align="center"><tr>
			<td><b>NRP</b></td>
			<td><b>Nama Mahasiswa</b></td>
			<td><b>Nama Dosen Wali</b></td>
			<td colspan="2"><b>MENU</b></td></tr>
		</thead>
		@foreach($mhs as $m)
		<tr>
			<td>{{ $m->nrp }}</td>
			<td>{{ $m->namahmhs }}</td>
			<td>{{ $m->namadosen}}</td>
			<td align="center" width="30px">
				<form method="POST" action="{{ route('mhs.destroy', $m->nrp) }}" accept-charset="UTF-8">
					<input name="_method" type="hidden" value="DELETE">
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<a href="{{route('mhs.edit', $m->nrp)}}" class="btn btn-primary">Edit</a>
					<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
				</form>
			</td></tr>
		@endforeach
	</table>
</div>
@else
<div class="alert alert-warning">
	<i class="fa fa-exclamation-triangle"></i> Data Mahasiswa belum ada
</div>
@endif
</div></div>
@endsection