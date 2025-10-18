
<?php $__env->startSection('title','About Us'); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h2>About<span> Us</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">About Us</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-8">
      <div class="card">
        <div class="card-header"><h5>Ogung Ganda Persada Accounting</h5></div>
        <div class="card-body">
          <p>We are a professional accounting and advisory firm delivering accurate bookkeeping, tax, audit-readiness, and financial insights for growing businesses.</p>
          <p>Our mission is to empower decision-making with timely, trustworthy numbers and pragmatic guidance.</p>
          <ul class="list-unstyled m-0">
            <li>• Bookkeeping & Reporting</li>
            <li>• Tax & Compliance</li>
            <li>• Payroll & HR support</li>
            <li>• Financial Planning & Analysis</li>
          </ul>
          <div class="mt-3">
            <a href="<?php echo e(route('site.contact')); ?>" class="btn btn-pill btn-air-primary">Talk to us</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header"><h5>Quick Facts</h5></div>
        <div class="card-body">
          <div class="row text-center">
            <div class="col-6 mb-3"><h3 class="mb-0">10+</h3><small>Years Experience</small></div>
            <div class="col-6 mb-3"><h3 class="mb-0">100+</h3><small>Clients</small></div>
            <div class="col-6"><h3 class="mb-0">24/7</h3><small>Support</small></div>
            <div class="col-6"><h3 class="mb-0">99%</h3><small>Accuracy</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/site/about.blade.php ENDPATH**/ ?>