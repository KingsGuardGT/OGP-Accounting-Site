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
               <li><a href="{{route('default')}}">default</a></li>
               <li><a href="{{route('crypto')}}">crypto</a></li>
               <li><a href="{{route('ecommerce')}}">ecommerce</a></li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="font-primary" data-feather="airplay"></i> Widgets</a>
            <ul>
               <li><a href="{{route('general-widget')}}">general-widget</a></li>
               <li><a href="{{route('chart-widget')}}">chart-widget</a></li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="font-primary" data-feather="layout"></i> Layouts</a>
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
                     <li><a href="{{route('hide-on-scroll')}}">hide-on-scroll</a></li>
                     <li><a class="current" href="{{route('vertical')}}">vertical</a></li>
                     <li><a href="{{route('mega-menu')}}">mega-menu</a></li>
                     <li><a href="{{route('fix-header')}}">fix-header</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="font-primary" data-feather="edit"></i> Builder</a>
            <ul>
               <li><a href="{{route('form-builder-1')}}">form-builder-1</a></li>
               <li><a href="{{route('button-builder')}}">button-builder</a></li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="font-primary" data-feather="folder"></i> Components</a>
            <ul>
               <li>
                  <a class="sidebar-header" href="#"><span> Base</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('state-color')}}">state-color</a></li>
                     <li><a href="{{route('typography')}}">typography</a></li>
                     <li><a href="{{route('helper-classes')}}">helper-classes</a></li>
                     <li><a href="{{route('grid')}}">grid</a></li>
                     <li><a href="{{route('tag-pills')}}">tag-pills</a></li>
                     <li><a href="{{route('progress-bar')}}">progress-bar</a></li>
                     <li><a href="{{route('modal')}}">modal</a></li>
                     <li><a href="{{route('alert')}}">alert</a></li>
                     <li><a href="{{route('popover')}}">popover</a></li>
                     <li><a href="{{route('tooltip')}}">tooltip</a></li>
                     <li><a href="{{route('loader')}}">loader</a></li>
                     <li><a href="{{route('dropdown')}}">dropdown</a></li>
                     <li>
                        <a href="crm.html">Tabs</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('tab-bootstrap')}}">tab-bootstrap</a></li>
                           <li><a href="{{route('tab-material')}}">tab-material</a></li>
                        </ul>
                     </li>
                     <li><a href="{{route('accordion')}}">accordion</a></li>
                     <li><a href="{{route('navs')}}">navs</a></li>
                     <li><a href="{{route('list')}}">list</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span> Advance</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('scrollable')}}">scrollable</a></li>
                     <li><a href="{{route('tree')}}">tree</a></li>
                     <li><a href="{{route('bootstrap-notify')}}">bootstrap-notify</a></li>
                     <li><a href="{{route('rating')}}">rating</a></li>
                     <li><a href="{{route('dropzone')}}">dropzone</a></li>
                     <li><a href="{{route('tour')}}">tour</a></li>
                     <li><a href="{{route('sweet-alert2')}}">sweet-alert2</a></li>
                     <li><a href="{{route('modal-animated')}}">modal-animated</a></li>
                     <li><a href="{{route('owl-carousel')}}">owl-carousel</a></li>
                     <li><a href="{{route('ribbons')}}">ribbons</a></li>
                     <li><a href="{{route('pagination')}}">pagination</a></li>
                     <li><a href="{{route('steps')}}">steps</a></li>
                     <li><a href="{{route('breadcrumb')}}">breadcrumb</a></li>
                     <li><a href="{{route('range-slider')}}">range-slider</a></li>
                     <li><a href="{{route('image-cropper')}}">image-cropper</a></li>
                     <li><a href="{{route('sticky')}}">sticky</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Animation</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('animate')}}">animate</a></li>
                     <li><a href="{{route('scroll-reval')}}">scroll-reval</a></li>
                     <li><a href="{{route('aos')}}">aos</a></li>
                     <li><a href="{{route('tilt')}}">tilt</a></li>
                     <li><a href="{{route('wow')}}">wow</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Icons</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('font-awesome')}}">font-awesome</a></li>
                     <li><a href="{{route('ico-icon')}}">ico-icon</a></li>
                     <li><a href="{{route('themify-icon')}}">themify-icon</a></li>
                     <li><a href="{{route('whether-icon')}}">whether-icon</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Buttons</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('buttons')}}">buttons</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Forms</span></a>
                  <ul class="sidebar-submenu">
                     <li>
                        <a>Form Controls</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('form-validation')}}">form-validation</a></li>
                           <li><a href="{{route('base-input')}}">base-input</a></li>
                           <li><a href="{{route('radio-checkbox-control')}}">radio-checkbox-control</a></li>
                           <li><a href="{{route('input-group')}}">input-group</a></li>
                           <li><a href="{{route('megaoptions')}}">megaoptions</a></li>
                        </ul>
                     </li>
                     <li>
                        <a>Form Widgets</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('datepicker')}}">datepicker</a></li>
                           <li><a href="{{route('time-picker')}}">time-picker</a></li>
                           <li><a href="{{route('datetimepicker')}}">datetimepicker</a></li>
                           <li><a href="{{route('daterangepicker')}}">daterangepicker</a></li>
                           <li><a href="{{route('touchspin')}}">touchspin</a></li>
                           <li><a href="{{route('select2')}}">select2</a></li>
                           <li><a href="{{route('switch')}}">switch</a></li>
                           <li><a href="{{route('typeahead')}}">typeahead</a></li>
                           <li><a href="{{route('clipboard')}}">clipboard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a>Form Layout</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('default-form')}}">default-form</a></li>
                           <li><a href="{{route('form-wizard')}}">form-wizard</a></li>
                           <li><a href="{{route('form-wizard-two')}}">form-wizard-two</a></li>
                           <li><a href="{{route('form-wizard-three')}}">form-wizard-three</a></li>
                           <li><a href="{{route('form-wizard-four')}}">form-wizard-four</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Tables</span></a>
                  <ul class="sidebar-submenu">
                     <li>
                        <a href="#">Bootstrap Tables</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('bootstrap-basic-table')}}">bootstrap-basic-table</a></li>
                           <li><a href="{{route('bootstrap-sizing-table')}}">bootstrap-sizing-table</a></li>
                           <li><a href="{{route('bootstrap-border-table')}}">bootstrap-border-table</a></li>
                           <li><a href="{{route('bootstrap-styling-table')}}">bootstrap-styling-table</a></li>
                           <li><a href="{{route('table-components')}}">table-components</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#">Data Tables</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('datatable-basic-init')}}">datatable-basic-init</a></li>
                           <li><a href="{{route('datatable-advance')}}">datatable-advance</a></li>
                           <li><a href="{{route('datatable-styling')}}">datatable-styling</a></li>
                           <li><a href="{{route('datatable-ajax')}}">datatable-ajax</a></li>
                           <li><a href="{{route('datatable-server-side')}}">datatable-server-side</a></li>
                           <li><a href="{{route('datatable-plugin')}}">datatable-plugin</a></li>
                           <li><a href="{{route('datatable-api')}}">datatable-api</a></li>
                           <li><a href="{{route('datatable-data-source')}}">datatable-data-source</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#">Extension Data Tables</a>
                        <ul class="sidebar-submenu">
                           <li><a href="{{route('datatable-ext-autofill')}}">datatable-ext-autofill</a></li>
                           <li><a href="{{route('datatable-ext-basic-button')}}">datatable-ext-basic-button</a></li>
                           <li><a href="{{route('datatable-ext-col-reorder')}}">datatable-ext-col-reorder</a></li>
                           <li><a href="{{route('datatable-ext-fixed-header')}}">datatable-ext-fixed-header</a></li>
                           <li><a href="{{route('datatable-ext-html-5-data-export')}}">datatable-ext-html-5-data-export</a></li>
                           <li><a href="{{route('datatable-ext-key-table')}}">datatable-ext-key-table</a></li>
                           <li><a href="{{route('datatable-ext-responsive')}}">datatable-ext-responsive</a></li>
                           <li><a href="{{route('datatable-ext-row-reorder')}}">datatable-ext-row-reorder</a></li>
                           <li><a href="{{route('datatable-ext-scroller')}}">datatable-ext-scroller</a></li>
                        </ul>
                     </li>
                     <li><a href="{{route('jsgrid-table')}}">jsgrid-table</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Cards</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('basic-card')}}">basic-card</a></li>
                     <li><a href="{{route('theme-card')}}">theme-card</a></li>
                     <li><a href="{{route('tabbed-card')}}">tabbed-card</a></li>
                     <li><a href="{{route('dragable-card')}}">dragable-card</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Charts</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('chart-google')}}">chart-google</a></li>
                     <li><a href="{{route('chart-sparkline')}}">chart-sparkline</a></li>
                     <li><a href="{{route('chart-flot')}}">chart-flot</a></li>
                     <li><a href="{{route('chart-radial')}}">chart-radial</a></li>
                     <li><a href="{{route('chart-morris')}}">chart-morris</a></li>
                     <li><a href="{{route('chartjs')}}">chartjs</a></li>
                     <li><a href="{{route('chartist')}}">chartist</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Maps</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('map-js')}}">map-js</a></li>
                     <li><a href="{{route('vector-map')}}">vector-map</a></li>
                  </ul>
               </li>
               <li>
                  <a class="sidebar-header" href="#"><span>Editors</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('summernote')}}">summernote</a></li>
                     <li><a href="{{route('ckeditor')}}">ckeditor</a></li>
                     <li><a href="{{route('simple-mde')}}">simple-mde</a></li>
                     <li><a href="{{route('ace-code-editor')}}">ace-code-editor</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li>
            <a href="#"><i class="font-primary" data-feather="briefcase"></i> Apps</a>
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
            <a href="#"><i class="font-primary" data-feather="file-plus"></i> Pages</a>
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
                                    <div><a href="#"><i class="icon-notepad"></i>  Forms</a></div>
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