@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data LemburPegawai</div>

                <div class="panel-body">
                    {!! Form::model($lemburpegawai,['method' => 'PATCH','route'=>['lemburpegawai.update',$lemburpegawai->id]]) !!}
                <div class="form-group">
                    {!! Form::label('Kode lembur Id', 'Kode lembur Id') !!}
                    {!! Form::text('kode_lembur_id',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Id Pegawai', 'Id Pegawai') !!}
                    {!! Form::text('id_pegawai',null,['class'=>'form-control']) !!}
                </div>
               
                <div class="form-group">
                    {!! Form::label('Jumlah Jam', 'Jumlah Jam') !!}
                    {!! Form::text('jumlah_jam',null,['class'=>'form-control']) !!}
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