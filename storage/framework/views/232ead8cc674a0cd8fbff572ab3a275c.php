

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
  <h2>Welcome<span> Home</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
  <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item active">Overview</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body p-0">
        <div id="ogpCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
          <ol class="carousel-indicators">
            <li data-target="#ogpCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#ogpCarousel" data-slide-to="1"></li>
            <li data-target="#ogpCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo e(route('/')); ?>/assets/images/masonry/1.jpg" alt="Slide 1">
              <div class="carousel-caption d-none d-md-block text-left">
                <h4>Accurate Accounting</h4>
                <p>Trusted bookkeeping and financial reporting.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo e(route('/')); ?>/assets/images/masonry/2.jpg" alt="Slide 2">
              <div class="carousel-caption d-none d-md-block text-left">
                <h4>Actionable Insights</h4>
                <p>Smart dashboards to guide business decisions.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo e(route('/')); ?>/assets/images/masonry/3.jpg" alt="Slide 3">
              <div class="carousel-caption d-none d-md-block text-left">
                <h4>End-to-End Support</h4>
                <p>Tax, payroll, compliance, and advisory.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#ogpCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#ogpCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-2">
        <div>
          <h5 class="mb-1">Ogung Ganda Persada Accounting</h5>
          <small class="text-muted">Professional accounting and advisory for growing businesses</small>
        </div>
        <a href="<?php echo e(route('site.contact')); ?>" class="btn btn-primary btn-pill btn-air-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/home.blade.php ENDPATH**/ ?>