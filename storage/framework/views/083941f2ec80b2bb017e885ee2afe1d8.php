
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>DATA PELANGGAN</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('pelanggan/create')); ?>">Tambah Data</a>
        <table class="table table-collapse">
            <thead>
                <th>NO</th>
                <th>GOLONGAN</th>
                <th>USER</th>
                <th>KODE</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NOMOR HP</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </thead>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <td><?php echo e($row->pel_id); ?></td>
                <td><?php echo e($row->golongan->gol_nama); ?></td>
                <td><?php echo e($row->users->user_nama); ?></td>
                <td><?php echo e($row->pel_no); ?></td>
                <td><?php echo e($row->pel_nama); ?></td>
                <td><?php echo e($row->pel_alamat); ?></td>
                <td><?php echo e($row->pel_hp); ?></td>
                <td><a class="btn btn-info btn-sm float" href="<?php echo e(url('pelanggan/' .$row->pel_id. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('pelanggan/' .$row->pel_id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-quiz-\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>