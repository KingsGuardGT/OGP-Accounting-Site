
<?php $__env->startSection('title','News'); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h2>Company<span> News</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">News</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">Search News</h5>
        </div>
        <div class="card-body">
          <form id="newsForm" class="row g-3">
            <div class="col-md-8">
              <input type="text" class="form-control" id="newsQuery" placeholder="Search topics (e.g., accounting, finance, tax)">
            </div>
            <div class="col-md-4">
              <button class="btn btn-air-primary w-100" type="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row" id="newsResults"></div>
  <div class="row mt-3">
    <div class="col-12 d-flex justify-content-between align-items-center">
      <button id="prevPage" class="btn btn-air-light" disabled>Previous</button>
      <span id="pageInfo" class="text-muted">Page 1</span>
      <button id="nextPage" class="btn btn-air-light" disabled>Next</button>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
  (function(){
    const form = document.getElementById('newsForm');
    const queryInput = document.getElementById('newsQuery');
    const results = document.getElementById('newsResults');
    const API_KEY = (window.NEWS_API_KEY || 'YOUR_NEWS_API_KEY');
    const prevBtn = document.getElementById('prevPage');
    const nextBtn = document.getElementById('nextPage');
    const pageInfo = document.getElementById('pageInfo');
    let currentPage = 1;
    let currentQuery = '';

    async function search(q, page=1){
      if(!q) return;
      results.innerHTML = '<div class="col-12"><div class="card"><div class="card-body">Loading...</div></div></div>';
      try{
        const url = `https://newsapi.org/v2/everything?q=${encodeURIComponent(q)}&language=en&sortBy=publishedAt&pageSize=9&page=${page}&apiKey=${API_KEY}`;
        const res = await fetch(url);
        const data = await res.json();
        if(data.status !== 'ok') throw new Error('Failed');
        const items = (data.articles || []).slice(0,9);
        if(items.length === 0){
          results.innerHTML = '<div class="col-12"><div class="card"><div class="card-body">No results</div></div></div>';
          pageInfo.textContent = `Page ${page}`;
          prevBtn.disabled = page <= 1;
          nextBtn.disabled = true;
          return;
        }
        results.innerHTML = items.map(a => `
          <div class="col-md-6 col-xl-4">
            <div class="card h-100">
              ${a.urlToImage ? `<img class="card-img-top" src="${a.urlToImage}" alt="">` : ''}
              <div class="card-body">
                <h6 class="card-title">${a.title ?? ''}</h6>
                <p class="card-text">${a.description ?? ''}</p>
                <a href="${a.url}" target="_blank" class="btn btn-air-secondary">Read more</a>
              </div>
            </div>
          </div>
        `).join('');
        pageInfo.textContent = `Page ${page}`;
        prevBtn.disabled = page <= 1;
        nextBtn.disabled = false; // enable; NewsAPI returns totalResults but we keep simple paging
      }catch(e){
        results.innerHTML = '<div class="col-12"><div class="card"><div class="card-body text-danger">Failed to load news</div></div></div>';
        prevBtn.disabled = page <= 1;
        nextBtn.disabled = true;
      }
    }

    form.addEventListener('submit', function(ev){
      ev.preventDefault();
      currentQuery = queryInput.value.trim();
      currentPage = 1;
      search(currentQuery, currentPage);
    });

    prevBtn.addEventListener('click', function(){
      if(currentPage > 1){
        currentPage -= 1;
        search(currentQuery, currentPage);
      }
    });
    nextBtn.addEventListener('click', function(){
      currentPage += 1;
      search(currentQuery, currentPage);
    });
  })();
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OGP 3\resources\views/site/news.blade.php ENDPATH**/ ?>