<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Tunjangan</div>
        <div class="panel-body">
       
         <a href="<?php echo e(route('tunjangan.create')); ?>" class="btn btn-info pull-right">Tambah Data Tunjangan</a><br><br>
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
                        <th>Kode Tunjangan</th>
                        <th>Id Jabatan</th>
                        <th>Id Golongan</th>
                        <th>Status</th>
                        <th>Jumlah Anak</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tbody>
                    <tr> 
                        <td> <?php echo e($id++); ?> </td>
                        <td> <?php echo e($data->kode_tunjangan); ?> </td>
                        <td> <?php echo e($data->jabatan->nama_jabatan); ?> </td>
                        <td> <?php echo e($data->golongan->nama_golongan); ?> </td>
                        <td> <?php echo e($data->status); ?> </td>
                        <td> <?php echo e($data->jumlah_anak); ?> </td>
                        <td> <?php echo e($data->besaran_uang); ?> </td>
                        <td>
                        
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