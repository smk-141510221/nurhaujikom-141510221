<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Pegawai</div>
        <div class="panel-body">
       
        <a href="<?php echo e(route('pegawai.create')); ?>" class="btn btn-info pull-right">Tambah Data Pegawai</a><br><br>
       <table class="table table-striped">

       <form class="form-search" >
                    <p class="text-right">
                    <input type="text" class="input-medium search-query">
                    <button type="submit" class="btn">Search</button>
                </p></form>


            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>Id</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Golongan</th>
                        <th>Photo</th>
                        <th colspan="3">Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tbody>
                    <tr> 
                        <td> <?php echo e($id++); ?> </td>
                        <td> <?php echo e($data->nip); ?> </td>
                        <td> <?php echo e($data->User->name); ?> </td>
                        <td> <?php echo e($data->User->email); ?> </td>
                        <td> <?php echo e($data->jabatan->nama_jabatan); ?> </td>
                        <td> <?php echo e($data->golongan->nama_golongan); ?> </td>
                        <td><center><img src="/assets/image/<?php echo e($data->foto); ?>" class="img-polaroid"" method="post" width="50px" height="50px"></center></td>
                       
                    <td>
                                <form method="POST" action="<?php echo e(route('pegawai.destroy', $data->id)); ?>" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                                    <a href="<?php echo e(route('pegawai.edit', $data->id)); ?>" class="btn btn-primary">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </table>
                </div>
        
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>