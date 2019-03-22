@extends('layouts.app')
@section('title')
Tambah Mata Kuliah
@endsection

@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4>
			<i class="fa fa-plus-square"></i> Tambah Mata kuliah
		</h4>
		<hr>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('matkul.store')}}" method="post">
					 	{{csrf_field()}}
						<div class="form-group{{ $errors->has('kodematkul') ? ' has-error' : '' }}">
							<input type="text" name="kodematkul" class="form-control" placeholder="Kode Matkul">
							{!! $errors->first('kodematkul', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('namamatkul') ? ' has-error' : '' }}">
							<input type="text" name="namamatkul" class="form-control" placeholder="Nama Matkul">
							{!! $errors->first('namamatkul', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
							<input type="text" name="kelas" class="form-control" placeholder="Kelas">
							{!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
						</div>
					 
						<div class="form-group">
							{!! Form::label('nipdosenpengajar', 'Dosen Pengajar') !!}
							{!! Form::select('nipdosenpengajar', $dsn, null, array('class' => 'form-control','placeholder'=>'Dosen Pengajar')) !!}
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
