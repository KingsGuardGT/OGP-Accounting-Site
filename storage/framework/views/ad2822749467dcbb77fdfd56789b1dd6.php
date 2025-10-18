
<?php $__env->startSection('title','Contact Us'); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h2>Contact<span> Us</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">Contact</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header"><h5>Send us a message</h5></div>
        <div class="card-body">
          <?php if(session('status')): ?>
            <div class="alert alert-success"><?php echo e(session('status')); ?></div>
          <?php endif; ?>
          <form method="POST" action="<?php echo e(route('contact.submit')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control" required value="<?php echo e(old('name')); ?>">
              <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" required value="<?php echo e(old('email')); ?>">
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" class="form-control" required><?php echo e(old('message')); ?></textarea>
              <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button class="btn btn-primary btn-pill btn-air-primary" type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header"><h5>Contact Details</h5></div>
        <div class="card-body">
          <p class="mb-2"><i class="pe-7s-map"></i> Jakarta, Indonesia</p>
          <p class="mb-2"><i class="pe-7s-call"></i> +62 812-3456-7890</p>
          <p class="mb-0"><i class="pe-7s-mail"></i> support@ogung-ganda-persada.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/site/contact.blade.php ENDPATH**/ ?>