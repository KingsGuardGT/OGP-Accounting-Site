
<?php $__env->startSection('title','Our Clients'); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h2>Our<span> Clients</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">Clients</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <?php $__currentLoopData = [['Acme Retail','Retail'],['Nusantara Tech','Technology'],['Harapan Foods','FMCG'],['Bumi Logistics','Logistics']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$name,$seg]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-6 col-xl-3">
      <div class="card">
        <div class="card-body text-center">
          <img class="img-60 mb-3" src="<?php echo e(route('/')); ?>/assets/images/user/1.jpg" alt="<?php echo e($name); ?>">
          <h5 class="mb-1"><?php echo e($name); ?></h5>
          <small class="text-muted"><?php echo e($seg); ?></small>
        </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/site/clients.blade.php ENDPATH**/ ?>