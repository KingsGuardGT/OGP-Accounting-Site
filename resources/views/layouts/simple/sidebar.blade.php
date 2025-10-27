<div class="iconsidebar-menu">
   <div class="sidebar">
      <ul class="iconMenu-bar custom-scrollbar">
         <li>
            <a class="bar-icons" href="{{ route('/') }}">
               <!--img(src='{{route('/')}}/assets/images/menu/home.png' alt='')--><i class="pe-7s-home"></i><span>Home</span>
            </a>
            <!--
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Dashboard</li>
               <li><a href="{{route('default')}}">Default</a></li>
               <li><a href="{{route('crypto')}}">Crypto</a></li>
               <li><a href="{{route('ecommerce')}}">Ecommerce</a></li>
               <li class="iconbar-header sub-header">Widgets</li>
               <li><a href="{{route('general-widget')}}">General widget</a></li>
               <li><a href="{{route('chart-widget')}}">Chart widget</a></li>
            </ul>
            -->
         </li>
         <li>
            <a class="bar-icons" href="{{ route('site.about') }}"><i class="pe-7s-users"></i><span>Company</span></a>
            <!--
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Ogung Ganda Persada</li>
               <li><a href="{{ route('site.about') }}">About Us</a></li>
               <li><a href="{{ route('site.history') }}">History</a></li>
               <li><a href="{{ route('site.clients') }}">Our Clients</a></li>
               <li><a href="{{ route('site.exchange-rates') }}">Exchange Rates</a></li>
               <li>
                  <a class="bar-icons" href="#"><i class="pe-7s-users"></i><span>Company</span></a>
                  <ul class="iconbar-mainmenu custom-scrollbar">
                     <li class="iconbar-header">Ogung Ganda Persada</li>
                     <li><a href="{{ route('home') }}">Home</a></li>
                     <li><a href="{{ route('site.about') }}">About Us</a></li>
                     <li><a href="{{ route('site.history') }}">History</a></li>
                     <li><a href="{{ route('site.exchange-rates') }}">Exchange Rates</a></li>
                     <li><a href="{{ route('site.clients') }}">Our Clients</a></li>
                     <li><a href="{{ route('site.news') }}">News</a></li>
                     <li><a href="{{ route('site.find-us') }}">Find Us</a></li>
                     <li><a href="{{ route('site.contact') }}">Contact Us</a></li>
                  </ul>
               </li>
            </ul>
            -->
         </li>
         <li>
            <a class="bar-icons" href="{{ route('site.exchange-rates') }}"><i class="pe-7s-graph3"></i><span>Exchanges</span></a>
            <!--
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Charts</li>
               <li><a href="{{route('chart-apex')}}">Apex Chart</a></li>
               <li><a href="{{route('chart-google')}}">Google Chart</a></li>
               <li><a href="{{route('chart-sparkline')}}">Sparkline Chart</a></li>
               <li><a href="{{route('chart-flot')}}">Flot Chart</a></li>
               <li><a href="{{route('chart-radial')}}">Radial Chart</a></li>
               <li><a href="{{route('chart-knob')}}">Knob Chart</a></li>
               <li><a href="{{route('chart-morris')}}">Morris Chart</a></li>
               <li><a href="{{route('chartjs')}}">Chatjs Chart</a></li>
               <li><a href="{{route('chartist')}}">Chartist Chart</a></li>
               <li><a href="{{route('chart-peity')}}">Peity Chart</a></li>
            </ul>
            -->
         </li>
         <!--
         <li>
            <a class="bar-icons" href="#"><i class="pe-7s-server"></i><span>Apps</span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">Ecommerce</li>
               <li><a href="{{route('product')}}">Product</a></li>
               <li><a href="{{route('product-page')}}">Product page</a></li>
               <li><a href="{{route('list-products')}}">Product list</a></li>
               <li><a href="{{route('payment-details')}}">Payment Details</a></li>
               <li><a href="{{route('order-history')}}">Order History</a></li>
               <li><a href="{{route('invoice-template')}}">Invoice</a></li>
               <li><a href="{{route('pricing')}}">Pricing</a></li>
               <li class="iconbar-header sub-header"> Blog</li>
               <li><a href="{{route('blog')}}">Blog Details</a></li>
               <li><a href="{{route('blog-single')}}">Blog Single</a></li>
               <li><a href="{{route('add-post')}}">Add Post</a></li>
               <li class="iconbar-header sub-header">Timeline</li>
               <li><a href="{{route('timeline-v-1')}}">Timeline 1</a></li>
               <li><a href="{{route('timeline-v-2')}}">Timeline 2</a></li>
               <li><a href="{{route('timeline-small')}}">Timeline 3</a></li>
               <li class="iconbar-header sub-header"> Gallery</li>
               <li><a href="{{route('gallery')}}">Gallery Grid</a></li>
               <li><a href="{{route('gallery-with-description')}}">Gallery Grid with Desc</a></li>
               <li><a href="{{route('gallery-masonry')}}">Masonry Gallery</a></li>
               <li><a href="{{route('masonry-gallery-with-disc')}}">Masonry Gallery Desc</a></li>
               <li><a href="{{route('gallery-hover')}}">Hover Effects</a></li>
               <li class="iconbar-header sub-header">Job Search</li>
               <li><a href="{{route('job-cards-view')}}">Cards view</a></li>
               <li><a href="{{route('job-list-view')}}">List View</a></li>
               <li><a href="{{route('job-details')}}">Job Details</a></li>
               <li><a href="{{route('job-apply')}}">Apply</a></li>
               <li class="iconbar-header sub-header">Learning</li>
               <li><a href="{{route('learning-list-view')}}">Learning List</a></li>
               <li><a href="{{route('learning-detailed')}}">Detailed Course</a></li>
            </ul>
         </li>
         -->
         <!--
         <li>
            <span class="badge badge-pill badge-primary">New</span><a class="bar-icons" href="#"><i class="pe-7s-gift"></i><span>Apps</span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">User</li>
               <li><a href="{{route('user-profile')}}">Users Profile</a></li>
               <li><a href="{{route('edit-profile')}}">Users Edit</a></li>
               <li><a href="{{route('user-cards')}}">Users Cards</a></li>
               <li><a href="{{route('email-application')}}">Email App</a></li>
               <li><a href="{{route('email-compose')}}">Email Compose</a></li>
               <li><a href="{{route('chat')}}">Chat App</a></li>
               <li><a href="{{route('chat-video')}}">Video chat</a></li>
               <li><a href="{{route('calendar')}}">Full Calender Basic</a></li>
               <li><a href="{{route('calendar-event')}}">Full Calender Events</a></li>
               <li><a href="{{route('calendar-advanced')}}">Full Calender Advance</a></li>
               <li><a href="{{route('social-app')}}">Social App</a></li>
               <li><a href="{{route('to-do')}}">To-Do</a></li>
               <li class="iconbar-header sub-header">Editors</li>
               <li><a href="{{route('summernote')}}">Summer Note</a></li>
               <li><a href="{{route('ckeditor')}}">CK editor</a></li>
               <li><a href="{{route('simple-mde')}}">MDE editor</a></li>
               <li><a href="{{route('ace-code-editor')}}">ACE code editor</a></li>
               <li class="iconbar-header sub-header">Others</li>
               <li><a href="{{route('faq')}}">FAQ</a></li>
               <li><a href="{{route('knowledgebase')}}">Knowledgebase</a></li>
               <li><a href="{{route('internationalization')}}">Internationalization</a></li>
               <li class="iconbar-header sub-header">Maps</li>
               <li><a href="{{route('map-js')}}">Maps JS</a></li>
               <li><a href="{{route('vector-map')}}">Vector Maps</a></li>
            </ul>
         </li>
         -->
         <li>
            <a class="bar-icons" href="{{ route('site.news') }}"><i class="pe-7s-news-paper"></i><span>Pages</span></a>
            <!--
            <ul class="iconbar-mainmenu custom-scrollbar">
               <li class="iconbar-header">All Pages</li>
               <li><a href="{{route('sample-page')}}">Sample page</a></li>
               <li><a href="{{route('support-ticket')}}">Support Ticket</a></li>
               <li><a href="{{route('search')}}">Search Website</a></li>
               <li><a href="{{route('error-400')}}">Error 400</a></li>
               <li><a href="{{route('error-404')}}">Error 404</a></li>
               <li><a href="{{route('error-500')}}">Error 500</a></li>
               <li><a href="{{route('maintenance')}}">Maintenance</a></li>
               <li><a href="{{route('login')}}">Login Simple</a></li>
               <li><a href="{{route('signup')}}">Register Simple</a></li>
               <li><a href="{{route('forget-password')}}">Forget Password</a></li>
               <li><a href="{{route('comingsoon')}}">Coming Simple</a></li>
               <li><a href="{{route('comingsoon-bg-video')}}">Coming with Bg video</a></li>
               <li><a href="{{route('comingsoon-bg-img')}}">Coming with Bg Image</a></li>
            </ul>
            -->
         </li>
      </ul>
   </div>
</div>