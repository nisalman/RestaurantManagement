<?php $__env->startSection('title','Contact'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title"><?php echo e($contact->subject); ?></h4>
                        </div>
                        <div class="card-content">
                           <div class="row">
                               <div class="col-md-12">
                                   <strong>Name: <?php echo e($contact->name); ?></strong><br>
                                   <b>Email: <?php echo e($contact->email); ?></b> <br>
                                   <strong>Message: </strong><hr>

                                   <p><?php echo e($contact->message); ?></p><hr>

                               </div>
                           </div>
                            <a href="<?php echo e(route('contact.index')); ?>" class="btn btn-danger">Back</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>