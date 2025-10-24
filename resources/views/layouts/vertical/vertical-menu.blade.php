<div class="vertical-menu-main">
   <nav id="main-nav">
      <!-- Sample menu definition-->
      <ul class="sm pixelstrap" id="main-menu">
         <li>
            <div class="text-right mobile-back">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
         </li>
         <li>
            <a href="#"><i class="font-primary" data-feather="home"></i> Dashboard</a>
            <ul>
               <li><a href="{{route('default')}}">Dashboard Home</a></li>
               <li><a href="{{route('crypto')}}">Crypto</a></li>
               <li><a href="{{route('ecommerce')}}">E-commerce</a></li>
            </ul>
         </li>

         <!-- Site pages: human-friendly labels -->
         <li>
            <a href="#"><i class="font-primary" data-feather="globe"></i> Site</a>
            <ul>
               <li><a href="{{ route('home') }}">Home</a></li>
               <li><a href="{{ route('site.about') }}">About Us</a></li>
               <li><a href="{{ route('site.news') }}">News</a></li>
               <li><a href="{{ route('site.find-us') }}">Find Us</a></li>
               <li><a href="{{ route('site.contact') }}">Contact Us</a></li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="font-primary" data-feather="airplay"></i> Widgets</a>
            <ul>
               <li><a href="{{route('general-widget')}}">General Widgets</a></li>
               <li><a href="{{route('chart-widget')}}">Chart Widgets</a></li>
            </ul>
         </li>
         <li>
            <a href="{{ route('site.clients') }}"><i class="font-primary" data-feather="users"></i> Clients</a>
            <ul>
               <li>
                  <a href="#">Color Version</a>
                  <ul>
                     <li><a href="{{route('default')}}">default</a></li>
                  </ul>
               </li>
               <li class="active">
                  <a href="#">Menu Options</a>
                  <ul>
                     <li><a href="{{route('hide-on-scroll')}}">Hide on Scroll</a></li>
                     <li><a class="current" href="{{route('vertical')}}">Vertical</a></li>
                     <li><a href="{{route('mega-menu')}}">Mega Menu</a></li>
                     <li><a href="{{route('fix-header')}}">Fixed Header</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('site.contact') }}"><i class="font-primary" data-feather="mail"></i> Contact Us</a>
            <ul>
               <li><a href="{{route('form-builder-1')}}">Form Builder</a></li>
               <li><a href="{{route('button-builder')}}">Button Builder</a></li>
            </ul>
         </li>
         <li>
            <a href="{{ route('site.history') }}"><i class="font-primary" data-feather="clock"></i> History</a>
            <ul>
               <li>
                  <a class="sidebar-header" href="#"><span> Base</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('state-color')}}">State Color</a></li>
                     <li><a href="{{route('typography')}}">Typography</a></li>
                     <li><a href="{{route('helper-classes')}}">Helper Classes</a></li>
                     <li><a href="{{route('grid')}}">Grid</a></li>
                     <li><a href="{{route('tag-pills')}}">Tag Pills</a></li>
                     <li><a href="{{route('progress-bar')}}">Progress Bar</a></li>
                     <li><a href="{{route('modal')}}">Modal</a></li>
                     <li><a href="{{route('alert')}}">Alert</a></li>
                     <li><a href="{{route('popover')}}">Popover</a></li>
                     <li><a href="{{route('tooltip')}}">Tooltip</a></li>
                     <li><a href="{{route('loader')}}">Loader</a></li>
                     <li><a href="{{route('dropdown')}}">Dropdown</a></li>
                     <li>
                        <a href="crm.html">Tabs</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('tab-bootstrap')}}">tab-bootstrap</a></li>
                           <li><a href="{{route('tab-material')}}">tab-material</a></li>
                        </ul>
                     </li>
                     <li><a href="{{route('accordion')}}">Accordion</a></li>
                     <li><a href="{{route('navs')}}">Navigation</a></li>
                     <li><a href="{{route('list')}}">List</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span> Advance</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('scrollable')}}">Scrollable</a></li>
                     <li><a href="{{route('tree')}}">Tree</a></li>
                     <li><a href="{{route('bootstrap-notify')}}">Bootstrap Notify</a></li>
                     <li><a href="{{route('rating')}}">Rating</a></li>
                     <li><a href="{{route('dropzone')}}">Dropzone</a></li>
                     <li><a href="{{route('tour')}}">Tour</a></li>
                     <li><a href="{{route('sweet-alert2')}}">SweetAlert2</a></li>
                     <li><a href="{{route('modal-animated')}}">Modal Animated</a></li>
                     <li><a href="{{route('owl-carousel')}}">Owl Carousel</a></li>
                     <li><a href="{{route('ribbons')}}">Ribbons</a></li>
                     <li><a href="{{route('pagination')}}">Pagination</a></li>
                     <li><a href="{{route('steps')}}">Steps</a></li>
                     <li><a href="{{route('breadcrumb')}}">Breadcrumb</a></li>
                     <li><a href="{{route('range-slider')}}">Range Slider</a></li>
                     <li><a href="{{route('image-cropper')}}">Image Cropper</a></li>
                     <li><a href="{{route('sticky')}}">Sticky</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Animation</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('animate')}}">Animate</a></li>
                     <li><a href="{{route('scroll-reval')}}">Scroll Reveal</a></li>
                     <li><a href="{{route('aos')}}">AOS</a></li>
                     <li><a href="{{route('tilt')}}">Tilt</a></li>
                     <li><a href="{{route('wow')}}">WOW</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Icons</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('font-awesome')}}">Font Awesome</a></li>
                     <li><a href="{{route('ico-icon')}}">ICO Icon</a></li>
                     <li><a href="{{route('themify-icon')}}">Themify Icon</a></li>
                     <li><a href="{{route('whether-icon')}}">Weather Icon</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Buttons</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('buttons')}}">Buttons</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="{{ route('site.contact') }}"><span>Contact Us</span></a>
                  <ul class="sidebar-submenu">
                     <li>
                        <a>Form Controls</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('form-validation')}}">Form Validation</a></li>
                           <li><a href="{{route('base-input')}}">Base Input</a></li>
                           <li><a href="{{route('radio-checkbox-control')}}">Radio &amp; Checkbox</a></li>
                           <li><a href="{{route('input-group')}}">Input Group</a></li>
                           <li><a href="{{route('megaoptions')}}">Mega Options</a></li>
                        </ul>
                     </li>
                     <li>
                        <a>Form Widgets</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('datepicker')}}">Date Picker</a></li>
                           <li><a href="{{route('time-picker')}}">Time Picker</a></li>
                           <li><a href="{{route('datetimepicker')}}">Date &amp; Time Picker</a></li>
                           <li><a href="{{route('daterangepicker')}}">Date Range Picker</a></li>
                           <li><a href="{{route('touchspin')}}">Touchspin</a></li>
                           <li><a href="{{route('select2')}}">Select2</a></li>
                           <li><a href="{{route('switch')}}">Switch</a></li>
                           <li><a href="{{route('typeahead')}}">Typeahead</a></li>
                           <li><a href="{{route('clipboard')}}">Clipboard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a>Form Layout</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('default-form')}}">Default Form</a></li>
                           <li><a href="{{route('form-wizard')}}">Form Wizard</a></li>
                           <li><a href="{{route('form-wizard-two')}}">Form Wizard (2)</a></li>
                           <li><a href="{{route('form-wizard-three')}}">Form Wizard (3)</a></li>
                           <li><a href="{{route('form-wizard-four')}}">Form Wizard (4)</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="{{ route('site.find-us') }}"><span>Find Us</span></a>
                  <ul class="sidebar-submenu">
                     <li>
                        <a href="#">Bootstrap Tables</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('bootstrap-basic-table')}}">Bootstrap Basic</a></li>
                           <li><a href="{{route('bootstrap-sizing-table')}}">Bootstrap Sizing</a></li>
                           <li><a href="{{route('bootstrap-border-table')}}">Bootstrap Border</a></li>
                           <li><a href="{{route('bootstrap-styling-table')}}">Bootstrap Styling</a></li>
                           <li><a href="{{route('table-components')}}">Table Components</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#">Data Tables</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('datatable-basic-init')}}">DataTable Basic</a></li>
                           <li><a href="{{route('datatable-advance')}}">DataTable Advanced</a></li>
                           <li><a href="{{route('datatable-styling')}}">DataTable Styling</a></li>
                           <li><a href="{{route('datatable-ajax')}}">DataTable (AJAX)</a></li>
                           <li><a href="{{route('datatable-server-side')}}">DataTable (Server)</a></li>
                           <li><a href="{{route('datatable-plugin')}}">DataTable Plugins</a></li>
                           <li><a href="{{route('datatable-api')}}">DataTable API</a></li>
                           <li><a href="{{route('datatable-data-source')}}">DataTable Data Source</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#">Extension Data Tables</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('datatable-ext-autofill')}}">AutoFill</a></li>
                           <li><a href="{{route('datatable-ext-basic-button')}}">Buttons</a></li>
                           <li><a href="{{route('datatable-ext-col-reorder')}}">ColReorder</a></li>
                           <li><a href="{{route('datatable-ext-fixed-header')}}">Fixed Header</a></li>
                           <li><a href="{{route('datatable-ext-html-5-data-export')}}">HTML5 Export</a></li>
                           <li><a href="{{route('datatable-ext-key-table')}}">Key Table</a></li>
                           <li><a href="{{route('datatable-ext-responsive')}}">Responsive</a></li>
                           <li><a href="{{route('datatable-ext-row-reorder')}}">Row Reorder</a></li>
                           <li><a href="{{route('datatable-ext-scroller')}}">Scroller</a></li>
                        </ul>
                     </li>
                     <li><a href="{{route('jsgrid-table')}}">JS Grid</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Cards</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('basic-card')}}">Basic Card</a></li>
                     <li><a href="{{route('theme-card')}}">Theme Card</a></li>
                     <li><a href="{{route('tabbed-card')}}">Tabbed Card</a></li>
                     <li><a href="{{route('dragable-card')}}">Draggable Card</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Charts</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('chart-google')}}">Google Charts</a></li>
                     <li><a href="{{route('chart-sparkline')}}">Sparkline</a></li>
                     <li><a href="{{route('chart-flot')}}">Flot</a></li>
                     <li><a href="{{route('chart-radial')}}">Radial</a></li>
                     <li><a href="{{route('chart-morris')}}">Morris</a></li>
                     <li><a href="{{route('chartjs')}}">Chart.js</a></li>
                     <li><a href="{{route('chartist')}}">Chartist</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Maps</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('map-js')}}">Map JS</a></li>
                     <li><a href="{{route('vector-map')}}">Vector Map</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Editors</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('summernote')}}">Summernote</a></li>
                     <li><a href="{{route('ckeditor')}}">CKEditor</a></li>
                     <li><a href="{{route('simple-mde')}}">SimpleMDE</a></li>
                     <li><a href="{{route('ace-code-editor')}}">ACE Editor</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('site.find-us') }}"><i class="font-primary" data-feather="map-pin"></i> Find Us</a>
            <ul>
               <li>
                  <a class="sidebar-header" href="#"><span>Users</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('user-profile')}}">user-profile</a></li>
                     <li><a href="{{route('edit-profile')}}">edit-profile</a></li>
                     <li><a href="{{route('user-cards')}}">user-cards</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Calender</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('calendar')}}">calendar</a></li>
                     <li><a href="{{route('calendar-event')}}">calendar-event</a></li>
                     <li><a href="{{route('calendar-advanced')}}">calendar-advanced</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Gallery</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('gallery')}}">gallery</a></li>
                     <li><a href="{{route('gallery-with-description')}}">gallery-with-description</a></li>
                     <li><a href="{{route('gallery-masonry')}}">gallery-masonry</a></li>
                     <li><a href="{{route('masonry-gallery-with-disc')}}">masonry-gallery-with-disc</a></li>
                     <li><a href="{{route('gallery-hover')}}">gallery-hover</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Email</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('email-application')}}">email-application</a></li>
                     <li><a href="{{route('email-compose')}}">email-compose</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span> Blog</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('blog')}}">blog</a></li>
                     <li><a href="{{route('blog-single')}}">blog-single</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>chat</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('chat')}}">chat</a></li>
                     <li><a href="{{route('chat-video')}}">chat-video</a></li>
                  </ul>
               </li>
               <li><a class="sidebar-header" href="{{route('support-ticket')}}"><span>support-ticket</span></a></li>
               <li><a class="sidebar-header" href="{{route('to-do')}}"><span>to-do</span></a></li>
               <li>
                  <a class="sidebar-header" href="#"><span>Ecommerce</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('product')}}">product</a></li>
                     <li><a href="{{route('product-page')}}">product-page</a></li>
                     <li><a href="{{route('list-products')}}">list-products</a></li>
                     <li><a href="{{route('payment-details')}}">payment-details</a></li>
                     <li><a href="{{route('invoice-template')}}">invoice-template</a></li>
                  </ul>
               </li>
               <li><a class="sidebar-header" href="{{route('pricing')}}"><span>pricing</span></a></li>
            </ul>
         </li>
         <li>
            <a href="{{ route('site.news') }}"><i class="fa fa-newspaper-o"></i> News</a>
            <ul>
               <li><a class="sidebar-header" href="{{route('sample-page')}}"><span>sample-page</span></a></li>
               <li>
                  <a class="sidebar-header" href="#"><span>Search Pages</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('search')}}">search</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span> Error Page</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('error-400')}}">error-400</a></li>
                     <li><a href="{{route('error-404')}}">error-404</a></li>
                     <li><a href="{{route('error-500')}}">error-500</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span> Authentication</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('login')}}">login</a></li>
                     <li><a href="{{route('signup')}}">signup</a></li>
                     <li><a href="{{route('forget-password')}}">forget-password</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Coming Soon</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('comingsoon')}}">comingsoon</a></li>
                     <li><a href="{{route('comingsoon-bg-video')}}">comingsoon-bg-video</a></li>
                     <li><a href="{{route('comingsoon-bg-img')}}">comingsoon-bg-img</a></li>
                  </ul>
               </li>
               <li><a class="sidebar-header" href="{{route('maintenance')}}"><span>maintenance</span></a></li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="font-primary" data-feather="command"></i>Mega menu</a>
            <ul class="mega-menu">
               <li>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-xl-3 list-unstyled">
                           <div>
                              <p class="title">Builder [BS4+] <span class="badge badge-success ml-2">New</span></p>
                           </div>
                           <div><a href="javascript:;"> Page Builder </a></div>
                           <div><a href="javascript:;"> Form Builder</a></div>
                           <div><a href="javascript:;"> Button Builder </a></div>
                           <div class="mt-3">
                              <p class="title">Accordion</p>
                           </div>
                           <div>
                              <div class="default-according style-1" id="accordionoc">
                                 <div class="card">
                                    <div>
                                       <h5 class="mb-0">
                                          <button class="btn btn-link p-2" data-toggle="collapse" data-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">Accordion 1</button>
                                       </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon" data-parent="#accordionoc">
                                       <div class="card-body p-2">Anim pariatur cliche reprehenderit.</div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div>
                                       <h5 class="mb-0">
                                          <button class="btn btn-link text-muted collapsed p-1" data-toggle="collapse" data-target="#collapseicon1" aria-expanded="false" aria-controls="collapseicon1">Accordion 2</button>
                                       </h5>
                                    </div>
                                    <div class="collapse" id="collapseicon1" data-parent="#accordionoc">
                                       <div class="card-body p-2">Anim pariatur cliche reprehenderit.</div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div>
                                       <h5 class="mb-0">
                                          <button class="btn btn-link text-muted collapsed p-1" data-toggle="collapse" data-target="#collapseicon2" aria-expanded="false" aria-controls="collapseicon2">Accordion 3</button>
                                       </h5>
                                    </div>
                                    <div class="collapse" id="collapseicon2" data-parent="#accordionoc">
                                       <div class="card-body p-2">Anim pariatur cliche reprehenderit.</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-2 list-unstyled xs-mt">
                           <div>
                              <p class="title">Drill Down</p>
                           </div>
                           <div class="drilldown">
                              <div class="drilldown-container">
                                 <div class="drilldown-root">
                                    <div><a class="font-primary mt-0" href="#">First Level Menu</a></div>
                                    <div>
                                       <a class="pl-0" href="#"><i class="icon-support"></i>  Base <span class="float-right">→</span></a>
                                       <div class="drilldown-sub">
                                          <div class="drilldown-back"><a class="font-primary f-w-100" href="#"><span>←</span> Second Level Menu</a></div>
                                          <div><a href="#"><i class="fa fa-angle-right"></i>  State color</a></div>
                                          <div>
                                             <a href="#"><i class="fa fa-angle-right"></i>  Tabs <span class="float-right">→</span></a>
                                             <div class="drilldown-sub">
                                                <div class="drilldown-back"><a class="font-primary f-w-100" href="#"><span>←</span> Third Level Menu</a></div>
                                                <div><a href="#"><i class="fa fa-angle-right"></i>  Bootstrap Tabs</a></div>
                                                <div><a href="#"><i class="fa fa-angle-right"></i>  Line Tabs</a></div>
                                             </div>
                                          </div>
                                          <div><a href="#"><i class="fa fa-angle-right"></i>  Typography</a></div>
                                          <div><a href="#"><i class="fa fa-angle-right"></i>  Progress</a></div>
                                          <div><a href="#"><i class="fa fa-angle-right"></i>  Model</a></div>
                                          <div><a href="#"><i class="fa fa-angle-right"></i>  Alert</a></div>
                                          <div><a href="#"><i class="fa fa-angle-right"></i>  Popover</a></div>
                                       </div>
                                    </div>
                                    <div><a href="#"><i class="icon-dropbox"></i>  Advanced</a></div>
                                    <div><a href="#"><i class="fa fa-spin fa-spinner"></i>  Animation</a></div>
                                    <div><a href="#"><i class="icon-package"></i>  Icons</a></div>
                                    <div><a href="#"><i class="icon-cloud-down"></i>  Buttons</a></div>
                                    <div><a href="#"><i class="fa fa-map-marker"></i>  Find Us</a></div>
                                    <div><a class="mb-0" href="#"><i class="icon-harddrives"></i>  Tables</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 galleria-list clearfix lg-mt">
                           <div>
                              <p class="title">Galleria</p>
                           </div>
                           <div>
                              <div class="galleria row">
                                 <div class="col-6">
                                    <a href="javascript:void(0)"><img src="{{route('/')}}/assets/images/slider/1.jpg" alt=""></a>
                                    <h4 class="username text-ellipsis">Airi Satou<small>Algerian</small></h4>
                                 </div>
                                 <div class="col-6">
                                    <a href="javascript:void(0)"><img src="{{route('/')}}/assets/images/slider/2.jpg" alt=""></a>
                                    <h4 class="username text-ellipsis">Fiona Green<small>Korean</small></h4>
                                 </div>
                                 <div class="col-6 mb-0">
                                    <a href="javascript:void(0)"><img src="{{route('/')}}/assets/images/slider/3.jpg" alt=""></a>
                                    <h4 class="username text-ellipsis mb-0">Gavin Joyce<small>Indian</small></h4>
                                 </div>
                                 <div class="col-6 mb-0">
                                    <a href="javascript:void(0)"><img src="{{route('/')}}/assets/images/slider/4.jpg" alt=""></a>
                                    <h4 class="username text-ellipsis mb-0">Howard Hatfield<small>Japanese</small></h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 list-unstyled custom-nav-img lg-mt">
                           <div>
                              <p class="title">Contact Form</p>
                           </div>
                           <div>
                              <form class="theme-form">
                                 <div class="form-group">
                                    <label class="col-form-label pt-0"><i class="icon-user pr-2"></i>                                                        Your Name</label>
                                    <input class="form-control" type="text" placeholder="Enter your name">
                                 </div>
                                 <div class="form-group">
                                    <label class="col-form-label"><i class="icon-email pr-2"></i>Your Email</label>
                                    <input class="form-control" type="email" placeholder="Enter your emailid">
                                 </div>
                                 <div class="form-group">
                                    <label class="col-form-label"><i class="icon-comment pr-2"></i>Your Message</label>
                                    <textarea class="form-control" placeholder="Enter your message" rows="2"></textarea>
                                 </div>
                                 <div class="form-group mb-0">
                                    <button class="btn btn-primary">Send</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </li>
      </ul>
   </nav>
</div>