@extends('layouts.app')
@section('title')
    Edit Mahasiswa
@endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4><i class="fa fa-check-square"></i>Edit Mahasiswa</h4><hr>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="{{route('mhs.update', $mhsnya->nrp)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
						 	{{csrf_field()}}
						 	<div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
						 		<input type="text" name="nrp" class="form-control" placeholder="NRP" value="{{$mhsnya->nrp}}">
						 		{!! $errors->first('nrp', '<p class="help-block">:message</p>') !!}
						 	</div>
							<div class="form-group{{ $errors->has('namahmhs') ? ' has-error' : '' }}">
						 		<input type="text" name="namahmhs" class="form-control" placeholder="Nama Mahasiswa" value="{{$mhsnya->namahmhs}}">
								{!! $errors->first('namahmhs', '<p class="help-block">:message</p>') !!}
							</div>
							<div class="form-group">
								{!! Form::label('nipdosenwali', 'Dosen Wali') !!}
								{!! Form::select('nipdosenwali', $dosennya,$mhsnya->nipdosenwali, array('class' => 'form-control')) !!}
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
