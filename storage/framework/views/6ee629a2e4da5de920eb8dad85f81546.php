<?php $__env->startSection('title', 'Calendar Advance'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/calendar.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Calendar<span>Advance</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">User</li>
	<li class="breadcrumb-item active">Calendar Advance</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="calendar-wrap">
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header">
                  <h5>Dragging Event</h5>
               </div>
               <div class="card-body">
                  <div class="basic-calendar">
                     <div class="row">
                        <div class="col-md-4 col-xl-3">
                           <div class="external-events text-left" id="external-events">
                              <div class="fc-events-container">
                                 <div class="fc-event" data-color="#7e37d8">All Day Event</div>
                                 <div class="fc-event" data-color="#1ea6ec">Meeting</div>
                                 <div class="fc-event" data-color="#22af47">Long Event</div>
                                 <div class="fc-event" data-color="#007bff">Birthday party</div>
                                 <div class="fc-event" data-color="#ff9f40">Party</div>
                                 <div class="fc-event" data-color="#ff5370">Lunch</div>
                                 <div class="fc-event" data-color="#536dfe">Conference Meeting</div>
                                 <div class="fc-event" data-color="#fb6d9d">Happy Hour</div>
                                 <h6 class="f-12 m-t-20">Drag and drop your event or click in the calendar</h6>
                                 <div class="checkbox checkbox-primary">
                                    <input id="drop-remove" type="checkbox" checked="">
                                    <label for="drop-remove">Remove After Drop</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8 col-xl-9">
                           <div id="fc-external-drag"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(route('/')); ?>/assets/js/jquery.ui.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/calendar/moment.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/calendar/fullcalendar.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/calendar/fullcalendar-custom.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/new_apps/calendar-advanced.blade.php ENDPATH**/ ?>