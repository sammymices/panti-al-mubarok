

<?php $__env->startSection('content'); ?>
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Halaman Donasi</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Edit Data
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="<?php echo e(Route('dashboard.donation.barang.update',$data->order_id)); ?>" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('put'); ?>
                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="inputEmail4">Nama</label>
                                                    <input type="name" class="form-control" value="<?php echo e($data->name); ?>" name="name" id="inputEmail4" placeholder="Nama Barang">
                                                </div>
                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="inputAddress2">Jumlah</label>
                                                    <input type="number" class="form-control" value="<?php echo e($data->amount); ?>" name="amount" id="inputAddress2" placeholder="Jumlah Barang">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                    <div class="mb-3 col-md-12">
                                                        <label class="form-label" for="inputAddress2">Deskripsi</label>
                                                        <textarea name="description" value="" id="" class="form-control" cols="30" rows="5"><?php echo e($data->description); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-8">
                                                    <div class="mb-3">
                                                        <img src="<?php echo e(asset('storage/' .$data->photo)); ?>" style="max-width: 200px;" alt="">
                                                        <label class="form-label w-100">Foto</label>
                                                        <input type="file" name="photo">
                                                        <small class="form-text text-muted">Inputkan foto jika ada yang berubah</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#datatables-reponsive").DataTable({
                responsive: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\abc_Gabrielipp\Semester3\projek_laravel\al-mubarok\resources\views/dashboard/pages/donation/edit.blade.php ENDPATH**/ ?>