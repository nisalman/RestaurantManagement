<?php $__env->startSection('title','Create'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->make('layouts.partial.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="card">
                            <form method="POST" action="<?php echo e(route('category.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <a href="<?php echo e(route('category.index')); ?>" class="btn btn-danger">Back</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>