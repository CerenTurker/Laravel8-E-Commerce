<?php $__env->startSection('title','Kategori listeleme'); ?>


<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kategoriler</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Kategoriler</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <a type="button" href="<?php echo e(route('admin_category_add')); ?>" class="btn btn-block btn-info col-md-3">Yeni Ekle</a>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <div class="card">

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Kaynak</th>
                                    <th>Başlık</th>
                                    <th>Durum</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($ct->id); ?></td>
                                        <td><?php echo e($ct->parent_id); ?> </td>
                                        <td><?php echo e($ct->title); ?></td>
                                        <td><?php echo e($ct->status); ?></td>
                                        <td><a class="btn btn-block btn-outline-info" href="<?php echo e(route('admin_category_edit',['id'=>$ct->id])); ?>">Düzenle</a></td>
                                        <td><a class="btn btn-block btn-outline-info" href="<?php echo e(route('admin_category_delete',['id'=>$ct->id])); ?>" onclick="return confirm('Silmek İstediğinize Emin Misiniz?')">Sil</a></td>
                                    </tr>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/demir/Desktop/LaravelProject/eticaret2/resources/views/admin/category.blade.php ENDPATH**/ ?>