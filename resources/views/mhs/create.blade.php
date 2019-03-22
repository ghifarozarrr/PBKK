@extends('layouts.app')
@section('title')
Tambah Data Mahasiswa
@endsection

@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4>
			<i class="fa fa-plus-square"></i> Tambah Mahasiswa
		</h4>
		<hr>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('mhs.store')}}" method="post">
					 	{{csrf_field()}}
						<div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
							<input type="text" name="nrp" class="form-control" placeholder="NRP">
							{!! $errors->first('nrp', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('namahmhs') ? ' has-error' : '' }}">
							<input type="text" name="namahmhs" class="form-control" placeholder="Nama Mahasiswa">
							{!! $errors->first('namahmhs', '<p class="help-block">:message</p>') !!}
						</div>
					 
						<div class="form-group">
							{!! Form::label('nipdosenwali', 'Dosen Wali') !!}
							{!! Form::select('nipdosenwali', $dsn, null, array('class' => 'form-control','placeholder'=>'Dosen Wali')) !!}
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
