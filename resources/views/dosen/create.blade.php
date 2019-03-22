@extends('layouts.app')
@section('title')
Tambah Data Dosen
@endsection

@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4>
			<i class="fa fa-plus-square"></i> Tambah Dosen
		</h4>
		<hr>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('dosen.store')}}" method="post">
					 	{{csrf_field()}}
						<div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
							<input type="text" name="nip" class="form-control" placeholder="NIP">
							{!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('namadosen') ? ' has-error' : '' }}">
							<input type="text" name="namadosen" class="form-control" placeholder="Nama Dosen">
							{!! $errors->first('namadosen', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group"> 
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
