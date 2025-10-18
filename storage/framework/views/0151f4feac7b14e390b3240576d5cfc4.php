<?php $__env->startSection('title', 'Sticky'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/sticky.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Sticky</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
	<li class="breadcrumb-item">Ui Elements</li>	
	<li class="breadcrumb-item active">Sticky</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row sticky-header-main">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Sticky Note <a class="btn btn-primary pull-right m-l-10" id="add_new" href="javascript:;">Add New Note</a></h5>
            </div>
            <div class="card-body">
               <div class="sticky-note" id="board"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(route('/')); ?>/assets/js/jquery.ui.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/sticky/sticky.js"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/ui-elements/sticky.blade.php ENDPATH**/ ?>