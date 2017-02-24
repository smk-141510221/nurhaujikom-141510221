@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Penggajian</div>

                <div class="panel-body">
                    {!! Form::model($pengggajian,['method' => 'PATCH','route'=>['penggajian.update',$penggajian->id]]) !!}
                <div class="form-group">
                    {!! Form::label('Tunjangan Pegawai Id', 'Tunjangan Pegawai Id') !!}
                    {!! Form::text('tunjangan_pegawai_id',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Jumlah Jam Lembur', 'Jumlah Jam Lembur') !!}
                    {!! Form::text('jumlah_jam_lembur',null,['class'=>'form-control']) !!}
                </div>
               
                <div class="form-group">
                    {!! Form::label('Jumlah Uang Lembur', 'Jumlah Uang Lembur') !!}
                    {!! Form::text('jumlah_uang_lembur',null,['class'=>'form-control']) !!}
                </div>
                 <div class="form-group">
                    {!! Form::label('Gaji Pokok', 'Gaji Pokok') !!}
                    {!! Form::text('gaji_pokok',null,['class'=>'form-control']) !!}
                </div>
                 <div class="form-group">
                    {!! Form::label('Total Gaji', 'Total Gaji') !!}
                    {!! Form::text('total_gaji',null,['class'=>'form-control']) !!}
                </div>
                  <div class="form-group">
                    {!! Form::label('Tanggal Pengembalian', 'Tanggal Pengembalian') !!}
                    {!! Form::text('tanggal_pengembalian',null,['class'=>'form-control']) !!}
                </div>
                  <div class="form-group">
                    {!! Form::label('Status Pengembalian', 'Status Pengembalian') !!}
                    {!! Form::text('status_pengembalian',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Petugas Penerima', 'Petugas Penerima') !!}
                    {!! Form::text('petugas_penerima',null,['class'=>'form-control']) !!}
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