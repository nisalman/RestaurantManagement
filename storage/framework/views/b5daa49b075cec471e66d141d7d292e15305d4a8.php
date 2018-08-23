<?php $__env->startSection('title','Reservation'); ?>




<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->make('layouts.partial.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Reservations</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Time and Date</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php echo e($reservation->name); ?></td>
                                            <td><?php echo e($reservation->phone); ?></td>
                                            <td><?php echo e($reservation->email); ?></td>
                                            <td><?php echo e($reservation->date_and_time); ?></td>
                                            <th><?php echo e($reservation->message); ?></th>
                                            <th>
                                                <?php if($reservation->status == true): ?>
                                                    <span class="label label-success">Confirmed</span>
                                                <?php else: ?>
                                                    <span class="label label-danger">not Confirmed yet</span>
                                                <?php endif; ?>

                                            </th>
                                            <td><?php echo e($reservation->created_at); ?></td>
                                            <td>
                                                <?php if($reservation->status == false): ?>
                                                    <form id="status-form-<?php echo e($reservation->id); ?>" action="<?php echo e(route('reservation.status',$reservation->id)); ?>" style="display: none;" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-<?php echo e($reservation->id); ?>').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">done</i></button>
                                                <?php endif; ?>
                                                <form id="delete-form-<?php echo e($reservation->id); ?>" action="<?php echo e(route('reservation.destory',$reservation->id)); ?>" style="display: none;" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-<?php echo e($reservation->id); ?>').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
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
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>