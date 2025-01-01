

<?php $__env->startSection('content'); ?>
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Halaman Donasi Uang</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-title">List Donasi Uang</h5>
                                    <h6 class="card-subtitle text-muted">List donasi uang yang telah diterima di panti asuhan.</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <a target="_blank" href="<?php echo e(route('dashboard.printMoneyDonation')); ?>" class="btn btn-danger">Cetak PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Bukti Transfer</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($donation->user->name); ?></td>
                                        <td>
                                            <img width="75" height="75"
                                            src="<?php echo e(asset('storage/' . $donation->photo)); ?>" alt="">
                                        </td>
                                        <td><?php echo e($donation->description); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($donation->date)->format('d M Y')); ?></td>
                                        <td>Rp.<?php echo e(number_format($donation->amount)); ?></td>
                                        <td>
                                            <a class="btn btn-info" href="<?php echo e(route('dashboard.donation.uang.edit', $donation->order_id)); ?>">
                                                <i class="align-middle" data-feather="edit-2"></i>
                                            </a>
                                            <a class="btn btn-danger delete" data-id="<?php echo e($donation->order_id); ?>">
                                                <i class="align-middle" data-feather="trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('delete-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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

        // delete modal
        $(document).on('click', '.delete', function() {
            $('#exampleModal').modal('show');
            const id = $(this).attr('data-id');
            let url = `<?php echo e(route('dashboard.donation.uang.destroy', ':id')); ?>`.replace(':id', id);
            $('#deleteForm').attr('action', url);
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\abc_Gabrielipp\Semester3\projek_laravel\al-mubarok\resources\views/dashboard/pages/donation/uang.blade.php ENDPATH**/ ?>