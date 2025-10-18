
<?php $__env->startSection('title','Find Us'); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h2>Find<span> Us</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">Find Us</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header"><h5>Our Location</h5></div>
        <div class="card-body">
          <div class="row align-items-start">
            <div class="col-md-6 mb-3 mb-md-0">
              <?php 
                $lat = isset($lat) ? $lat : -6.301981; 
                $lng = isset($lng) ? $lng : 106.814568; 
                $zoom = isset($zoom) ? $zoom : 18; 
                $placeId = isset($placeId) ? $placeId : null;
                $directionsUrl = 'https://www.google.com/maps/dir/?api=1' . ($placeId ? ('&destination_place_id=' . $placeId) : ('&destination=' . $lat . ',' . $lng));
              ?>
              <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
              <div id="map" class="rounded w-100" style="height:360px"></div>
              <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
              <script>
                (function(){
                  var lat = <?php echo e($lat); ?>;
                  var lng = <?php echo e($lng); ?>;
                  var zoom = <?php echo e($zoom); ?>;
                  var map = L.map('map').setView([lat, lng], zoom);
                  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; OpenStreetMap contributors'
                  }).addTo(map);
                  L.marker([lat, lng]).addTo(map);
                })();
              </script>
              <a class="btn btn-primary mt-2 mr-2" href="<?php echo e($directionsUrl); ?>" target="_blank" rel="noopener">Get directions</a>
              <button type="button" id="btnUseMyLocation" class="btn btn-outline-primary mt-2">Use my location</button>
              <div id="originFallback" class="mt-3" style="display:none;">
                <div class="form-inline">
                  <label for="txtOrigin" class="mr-2 mb-2">Or enter your starting point:</label>
                  <input id="txtOrigin" type="text" class="form-control mb-2 mr-2" placeholder="e.g. My address or city" style="min-width: 260px;"/>
                  <button id="btnUseOrigin" type="button" class="btn btn-secondary mb-2">Open directions</button>
                </div>
              </div>
              <script>
                (function(){
                  var btn = document.getElementById('btnUseMyLocation');
                  if(!btn) return;
                  btn.addEventListener('click', function(){
                    if(!navigator.geolocation){
                      document.getElementById('originFallback').style.display = 'block';
                      return;
                    }
                    btn.disabled = true;
                    btn.textContent = 'Getting location…';
                    navigator.geolocation.getCurrentPosition(function(pos){
                      var lat = pos.coords.latitude;
                      var lng = pos.coords.longitude;
                      var destUrl = '<?php echo e($directionsUrl); ?>';
                      // If using place_id form, append origin; otherwise keep existing destination
                      if(destUrl.indexOf('destination_place_id=') !== -1){
                        destUrl += '&origin=' + encodeURIComponent(lat + ',' + lng);
                      } else {
                        destUrl += '&origin=' + encodeURIComponent(lat + ',' + lng);
                      }
                      window.open(destUrl, '_blank');
                      btn.disabled = false;
                      btn.textContent = 'Use my location';
                    }, function(err){
                      // Show fallback origin input on error
                      document.getElementById('originFallback').style.display = 'block';
                      btn.disabled = false;
                      btn.textContent = 'Use my location';
                    }, {
                      enableHighAccuracy: true,
                      timeout: 10000,
                      maximumAge: 30000
                    });
                  });
                  var btnUseOrigin = document.getElementById('btnUseOrigin');
                  if(btnUseOrigin){
                    btnUseOrigin.addEventListener('click', function(){
                      var origin = document.getElementById('txtOrigin').value.trim();
                      if(!origin){
                        alert('Please enter a starting point.');
                        return;
                      }
                      var destUrl = '<?php echo e($directionsUrl); ?>' + '&origin=' + encodeURIComponent(origin);
                      window.open(destUrl, '_blank');
                    });
                  }
                })();
              </script>
            </div>
            <div class="col-md-6">
              <div class="media">
                <img class="mr-3 img-100 rounded" src="<?php echo e(route('/')); ?>/assets/images/other-images/coming-soon-1.png" alt="Office">
                <div class="media-body">
                  <h6 class="mt-0">Ogung Ganda Persada Accounting</h6>
                  <p class="mb-1">Jl. Contoh No. 123, Jakarta, Indonesia</p>
                  <p class="mb-1">Phone: +62 812-3456-7890</p>
                  <p class="mb-0">Email: support@ogung-ganda-persada.com</p>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/site/find-us.blade.php ENDPATH**/ ?>