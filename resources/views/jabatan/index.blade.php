 @extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Jabatan</div>
        <div class="panel-body">
         <a href="{{route('jabatan.create')}}" class="btn btn-info pull-right">Tambah Data Jabatan</a><br><br>
       <table class="table table-striped">

          <form action="{{url('jabatan')}}/?nama_jabatan=nama_jabatan">
        <input type="text" name="nama_jabatan" placeholder="Cari"></form>
    </center></div>
           

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>Kode Jabatan</th>
                        <th>Nama Jabatan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($jabatan as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_jabatan}} </td>
                        <td> {{$data->nama_jabatan}}</td>
                        <td> Rp.{{$data->besaran_uang}}</td>
                            <td>
                                <form method="POST" action="{{ route('jabatan.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('jabatan.edit', $data->id)}}" class="btn btn-primary">Edit</a>
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