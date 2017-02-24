@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data TunjanganPegawai</div>

                <div class="panel-body">
                    {!! Form::model($tunjanganpegawai,['method' => 'PATCH','route'=>['tunjanganpegawai.update',$tunjanganpegawai->id]]) !!}
                <div class="form-group">
                    {!! Form::label('Kode Tunjangan Id', 'Kode Tunjangan Id') !!}
                    {!! Form::text('kode_tunjangan_id',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Id Pegawai', 'Id Pegawai') !!}
                    {!! Form::text('id_pegawai',null,['class'=>'form-control']) !!}
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