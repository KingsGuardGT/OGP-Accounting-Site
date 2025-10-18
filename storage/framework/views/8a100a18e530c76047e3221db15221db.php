<?php $__env->startSection('title', 'Coming Soon BG Video'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0">
   <div class="comingsoon auth-bg-video">
      <video class="bgvideo-comingsoon" id="bgvid" poster="<?php echo e(route('/')); ?>/assets/images/other-images/coming-soon-bg.jpg" playsinline="" autoplay="" muted="" loop="">
         <source src="<?php echo e(route('/')); ?>/assets/video/auth-bg.mp4" type="video/mp4">
      </video>
      <div class="comingsoon-inner text-center">
         <h5>WE ARE COMING SOON</h5>
         <div class="countdown" id="clockdiv">
            <ul>
               <li><span class="time digits" id="days"></span><span class="title">days</span></li>
               <li><span class="time digits" id="hours"></span><span class="title">Hours</span></li>
               <li><span class="time digits" id="minutes"></span><span class="title">Minutes</span></li>
               <li><span class="time digits" id="seconds"></span><span class="title">Seconds</span></li>
            </ul>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(route('/')); ?>/assets/js/countdown.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/pages/comingsoon-bg-video.blade.php ENDPATH**/ ?>