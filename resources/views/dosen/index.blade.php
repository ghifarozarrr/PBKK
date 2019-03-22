@extends('layouts.app')
@section('title')
Data Dosen
@endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4><i class="fa fa-university"></i> DAFTAR DOSEN</h4><hr>
		<div class=row><div class="col-md-6">
			<a href="/dosen/create" class="btn btn-primary">
				<i class="fa fa-plus-circle"></i> Tambah Dosen
			</a>
		</div>
		<div class="col-md-2"></div><div class="col-md-4"></div>
	</div>
<br>
@if($dsn->count())
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover table-condensed tfix">
		<thead align="center">
			<tr>
				<td><b>NIP</b></td><td><b>Nama Dosen</b></td>
				<td colspan="2"><b>Menu</b></td>
			</tr>
		</thead>
		@foreach($dsn as $m)
		<tr>
			<td>{{ $m->nip }}</td>
			<td>{{ $m->namadosen }}</td>
			<td align="center" width="30px">
				<form method="POST" action="{{ route('dosen.destroy', $m->nip) }}" accept-charset="UTF-8">
					<input name="_method" type="hidden" value="DELETE">
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<a href="{{route('dosen.edit', $m->nip)}}" class="btn btn-primary">Edit</a>
					<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
				</form>
            </td>
        </tr>
    	@endforeach
	</table>
</div>
@else
<div class="alert alert-warning">
	<i class="fa fa-exclamation-triangle"></i> Data Dosen tidak Ada
</div>
@endif
</div></div>
@endsection