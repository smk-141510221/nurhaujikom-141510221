@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Kategori Lembur</div>
        <div class="panel-body">
    
     <a href="{{route('kategori.create')}}" class="btn btn-info pull-right">Tambah Data Kategori</a><br><br>
       <table class="table table-striped">
           <table class="table table-striped table-bordered table-hover">

            <form action="{{url('kategori')}}/?kode_lembur=kode_lembur">
        <input type="text" name="kode_lembur" placeholder="Cari"></form>
    </center></div>
           


                <thead>
                    <tr class="bg-primary">
                        <th>Id</th>
                        <th>Kode Lembur</th>
                        <th>Id Jabatan</th>
                        <th>Id Golongan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($kategori as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_lembur}} </td>
                        <td> {{$data->jabatan->nama_jabatan}}</td>
                        <td> {{$data->golongan->nama_golongan}}</td>
                        <td> Rp.{{$data->besaran_uang}}</td>
                       <td>
                                <form method="POST" action="{{ route('kategori.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('kategori.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection