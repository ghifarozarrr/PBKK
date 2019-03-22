@extends('layouts.app')
@section('title')
    Edit Mata Kuliah
@endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4><i class="fa fa-check-square"></i>Edit Mata Kuliah</h4><hr>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="{{route('matkul.update', $matkulnya->kodematkul)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
						 	{{csrf_field()}}
						 	<div class="form-group{{ $errors->has('kodematkul') ? ' has-error' : '' }}">
						 		<input type="text" name="kodematkul" class="form-control" placeholder="Kode Matkul" value="{{$matkulnya->kodematkul}}">
						 		{!! $errors->first('kodematkul', '<p class="help-block">:message</p>') !!}
						 	</div>
							<div class="form-group{{ $errors->has('namamatkul') ? ' has-error' : '' }}">
						 		<input type="text" name="namamatkul" class="form-control" placeholder="Nama matkul" value="{{$matkulnya->namamatkul}}">
								{!! $errors->first('namamatkul', '<p class="help-block">:message</p>') !!}
							</div>
							<div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
						 		<input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{$matkulnya->kelas}}">
								{!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
							</div>
							<div class="form-group">
								{!! Form::label('nipdosenpengajar', 'Dosen Wali') !!}
								{!! Form::select('nipdosenpengajar', $dosennya,$matkulnya->nipdosenpengajar, array('class' => 'form-control')) !!}
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
