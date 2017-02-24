 

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Jabatan</div>
        <div class="panel-body">
         <a href="<?php echo e(route('jabatan.create')); ?>" class="btn btn-info pull-right">Tambah Data Jabatan</a><br><br>
       <table class="table table-striped">

          <form action="<?php echo e(url('jabatan')); ?>/?nama_jabatan=nama_jabatan">
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
                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tbody>
                    <tr> 
                        <td> <?php echo e($id++); ?> </td>
                        <td> <?php echo e($data->kode_jabatan); ?> </td>
                        <td> <?php echo e($data->nama_jabatan); ?></td>
                        <td> Rp.<?php echo e($data->besaran_uang); ?></td>
                            <td>
                                <form method="POST" action="<?php echo e(route('jabatan.destroy', $data->id)); ?>" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                                    <a href="<?php echo e(route('jabatan.edit', $data->id)); ?>" class="btn btn-primary">Edit</a>
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