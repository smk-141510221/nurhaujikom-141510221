@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Jabatan</div>

                <div class="panel-body">
                    {!! Form::model($jabatan,['method' => 'PATCH','route'=>['jabatan.update',$jabatan->id]]) !!}
                <div class="form-group">
                    {!! Form::label('Kode jabatan', 'Kode jabatan') !!}
                    {!! Form::text('kode_jabatan',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Nama jabatan', 'Nama jabatan') !!}
                    {!! Form::text('nama_jabatan',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
                    {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection