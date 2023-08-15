<?php /* Template Name: Our Work */ ?>

<?php   

   get_header();

?>
<main class="main" id="main">
       <section class="page-inner wow fadeInUp">
          <div class="page-heder black-color">
             <div class="container">
                <div class="row">
                   <div class="col-sm-7">
                      <div class="page-header-content">
                         <h1>Our Work</h1>
                         <p>See Our Wide Range of Innovative Web Application and Apps Developed from Creative Ideas</p>
                      </div>
                      <!-- inner header-common btn -->
                      <!-- <div class="page-header-button">
                         <a href="contact" class="talkto-expert">Talk to our experts</a>
                      </div> -->
                      <!-- inner Breadcrumb navigation -->
                      <div class="page-breadcrumb">
                         <a href="index">Home</a>
                      </div>
                   </div>
                   <div class="col-sm-5">
                      <div class="aboutus-icon">
                         <img src="<?php echo home_url(); ?>/wp-assets/images/header-portfolio.svg" alt="Our Work">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="section inner-page-section pb-zero">
          <div class="container">
             <div class="section-title row">
                <div class="col-md-6">
                   <h2 class="title">Our Work</h2>
                </div>
                <div class="col-md-6">
                   <div class="section-filter">
                      <form id="filter-form">
                         <div>
                            <select id="category-filter" cate="Industry" class="video-filter form-control" data-filter-group="category">
                               <option value=".all" selected="selected">By Industry</option>
                               <option value=".all">All</option>
                               <option value=".accounting">Accounting</option>
                               <option value=".agriculture">Agriculture</li>
                               <option value=".automobile">Automobile</li>
                               <option value=".consumer">Consumer</li>
                               <option value=".deals-coupons">Deals-coupons</li>
                               <option value=".ecommerce">Ecommerce</li>
                               <option value=".education">Education</li>
                               <option value=".enterprise">Enterprise</li>
                               <option value=".events">Events</li>
                               <option value=".food-restaurants">Food-Restaurants</li>
                               <option value=".fintech">Fintech</li>
                               <option value=".hrms">HRMS</li>
                               <option value=".healthcare">Healthcare</li>
                               <option value=".job-portal">Job portal</li>
                               <option value=".lifestyle">Lifestyle</li>
                               <option value=".online-booking">Online Booking</li>
                               <option value=".social">Social</li>
                               <option value=".real-estate">Real Estate</li>
                               <option value=".retail">Retail</li>
                               <option value=".security">Security</li>
                               <option value=".social-networking">Social Networking</li>
                               <option value=".start-up">Start-up</li>
                            </select>
                         </div>
                         <div class="ml-2">
                            <select id="technology-filter" cate="Technology" class="video-filter form-control" data-filter-group="category">
                               <option value=".all" selected="selected">By Technology</option>
                               <option value=".all">All</option>
                               <option value=".android">Android</li>
                               <option value=".angular">Angular</li>
                               <option value=".blackberry">Blackberry</li>
                               <option value=".blockchain">Blockchain</li>
                               <option value=".bonefire">Bonefire</li>
                               <option value=".bootstrap">Bootstrap</li>
                               <option value=".crm">CRM</li>
                               <option value=".codeigniter">Codeigniter</li>
                               <option value=".deals-coupons">Deals-coupons</li>
                               <option value=".dot-net">Dot net</li>
                               <option value=".drupal">Drupal</li>
                               <option value=".erp">ERP</li>
                               <option value=".flash">Flash</li>
                               <option value="5">HTML5</li>
                               <option value=".ibeacon-bluetooth">IBeacon-Bluetooth</li>
                               <option value=".internet-of-things">Internet-of-Things</li>
                               <option value=".ios">IOS</li>
                               <option value=".magento">Magento</li>
                               <option value=".mysql">MySQL</li>
                               <option value=".nodejs">Nodejs</li>
                               <option value=".php">PHP</li>
                               <option value=".ror">ROR</li>
                               <option value=".windows">Windows</li>
                               <option value=".wordpress">Wordpress</li>
                               <option value=".xamarin">Xamarin</li>
                               <option value=".xcode">Xcode</li>
                               <option value=".yii">Yii</li>
                            </select>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
             <div class="ourWork-wrap">
                <div class="row js-filter-grid">
                   <div class="col-md-6 js-filter-grid-item all enterprise retail digital-signage angular blockchain dot-net wow fadeInLeft">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/codigo.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Digital Signage Solution</h3>
                            <p>The digital signage solution is developed for easily and effectively communicate marketing messages and enhance business environment.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#digitalSignageModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="digitalSignageModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/digital-signage-portfolio-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Digital Signage Solution</h3>
                                              <p>
                                              <p>The digital signage solution is developed for easily and effectively communicate marketing messages and enhance business environment. The project involves development, enhancements and maintenance in a digital signage product called "Codigo". The functional requirements of the project includes development of a client software called "Codigo Player". The software provides capability to play media files uploaded/chosen by user in "shows" which define a specific layout and schedule of the media files being played.</p>
                                              <p>This application interacts to the server using ASP.NET 2.0 web services through AMF.NET and FlurineFx. The targeted device used is DroidStick which has Android platform, is compact and affordable and uses HTML5. You can use this in Banks, Hospitals, Hotels, Retail stores, Universities and many more public places.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> ASP.NET 2.0, AJAX 1.0, C#, FlurineFx, SQL Server 2005, AMF.NET, MSMQ, FFMPEG, SWFTools.<br><b>Hardware Used</b><b>Domain:</b> Enterprise, Digital Signage</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all enterprise dot-net xamarin mysql wow fadeInRight">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/desertfire.jpg" alt="desertfire">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Workflow Management System - Desertfire</h3>
                            <p>This workflow management system is developed for converting workflow procedure to implementable, digital and printable formats.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#workflowManagementModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="workflowManagementModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/workflow-management-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Workflow Management System - Desertfire</h3>
                                              <p>
                                              <p>This workflow management system is developed for converting workflow procedure to implementable, digital and printable formats. The main participants of the solution are IT administrator, system owners, authors, reviewers, subject matter experts and solution application users. The main solution is developed on Dot Net with the author app built on Windows Surface Pro.</p>
                                              <p>The end user output is developed on either print or Android and iOS application and all other user modules are cloud based. The solution has a SAAS deployment and as well as a complete client side deployment module. The solution is designed to handle more than hundred thousand concurrent users.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> ASP.Net MVC, WPF, Xamarin, Entity Framework, Web API, MS Sql 2012<br><b>Domain:</b> Enterprise</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all enterprise agriculture dot-net angular bootstrap mysql wow fadeInLeft">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bevo.jpg" alt="bevo">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Supply Chain Management System – Bevofarm</h3>
                            <p>Bevo is an ERP production and supply chain management system for managing production, space, finance and resources. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#supplyChainModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="supplyChainModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/supplyChain-management-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/supplyChain-management-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/supplyChain-management-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Supply Chain Management System – Bevofarm</h3>
                                              <p>
                                              <p>Bevo is an ERP production and supply chain management system for managing production, space, finance and resources. It also has a DSS (Decision Support System) which tells them to prioritize work schedule resources for maximum profit. The solution is developed using Dot Net MVC5 with Bootstrap and Entity Framework and has complex algorithm for data reporting and DSS module.</p>
                                              <p>This system allows the users to generate growing-timelines of the plants and their varieties.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology: </b>Asp. Net MVC 5 (Razor View engine), Entity Framework , LINQ, C#, J-Query, CSS, HTML, Ajax, Bootstrap, SQL Server 2012<br><b>Domain:</b> Enterprise, Agrobusiness </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all ios android php bonefire mysql enterprise ios android php mysql wow fadeInRight">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/airdoc.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Cloud-Based File Storage Platform – AirDoc</h3>
                            <p>This cloud based file storage platform is developed using open source technology and backend developed in MySQL.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#cloudbasedFileModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="cloudbasedFileModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/airdoc-portfolio-full-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/airdoc-portfolio-full-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/airdoc-portfolio-full-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Cloud-Based File Storage Platform – AirDoc</h3>
                                              <p>
                                              <p>This cloud based file storage platform is developed using open source technology and backend developed in MySQL. The platform also have mobile applications for iOS and Android users to share and store content. It also have Windows desktop app that can sync with all.</p>
                                              <p>The platform consists of cloud-based services for user identity and management, data storage, access and management, on desktop and web application for data and service management. The system enables users to upload any file to their online cloud storage account.</p>
                                              <p>The system supports synchronization and sharing along with personal storage. It supports revision history, so files deleted from a folder may be recovered from any of the synced computer. The platform supports multiuser version control, enabling several users to edit and re post files without overwriting versions. Files placed in this folder are also accessible via the Airdoc website and mobile apps.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology: </b> iPhone, Android, Desktop, PHP (Bonefire), MySQL<br><b>Industry:</b> Enterprise</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all enterprise education dot-net mysql wow fadeInLeft">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/looking_glass.jpg" alt="Training And Consulting Portal">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Training And Consulting Portal</h3>
                            <p>Looking Glass Dev is a platform to train and consult the IT and management professionals. The portal includes development of various modules for all the users of the system.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#trainingConModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="trainingConModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/training-consultingPortal-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/training-consultingPortal-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/training-consultingPortal-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Training and Consulting Portal</h3>
                                              <p>
                                              <p>Looking Glass Dev is a platform to train and consult the IT and management professionals. The portal includes development of various modules for all the users of the system. The Administrator is responsible for overall application management. Admin can manage system configuration, public web site contents, partner’s section and student section.</p>
                                              <p>Partners are individuals or organizations who are subscribing the original courses and / or can also manage their own courses. Partners are allowed to register their own student into the system. Students are having their own credentials to login to the system and have access to the courses and give exams of particular course.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> ASP.net 4.0- C#, Jquery Sql Server 2008 R2<br><b>Domain:</b> Enterprise, Education</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php codeigniter enterprise social social-networking wow fadeInRight">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/toadsquare.jpg" alt="toadsquare">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Social Platform For Creative Minds</h3>
                            <p>Toadsquare is the hub of the creative industries – a global network linking professional talents across the world from segments such as Film, Video, Music etc.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#socialPlatformModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="socialPlatformModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialPlatform-for-creative-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialPlatform-for-creative-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialPlatform-for-creative-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Social Platform for Creative Minds</h3>
                                              <p>
                                              <p>Toadsquare is the hub of the creative industries – a global network linking professional talents across the world from segments such as Film, Video, Music, Performing Arts, Photography, Writing &amp; Publishing, etc.</p>
                                              <p>Toadsquare provides a place for Creative Industry Professionals to manage their business in the online world. It represents a collective showcase for consumers to come and discover new, emerging art and cherry-pick experienced talent.</p>
                                              <p>The platform helps facilitate the best creative projects from all over the globe, highlighting opportunity for employment, artistic collaboration, social interaction, forum debates, sales, events and online exposure.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> PHP, Codeigniter <br> <b>Industry:</b>  Enterprise, Social Networking </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php magento ecommerce consumer">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/ry.jpg" alt="Australia’s Largest Online Beauty Retailer – RY">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Australia’s Largest Online Beauty Retailer – RY</h3>
                            <p>RY (Recreate Yourself) is the largest hair-care and professional skincare retailer in Australia. RY is an online store for selling hair and beauty products. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#australiaslgModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="australiaslgModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/australiasLargest-online-beauty-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/australiasLargest-online-beauty-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/australiasLargest-online-beauty-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Australia’s Largest Online Beauty Retailer – RY</h3>
                                              <p>
                                              <p>RY (Recreate Yourself) is the largest hair-care and professional skincare retailer in Australia. RY is an online store for selling hair and beauty products. RY ensures every single product is 100% authentic. Whether you are seeking for hair straighteners, salon grade shampoos or conditioners from respected brands like Calvin Klein, Revlon, KMS, Leimo, LOreal Professional, Paul Mitchell, etc. Just log in and add the items in your shopping cart. The user will get the biggest range of products in a discounted price.</p>
                                              <p>Features: Shopping Cart with different Categories, Import 70,000 Customer in to the database, Currently have 12,000 products and constantly adding more, Different size of images for each product, Different types of Categories, Products are added, updated and deleted via admin, and more.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> PHP, Magento <br><b>Industry:</b> Ecommerce, Consumer </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>

                   <div class="col-md-6 js-filter-grid-item all retail smart-photo-frame dot-net">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/photospring.jpg" alt="photospring">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Connected Digital Photo Frame App – Photospring</h3>
                            <p>Photospring is an innovative start-up solution designed for smart photo frame device. You capture the photos / videos from your phone and this system lets you display both on a HD Quality screen.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#connectedDigitalModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="connectedDigitalModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/connected-digitalPhoto-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Connected Digital Photo Frame App – Photospring</h3>
                                              <p>
                                              <p>Photospring is an innovative start-up solution designed for smart photo frame device. You capture the photos / videos from your phone and this system lets you display both on a HD Quality screen. The data (photos/videos/audios) can be send from different platforms like iOS, Android, MAC Desktop, Window Desktop and Web.</p>
                                              <p>The communication happens with call API with native software functionality. To establish the connection with server/clients, we have used specific frame code which is the identity of the frame. Once connection is established between them, client can send photos/videos through the API call. So with Photospring you can see memories as they are created.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> .Net Framework 4.5, Window Form Application, XML file.<br><b>Domain:</b> Retail, Smart Photo-Frame</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>



                   <div class="col-md-6 js-filter-grid-item all php html5 consumer">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/infinitemonkeys-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Mobile App Builder - Infinite Monkey</h3>
                            <p>Infinite Monkey is an online tool to create your own app for free. Users can login with their Google, Facebook, Yahoo or twitter Accounts in the site and can create & publish their apps online. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#mobileBuilderModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="mobileBuilderModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/mobileApp-builder-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/mobileApp-builder-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/mobileApp-builder-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Mobile App Builder - Infinite Monkey</h3>
                                              <p>
                                              <p>Infinite Monkey is an online tool to create your own app for free. Users can login with their Google, Facebook, Yahoo or twitter Accounts in the site and can create &amp; publish their apps online. There are 3 Main steps which users need to follow to build an app. To create an app, users have to fill the information such as;</p>
                                              <p> 1) Fill the app related information and their details including Contact info, App Title, Choose Privacy Settings, Colors, Splash Screen, Background Image, App Demographics, etc.</p>
                                              <p>2) Create App by choosing required modules from the available modules &amp; there Clones like News &amp; Third Party Feeds, Social Feeds, Useful Links, Custom Content, Music &amp; Books, Food &amp; Beverage, Events, Sports, Reference Material, Location Services, User Interactions, Shopping, etc.</p>
                                              <p>3) You can also include few more details like App Icon, Stores, Description, Welcome Message, Additional info, Tags, Ad Options, HTML5 Domain for app, etc.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> CorePHP, HTML5 <br><b>Industry:</b> consumer</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php mysql magento ecommerce consumer">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/klickmall-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Online Mall In Bahrain – Klickmall</h3>
                            <p>Klickmall is a one-stop shop also called as online mall for individual business, where individuals can find all what they need at one place.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#onlineMallModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="onlineMallModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/OnlineMall-in-bahrain-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/OnlineMall-in-bahrain-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/OnlineMall-in-bahrain-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Online Mall in Bahrain – Klickmall</h3>
                                              <p>
                                              <p>Klickmall is a one-stop shop also called as online mall for individual business, where individuals can find all what they need at one place. It provides the businesses with an online space to display their products or services in any field or sector in Bahrain. All businesses are welcomed to showcase their products/services to more than 900,000 online users in Bahrain.</p>
                                              <p>Klickmall is also the perfect tool to promote and advertise any business; leading to enhance the marketing activities with less amount of resources. This online mall enable customers to search, find and locate any business they need. Plus, they could shop from any listed business with payment done either online or on delivery.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> PHP, MySQL, Magento <br><b>Industry:</b> Ecommerce, Consumer, </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                  
                   <div class="col-md-6 js-filter-grid-item all ecommerce consumer healthcare dot-net mysql">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/vitality-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Kitchen Appliances Sellers – Vitality4Life</h3>
                            <p>Vitality 4 Life is a true pioneer in the health and wellness industry. They sell high-quality, healthy living products available at an affordable price to people around the world.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#kitchenAppliancesModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="kitchenAppliancesModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/kitchenAppliances-sellers-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/kitchenAppliances-sellers-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/kitchenAppliances-sellers-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Kitchen Appliances Sellers – Vitality4Life</h3>
                                              <p>Vitality 4 Life is a true pioneer in the health and wellness industry. They sell high-quality, healthy living products available at an affordable price to people around the world. They are dedicated to sourcing the very latest in health technology. They design and sell health and fitness products from around the world.</p>
                                              <div class="sub-title"><b>Industry:</b> Ecommerce, Consumer, Healthcare </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all ecommerce consumer lifestyle php wordpress">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/heart-of-tea-potfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Heart Of Tea</h3>
                            <p>Heart of Tea comes from a tea family with over four generations of experience. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#heartOfTeaModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="heartOfTeaModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/heart-of-tea-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/heart-of-tea-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/heart-of-tea-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Heart of Tea</h3>
                                              <p>Heart of Tea comes from a tea family with over four generations of experience. It brewed from fresh-picked tea leaves, sourced from the most exotic regions on earth, giving you the delicious taste of real, authentic iced tea.</p>
                                              <div class="sub-title"><b>Technology:</b> PHP, Wordpress<br><b>Industry:</b> Consumer, Lifestyle</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php magento mysql ios angular consumer deals-coupons">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/cheerwrap-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Instant E-Gifting Platform – Cheerwrap</h3>
                            <p>CheerWrap is an exciting instant e-gifting platform that allows you to send e-gift cards from awesome brands, whenever you want, wherever you are, in just seconds.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#instantGiftingModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="instantGiftingModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Instant-eGifting-platform-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Instant-eGifting-platform-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Instant-eGifting-platform-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Instant E-Gifting Platform – Cheerwrap</h3>
                                              <p>
                                              <p>CheerWrap is an exciting instant e-gifting platform that allows you to send e-gift cards from awesome brands, whenever you want, wherever you are, in just seconds. It combines the convenience of online shopping and the love of gift giving.</p>
                                              <p>The platform includes the various functionality such as;</p>
                                              <ul class="og-list">
                                                 <li>Wallet functionality</li>
                                                 <li>Gift redeem management</li>
                                                 <li>Gift card module integration</li>
                                                 <li>Can create social profile on Cheerwrap and connect with other social networking sites</li>
                                                 <li>Multi payment gateway Integration</li>
                                                 <li>Multi store functionality</li>
                                                 <li>Theme integration</li>
                                                 <li>Reward points functionality</li>
                                              </ul>
                                              <div class="sub-title"><b>Technology: </b>PHP(Magento), MySQL, Jquery, iOS<br><b>Industry:</b>consumer, Deals-coupons</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all ror angular mysql html5 enterprise education">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/oncampus-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>On Campus</h3>
                            <p>This is an application for college students to participate in competitions by having some tasks and courses assigned by their school teacher or course heads.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#onCampusModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="onCampusModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/oncampus-portfolio-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>On Campus</h3>
                                              <p>This is an application for college students to participate in competitions by having some tasks and courses assigned by their school teacher or course heads. This application is having an avatar generator for students where they can generate their avatar by using up different wardrobe tools available on the application. There is a point system for each student. They will have badges, points and ranking amongst the other students or users. Teachers can create new course, tasks and categories and can access students list and also assign tasks. Students on the other hand can report for the task and can have a friendship networks with the other users as well. While clicking on avatar icon displayed on header; you can have an avatar creator screen to redesign your avatar.</p>
                                              <div class="sub-title"><b>Technology: </b>ROR (Rails 3), MySQL 5.X, Javascript , jQuery, Ajax, JSON, HTML5<br><b>Industry:</b>Enterprise, Education</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php mysql drupal education consumer">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/briobirth-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>E-Learning Platform For Childbirth – Briobirth</h3>
                            <p>Briobirth is an E-Learning platform for childbirth that is design for providing training of childbirth education.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#elearningPlatformModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="elearningPlatformModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/briobirth-portfolio-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/briobirth-portfolio-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/briobirth-portfolio-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>E-Learning Platform for Childbirth – Briobirth</h3>
                                              <p>Briobirth is an E-Learning platform for childbirth that is design for providing training of childbirth education. The platform provides opportunity to experienced childbirth professionals to join, share their experience and trained  expectant mothers and their families. The platform also have forum for people and trainers to share their experience, problems and solutions.</p>
                                              <div class="sub-title"><b>Technology: </b>PHP 5.3, MySQL 5.1, Drupal 6.2<br> <b>Industry:</b>Education, Consumer</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all wordpress php consumer food-restaurants">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/tffyn-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Healthy Food By Home Chefs – Tffyn</h3>
                            <p>Tffyn is a platform to help home chefs to showcase and sell their food by using the app.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#healthyFoodModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="healthyFoodModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/tffyn-portfolio-full-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/tffyn-portfolio-full-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/tffyn-portfolio-full-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Healthy Food by Home Chefs – Tffyn</h3>
                                              <p>
                                              <p>Tffyn is a platform to help home chefs to showcase and sell their food by using the app. Its a great platform for those who love healthy and homemade food that too with at a fraction of cost they pay at a restaurant.</p>
                                              <p>Food lovers can look for food available in their area, or make a request for a special dish/meal that home chefs will prepare specially for them. On the other hand, home chefs can post what they offer and get order from users in their area.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> Wordpress 4.2, PhP <br><b>Industry:</b> Consumer, Food-Restaurants</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php codeigniter angular mysql enterprise education">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/education-potfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Cloud-Based Education Platform</h3>
                            <p>Mitzvah Tools is an all-in-one, cloud-based education platform that fosters student, parent and educator workflow and collaboration on all devices</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#cloudBasedModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="cloudBasedModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/cloud-based-education-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Cloud-Based Education Platform</h3>
                                              <p>
                                              <p>Mitzvah Tools is an all-in-one, cloud-based education platform that fosters student, parent and educator workflow and collaboration on all devices, while providing synagogue staff with real-time insights into learning, progress and participation.</p>
                                              <p>Some awesome features of this cloud based educational platform are - schedule tasks and assignments, full calendar scheduling, sync with personal calendar, collaborative task management, etc.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> PHP(Codeigniter), MySQL, Jquery<br><b>Industry:</b>Enterprise, Education</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php mysql fintech insurance enterprise">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/global-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Global Insurance Management System</h3>
                            <p>This platform is useful for retailers, manufacturers and distributors designed to address the unique preferences and needs of the individual client.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#globalInsuranceModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="globalInsuranceModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/global-portfolio-thumb.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/global-insurance-full-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/global-insurance-full-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Global Insurance Management System</h3>
                                              <p>
                                              <p>This platform is useful for retailers, manufacturers and distributors designed to address the unique preferences and needs of the individual client.</p>
                                              <p>The platform  offers comprehensive administrative and  marketing services for Warranty Programs including including extended warranty, claims management, program design, business intelligence, training and development, direct marketing, etc. They also provide insurance consulting services such as management consulting, market research, warranty audits and mystery shopping.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology: </b>PHP, MySQL<br> <b>Industry:</b> Insurance, Enterprise</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                 
                   <div class="col-md-6 js-filter-grid-item all php mysql magento online-booking consumer">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/golden-tulip-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Golden Tulip</h3>
                            <p>It is an online Ticket booking system, where user can book tickets or events (products) which are uploaded on the website.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#goldenTulipModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="goldenTulipModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/golden-tulip-portfolio-full-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/golden-tulip-portfolio-full-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/golden-tulip-portfolio-full-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Golden Tulip</h3>
                                              <p>It is an online Ticket booking system, where user can book tickets or events (products) which are uploaded on the website. All payments done, go through I-deal, internet banking.&nbsp; When you pay for clicks, you can select your own bank and then follow the instructions of the bank.&nbsp; When the payment is completed,  user will receive an order confirmation by email.</p>
                                              <div class="sub-title"><b>Technology: </b> PHP, MySQL, Magento framework, jquery, javascript (prototype js)<br> <b>Industry:</b>Online booking, Consumers</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php mysql codeigniter ecommerce consumer">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Online-Publication-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Online Publication System</h3>
                            <p>OPS is an e-commerce site of a Book Publishing and Marketing service provider company for authors around the globe that will sell books in their Book Store and help authors to publish their books.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#onlinePublicationModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="onlinePublicationModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Online-Publication-portfolio-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Online-Publication-portfolio-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Online-Publication-portfolio-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Online Publication System</h3>
                                              <p>OPS is an e-commerce site of a Book Publishing and Marketing service provider company for authors around the globe that will sell books in their Book Store and help authors to publish their books. The website is also available in Arabic language with required parts of it in English Language. This website also has an Affiliate Program wherein user is allowed to choose banners and links for placement on their website or Weblogs. It consists of three main sections i.e. Author section, Publisher/Owner Section and User Section.</p>
                                              <div class="sub-title"><b>Technology:</b> PHP5, MySQL, Codeigniter 5 Framework JavaScript/jQuery, E-Commerce <br><b>Industry:</b> Consumer, E-commerce</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all ror consumer">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bonaverde-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Coffee Brewing System – Bonaverde</h3>
                            <p>Bonaverde is a crowdfunded company known for developing a roast-grind-brew Coffee-maker. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#coffeeBrewingModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="coffeeBrewingModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bonaverde-portfolio-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bonaverde-portfolio-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bonaverde-portfolio-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Coffee Brewing System – Bonaverde</h3>
                                              <p>Bonaverde is a crowdfunded company known for developing a roast-grind-brew Coffee-maker. The company was established with a concept of "Direct Trade marketplace for green coffee beans" that is connecting farmers and consumers for the first time and eliminate long chain of middlemen. Here all type of users (farmers, consumers and distributors) can create their account and connect with each other easily to buy and sell coffee beans.</p>
                                              <div class="sub-title"><b>Technology:</b> Ruby on Rails<br><b>Industry:</b> Consumer, </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all dot-net payment-gateway-signalr angular bootstrap enterprise automobile">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/quality-inspection-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Quality Inspection System For Automobile</h3>
                            <p>This quality inspection system is based on IoT (Internet of Things) eco-system.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#qualityInspectionModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="qualityInspectionModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/quality-inspection-portfolio-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/quality-inspection-portfolio-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/quality-inspection-portfolio-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Quality Inspection System for Automobile</h3>
                                              <p>This quality inspection system is based on IoT (Internet of Things) eco-system. The application helps validate and verify various outputs resulting from different scientific calculations and processes required for maintaining, developing, and enhancing newer methods, methodologies, and materials for automobile industry.</p>
                                              <div class="sub-title"><b>Technology:</b> MVC,C# .NET, WPF, Jquery, SignalR, Web Service, HTML, Bootstrap<br><b>Domain:</b> Enterprise, Automobile, </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all flash dot-net enterprise real-estate">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/kiosk-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>KIOSK</h3>
                            <p>KIOSK is Desktop based application basically made for Property Developer. This Application allows Clients/Visitors to visit any floor and find the availability status of any unit.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#kioskDModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="kioskDModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/kiosk-portfolio-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/kiosk-portfolio-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/kiosk-portfolio-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>KIOSK</h3>
                                              <p>KIOSK is Desktop based application basically made for Property Developer. This Application allows Clients/Visitors to visit any floor and find the availability status of any unit. When users visit any unit he can get all the information about unit like its area, floor plans price, status etc. This touch screen kiosk also helped them in exhibition to show exterior and interior views of property. This is network based Kiosk, in this concept if any salesman changes the status of any unit, and other sales man visit the same property he will get updated status, means Kiosk also allow sales men to do booking without interacting others.</p>
                                              <div class="sub-title"><b>Technology:</b> Flash, .NET<br><b>Domain:</b> Enterprise, Real Estate </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all hrms enterprise dot-net mysql">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/hrms-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>HRMS System</h3>
                            <p>This HRMS system provides a tool for planning and managing employee related activities including recruitment, personal administration, career development and assignments.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#hrmsSystemModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="hrmsSystemModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/hrms-portfolio-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/hrms-portfolio-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/hrms-portfolio-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>HRMS System</h3>
                                              <p>
                                              <p>This HRMS system provides a tool for planning and managing employee related activities including recruitment, personal administration, career development and assignments. Below are some features and objective of the HRMS system:-</p>
                                              <p>1) Provide employee integrated HR and payroll service.</p>
                                              <p> 2) Sharing of human resources data and knowledge related to employees.</p>
                                              <p> 3) Provides extension to integrated portal with internal human resources management systems.</p>
                                              <p> 4) Provide employee professional development information.</p>
                                              <p> 5) Provide employee chat room/self help desk including leave management, salary &amp; related information Reduce human resources overheads/cost to serve by establishing electronic communications channels, reducing paper documents.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> VB6.0, MySQL<br><b>Domain:</b> HRMS, Enterprise </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all education enterprise mysql dot-net">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/cource-roads-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>School Management System - Cource Roads</h3>
                            <p>This online school management system will manage your school as you want, starting from admissions to attendance and exams to result cards.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#schoolManagementModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="schoolManagementModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/schoolManagementSystem-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>School Management System - Cource Roads</h3>
                                              <p>
                                              <p>This online school management system will manage your school as you want, starting from admissions to attendance and exams to result cards.</p>
                                              <p>The system provides facility to the teachers to provide assignments, notes, projects, and other important informations online to the student and students can check that information, assignments, notes, and study material on line.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> ASP.NET 1.1, C#, SQL SERVER 2005<br><b>Domain:</b>School Management System, Enterprise, LMS, Education </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all dot-net enterprise education mysql">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/phgl-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Online Examination System - PHGL</h3>
                            <p>Its an online examination system where student can access assignments in either practice mode or in live mode.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#onlineExaminationModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="onlineExaminationModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/online-examination-system-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Online Examination System - PHGL</h3>
                                              <p>Its an online examination system where student can access assignments in either practice mode or in live mode.  The assignments are the set of various problems and student can submit their solutions to assigned problems in the ledger.</p>
                                              <div class="sub-title"><b>Technology:</b> ASP.net 4.0, mvc, VB.net, Jquery, LinQ, Flex Sql Server 2008<br><b>Domain:</b> Enterprise, Education</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all dot-net html5 mysql education enterprise">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bshifter-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Online Course Program - Bshifter</h3>
                            <p>This application is a state of the art training and certification system that teaches Company and Command Officers how to standardize local incident operations across their organization.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#onlineCourseModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="onlineCourseModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bshifter-portfolio-full-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Online Course Program - Bshifter</h3>
                                              <p>
                                              <p>This application is a state of the art training and certification system that teaches Company and Command Officers how to standardize local incident operations across their organization.</p>
                                              <p>Designed to first instruct, train and then evaluate and certify Fire Department Officer’s who serve in the role of Incident Commander that supervises and manage emergency and hazard zone operations.</p>
                                              <p>Blue Card Online Program is a course that teaches the cognitive portion of the Blue Card program. The online program is based on the Fire Command curriculum package. Students will also have continued E-Access to the Fire Command text book series: Fire Command, Command Safety and a downloadable PDF version of the Fire Command Workbook.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> ASP.Net 4.0, Entity Framework Database - SQL Server 2008 R2 Jquery Mobile Components CSS3 &amp; HTML5<br><b>Domain:</b> Education, Enterprise</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all dot-net enterprise crm erp mysql">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/connectuspro-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Plumbing Services Online – 1800 Plumber</h3>
                            <p>1800 Plumber is an online plumbing service platform having partnership with local services company owners in the United States and Canada serving residential and commercial customers.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#plumbingServicesModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="plumbingServicesModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/plumbing-services-online-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Plumbing Services Online – 1800 Plumber</h3>
                                              <p>
                                              <p>1800 Plumber is an online plumbing service platform having partnership with local services company owners in the United States and Canada serving residential and commercial customers.</p>
                                              <p>The portal is based on ERP and CRM based platforms, which is working as service provider to the electrical, Plumbing and HAVC industry. This system provide feature like 24/7 live call reception, dispatch, technology, performance tracing, manage accounting, training, manage employee, manage master data, reporting feature, alert and notification, live messaging, etc.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> Enterprise, CRM, ERP<br><b>Domain:</b> ASP.net 4.0.,    Database-SQL Server 2008 R2, DHTMLX Components, MVC 3</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                 
                   <div class="col-md-6 js-filter-grid-item all enterprise finance dot-net mysql">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/stock-market-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Stock Market Analytic Application</h3>
                            <p>This is a Stock market real-time application (broker console) which takes the live market feed from stock exchange through TCP socket.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#stockMarketModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="stockMarketModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/stock-market-portfolio-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Stock Market Analytic Application</h3>
                                              <p>This is a Stock market real-time application (broker console) which takes the live market feed from stock exchange through TCP socket. Complete system comprises of different components/ engines. Major components/ engines involved are Real-time Feed Receiver engine, Feed Parser engine, Distributor component, WPF client tool; Web based data entry, administration and controlling site. It was the solution of 16 composite windows that captures the stock data.</p>
                                              <div class="sub-title"><b>Technology:</b> C#, WPF, ASP.NET, WCF,.NET Framework 4.0, Visual Studio 2010, MS-SQL Server 2008, Team Foundation Server 2010<br><b>Domain:</b> Enterprise, Finance</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all retail dot-net flash mysql">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/swisstek-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Swisstek Watches</h3>
                            <p>This Web Site simulates the watch catalog. Site contains information about the different watches. These entries are regularly updated by the site administrator using the web-admin Section.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#swisstekWatchesModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="swisstekWatchesModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/swisstek-portfolio-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Swisstek Watches</h3>
                                              <p>This Web Site simulates the watch catalog. Site contains information about the different watches. These entries are regularly updated by the site administrator using the web-admin Section. It also contains a purchase warranty section where a user is directed to pay pal for payment transactions and comes back to the site and the entries are updated thereon after a successful transaction. This has integration of Google Maps API for dealer section .The User section consists of a Registration, Warranty Section and Dealer Locator section where the selected dealers can be located on the Google Maps.</p>
                                              <div class="sub-title"><b>Technology:</b> Asp, Asp.net 1.1, C#.net, Sql server 2000, Flash<br><b>Domain:</b> Retail</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all dot-net enterprise education mysql">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/english-seekho-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>English Seekho</h3>
                            <p>This is an application that allows the users (learners) to take part in learning process. This has rich set of users and rights management functionality.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#englishSeekhoModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="englishSeekhoModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/english-seekho-portfolio-1.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>English Seekho</h3>
                                              <p>This is an application that allows the users (learners) to take part in learning process. This has rich set of users and rights management functionality. It contains users types like Admin, Content Managers, Content Executives, Franchisee , teachers and learners. This has different learning templates called Activities in .net and flash. It also takes care of the learner’s assessment at the end of the course or lesson.</p>
                                              <div class="sub-title"><b>Technology:</b> Asp.net 3.5, C#, SQL Server 2008<br><b>Domain:</b> LMS, Enterprise, Education</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all food-restaurants ios android php consumer">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/App-for-Home-Chefs-Dining-Inn.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Dining Inn – A Home Made Food Community</h3>
                            <p>Dining Inn is a community based marketplace that connects like-minded people over home cooked food. Its the Airbnb of Home Dining.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#DiningModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="DiningModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/airbnb-of-home-dining.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Dining-inn-app.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/home-dining-app-dining-inn.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Dining Inn – A Home Made Food Community</h3>
                                              <p>
                                              <p>Dining Inn is a community based marketplace that connects like-minded people over home cooked food. Its the Airbnb of Home Dining. We have developed an iOS and android app with backened
                                                 managed with Yii 2 PHP framework. Two main sections of the app are become a Host and become a Guest. The app makes food sharing simple, easy, enjoyable, safe and at the same time
                                                 you can earn as well. There are 3 types of dining events in this app:
                                              </p>
                                              <p><b>Social dining</b> – As a Host, you get to decide what kind of guests would you like to invite over (age, interests, event specific) and what you are cooking. You can select the event
                                                 date and time as well. The guests can likewise search of various social dining events that are of interest and make a booking through the Dining Inn App.
                                              </p>
                                              <p><b>Everyday dining</b> – It is about every day dining for a particular time period.</p>
                                              <p><b>Take away</b> – With this feature, a host can enter event details like description, event start date and end date, start time, end time, recurring days, notice before guest arrive
                                                 and menu details. The guest can search and simply take away the food for comfortable eating at home or on a picnic.
                                              </p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> PHP, iPhone, Android, <br><b>Industry: <b>Food-Restaurants, Consumer</b></b>
                                              </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all accounting fintech enterprise ios android php yii">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/gst-invoice-app.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>GST Invoice App </h3>
                            <p>This GST invoice app is developed to help users generate GST compliant invoices and bill of supply. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#GSTInvoiceModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="GSTInvoiceModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/gst-billing-software.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/gst-invoice-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/gst-invoice-iOS.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>GST Invoice App</h3>
                                              <p>
                                              <p>This GST invoice app is developed to help users generate GST compliant invoices and bill of supply. The GST invoice app is launched to help those who want to have hustle free invoice
                                                 generation from anywhere and anytime in a few easy steps.
                                              </p>
                                              <p><b>Some features of GST Invoice App</b></p>
                                              <ul class="og-list">
                                                 <li>Generate GST based invoice</li>
                                                 <li>Create and Receive invoices in PDF format</li>
                                                 <li>Share invoice number on Whatsapp, EMail and SMS directly from the app</li>
                                                 <li>Insert Company logo in your GST Invoices</li>
                                                 <li>Options to add products with Tax Inclusive price by checking the option</li>
                                                 <li>Register Customer separately using the ‘Register Customer’ option on Dashboard</li>
                                              </ul>
                                              <div class="sub-title"><b>Technology:</b> PHP, iPhone, Android, Yii<br><b>Industry: <b>Billing App, Enterprise</b></b>
                                              </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all gps security ios android">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/sos-alert-app.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>SOS Alert App </h3>
                            <p>The SOS alert app we have developed is for one of our Australian client. The main feature of this application is to connect people who need emergency help to the people who can provide such help. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#SOSAlertModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="SOSAlertModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/SOS-Alert-App-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/sos-alert-application.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/sos-alert-application-2.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>SOS Alert App</h3>
                                              <p>
                                              <p>The SOS alert app we have developed is for one of our Australian client. The main feature of this application is to connect people who need emergency help to the people who can provide
                                                 such help. The app will also let you send the alert message to your friends, family and the people who can help you at that point of time so that you can get the help as soon as possible.
                                              </p>
                                              <p>We first concentrated on the GUI while developing the app. As the SOS alert app is used in an emergency condition, so we were focussing on to make it as simple as possible so that the
                                                 user can use this app in emergency condition.
                                              </p>
                                              <p>The functionalities and feature of this app are also very to-the-point and simplistic. We have used advanced javascript such as AngularJS and ReactJS to make it very sleek. The app also
                                                 have push notifications.
                                              </p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b>iPhone, Android<br><b>Industry: <b>GPS, Security</b></b>
                                              </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all food-restaurants start-up xamarin ios android">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/SaladJar-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Salad jar - A Salad Ordering App </h3>
                            <p>The salad ordering app will let you order healthy and delicious Salad on few clicks. No need to go to the market.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#SaladJarModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="SaladJarModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/saladjar_portflio_1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/saladjar_portflio_2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/saladjar_portflio_3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Salad jar - A Salad Ordering App</h3>
                                              <p>
                                              <p>The salad ordering app will let you order healthy and delicious Salad on few clicks. No need to go to the market. The Salad Jar is a unique salad delivery app based on food concept that
                                                 specialises in gourmet salads prepared and eaten directly out of a jar.
                                              </p>
                                              <p>we have developed a CMS and mobile apps of this project (Android and iOS). The CMS have features such as filtering and searching, add and configure prices, generate XLS report, Manage
                                                 delivery time slots, Send dynamic messages, Configure loyalty cards, Generate and publish promo codes, etc.
                                              </p>
                                              <p>For mobile app, we have developed three apps, first one is for Driver, second one is for User and third one is for Kitchen. In drivers app, we have implemented location tracking in optimised
                                                 manner for geofencing and map to the CMS, order summery and options to confirm order, order delivery options and details, etc. Users can simply choose their salad from the menu &amp;
                                                 place order. In kitchens app, we have developed an app that automatically allocates each order to one of four time slots by giving details such as salad type, salad size, client name
                                                 order id, cook name, etc.
                                              </p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> Xamarin, iPhone , Android, <br><b>Industry:<b>Food-Restaurants, Start-up</b></b>
                                              </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all consumer security ios internet-of-things">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Sensa-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Sensa-Internet of Things App </h3>
                            <p>The idea of this help is to help the deaf and hearing impaired with their day-to-day activities. This is done by alarming/alerting them for events that normally require you hearing abilities, for example thinks
                               like the doorbell,
                            </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#SensaInternetModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="SensaInternetModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/sensa1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/sensa2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/sensa3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Sensa-Internet of Things App</h3>
                                              <p>
                                              <p>The idea of this help is to help the deaf and hearing impaired with their day-to-day activities. This is done by alarming/alerting them for events that normally require you hearing abilities, for example thinks like the doorbell, baby monitor, telephone, fire alarm, etc. The way this works is that the app will receive alert notifications from a signaling gateway (RFGateway) to be presented to the application user.</p>
                                              <p>The RF gateway receive signals from wireless doorbells, smoke-detectors,etc. and signal to the app. The App will alert the user visually, it vibrates according to a unique pattern, plays a sound and flashes on the mobile screen. We have also implemented remote notification feature in this app to notify a user, if he/she is not at home or in the wi-fi range.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b>iOS, Xcode 7.3, Objective C, Internet-of-Things <br><b>Industry:<b>Consumer, Security</b></b></div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all enterprise online-booking android">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/taxiaihurbi-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Taxi Booking App - Taxi Al Harbi</h3>
                            <p>This taxi booking application allow you to find a taxi using your smartphone or tablet.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#TaxiBookingModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="TaxiBookingModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/taxi-ai-hurbi.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/taxi-ai-hurbi1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/taxi-ai-hurbi2.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Taxi Booking App - Taxi Al Harbi</h3>
                                              <p>
                                              <p>This taxi booking application allow you to find a taxi using your smartphone or tablet. The Client/Passenger uses the app to find a taxi in their current location with the help of Google Map (GPS) API inside the app, and once they find results he/she can select a taxi from the map and order it to come at their location.</p>
                                              <p>Once the customer book a taxi, the GPS Location will be taken directly and automatically send to admin, and to the selected driver as a new request. The driver receives the request, and they can accept/reject the Order. If driver does not accept the request, admin will get a notification of deny and can assign the request to other driver. Once the driver accepts the request, the customer will be notified and find the taxi coming to them in the map by showing a path drawn (Real time tracking).</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> Android<br><b>Industry:<b> Enterprise, Online Booking</b></b></div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all retail lifestyle ios android ibeacon-bluetooth">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/nightowl-mo-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>IBeacon App For Retail Business - Night Owl</h3>
                            <p>NightOwl is an Australian retail shop that covered 65 shops under itself and provide amazing offers straight to your phone by using the beacon technology. Customer can find their nearest store and available offers.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#IBeaconAppModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="IBeaconAppModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/night_owl_full.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/night_owl_full1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/night_owl_full2.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>iBeacon app for Retail Business - Night Owl</h3>
                                              <p>
                                              <p>NightOwl is an Australian retail shop that covered 65 shops under itself and provide amazing offers straight to your phone by using the beacon technology. Customer can find their nearest store and available offers. This mobile application also provide the event information running on various store locations. It has royalty card feature which will allow user to get discount on various purchases they make.</p>
                                              <p>The application is connected to a legacy Delphi platform and has a bridge application done in Dot Net that communicates between the application and the core system. So the application refers to operations intended to reduce the amount of time customers have to wait to receive service. In this beacon application, you can view entire list of stores, products, offers, deals, loyalty programs etc.</p>
                                              <p>So you can use this app to save your time roaming in the super market and looking for your brand or items. Just download the application, explore the products, get a number of offers, select your pick up, delivery location and make payment online using your e-wallet which is a pre-paid wallet.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> iphone, Android, Core bluetooth, Bluecat beacon<br><b>Industry:</b> Retail, Lifestyle</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all ios social-networking">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/mycultureconnect-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Social Networking App - My Culture Connect </h3>
                            <p>This social networking application is for the students who came from different countries to study. The students can search their friends in university based on culture, region and semester.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#SocialNetworkingModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="SocialNetworkingModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/my-culture-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/my-culture-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/my-culture-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Social Networking App - My Culture Connect</h3>
                                              <p>
                                              <p>This social networking application is for the students who came from different countries to study. The students can search their friends in university based on culture, region and semester. The app tackles many of the issues overseas students encounter when they go to other countries for study.</p>
                                              <p>The app allows these students to identify and establish a trusted social network with individuals from a similar culture or background. The students can create their profile on this app and can check other users profile as well. Students can also get the information about internal and external events of university. The admin user can post the advertising, and other necessary information and students get notify about new updates and events over their.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> iPhone <br><b> Industry:</b> Social Networking</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all healthcare fintech insurance enterprise ios android">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/ahi-porfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Healthcare App - AHI Assist</h3>
                            <p>he AHI Assist App is an exciting new e-tool from Accident & Health International, that gives you access when you’re a long way from home and need assistance or information in Australia or overseas.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#HealthcareAppModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="HealthcareAppModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/helthcare-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/helthcare-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/helthcare-app-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Healthcare App - AHI Assist</h3>
                                              <p>
                                              <p>The AHI Assist App is an exciting new e-tool from Accident &amp; Health International, that gives you access when you’re a long way from home and need assistance or information in Australia or overseas.</p>
                                              <p>So, we help them by developing solutions including features such as history of country, climate, terrain, population, spoken language, nation holidays, international disputes, language translation, find a health provider, AHI TeleHealth, exchange rates, find an embassy, mapping along with information of countries anyone intend to visit, including travel alert warnings provided dynamically from the Australian government.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> iPhone, Android<br><b>Industry:</b> Insurance, enterprise</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all events enterprise ios android dot-net mysql">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/rfid-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Event Management App – RFID Connect</h3>
                            <p>The RFID Connect smartphone app is RFID (radio frequency identification devices) Journal’s social-networking and event management app.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#EventManagementModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="EventManagementModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/eventManagement-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/eventManagement-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/eventManagement-app-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Event Management App – RFID Connect</h3>
                                              <p>
                                              <p>The RFID Connect smartphone app is RFID (radio frequency identification devices) Journal’s social-networking and event management app. End users, solutions providers, academics, consultants and other business professionals can use this app to network. Individuals can create blogs and companies can post press releases.</p>
                                              <p>We developed this app in a way that it work as an interactive tool synced with the RFID Connect web site, enabling you get more out of RFID Journal events. You can search for products, exhibitors and sessions you wish to attend and add these to your event planner. You can also introduce yourself to other attendees and request meetings. Any sessions, meetings or to-dos added to your event planner online will be synced with the smartphone app, and any of these items added on the phone will be reflected on the web site as well.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> ASP.net 3.5, SQL Server 2008. Telerik Components, iPhone, Android<br> <b>Industry:</b> Events, Enterprise</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all social-networking enterprise ios android">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/jaja-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Social Media Management App - Jaja Connect</h3>
                            <p>The more ways we have to connect, the harder it becomes for us to connect with each other in the right way.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#SocialmdaModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="SocialmdaModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialMedia-management-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialMedia-management-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialMedia-management-app-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Social Media Management App - Jaja Connect</h3>
                                              <p>
                                              <p>The more ways we have to connect, the harder it becomes for us to connect with each other in the right way. Jaja lets you share the details and social networks you want, in under 10 seconds and only 3 clicks. Now you can form a valuable connection straight away and get down to business.</p>
                                              <p>There are so many platforms someone can connect with us such as Email, Facebook, phone, Twitter, WhatsApp, LinkedIn, Skype, Snapchat and the list goes on. So Jaja connects will help you manage all these platforms in one smart place. You can share all your personal, professional, and social details from one place. The app always sync your data to remain you always up to date and in any case you never lose any of your data.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> iphone, Android<br> <b>Industry:</b> Social networking, enterprise</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all enterprise events ios">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/istage-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Event Management App - IStage Event</h3>
                            <p>iStage Event Management Application is developed with an intention to simplify the complexity involved in the Management of any event. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#eventMaModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="eventMaModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/eventManageIstage-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/eventManageIstage-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/eventManageIstage-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Event Management App - iStage Event</h3>
                                              <p>
                                              <p>iStage Event Management Application is developed with an intention to simplify the complexity involved in the Management of any event. This Application serves to be very handy for Event Organizers. With the help of this application, Attendees &amp; Exhibitors can easily communicate and Fix meetings with each other thus reducing the communication gap between the two parties.</p>
                                              <p>Beside this, users of this Application can easily remain updated with each and every happenings of the Event. iStage Application is having a kind of potential which Event Organizers can extract on the tap of their fingers. Along with reducing Complexity of different types of Events. iStage is also acting as a better vehicle for Advertising with the inclusion of features such as Logos, Banners, Sponsorship Levels, Profile Description etc.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> iPhone<br><b>Industry:<b> Enterprise, Events</b></b></div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all php codeigniter mysql nodejs android start-up food-restaurants wordpress">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/ofd-porfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Online Food Delivery App</h3>
                            <p>This online food delivery app is basically a restaurant mobile app, whose back-end and services is developed in PHP/Codeigniter.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#eventMaModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="eventMaModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/online-foodDelivery-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/online-foodDelivery-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/online-foodDelivery-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Online Food Delivery App</h3>
                                              <p>
                                              <p>This online food delivery app is basically a restaurant mobile app, whose back-end and services is developed in PHP/Codeigniter. When restaurant manager gets an order from a customer, he can create order on app and with the help of push functionality, he can sent the order details to the nearest delivery boy who is available. This push logic is developed in NODE JS.</p>
                                              <p>Apart from this, the online food delivery app has many other logics for example, the push logic is suppose to be send to the delivery boy who is free from long time, the performance of delivery boy calculate on the basis of how frequently he deliver the order and the reviews he get from customers.</p>
                                              </p>
                                              <div class="sub-title"><b>Technology:</b> PHP, Codeigniter, MySQL, Nodejs, Android<br><b>Industry:</b> Start-up, Food-Restaurants, Wordpress</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all enterprise healthcare ios android wordpress">
                      <!-- enterprise healthcare ios android wordpress -->
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Oncologie-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Medical News App – Oncologie</h3>
                            <p>Oncology Up-to-date is a medical science news App in Dutch. The goal of the App is to inform medical specialists of the latest developments in the field of cancer research.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#medicalNewsModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="medicalNewsModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/MedicalNews-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/MedicalNews-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/MedicalNews-app-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Medical News App – Oncologie</h3>
                                              <p>
                                              <p>Oncology Up-to-date is a medical science news App in Dutch. The goal of the App is to inform medical specialists of the latest developments in the field of cancer research.</p>
                                              <p>This iPhone application is designed as an iPhone/iPad client for the oncologie website. You can use this application to view the latest articles, make them as favourite, sharing with others, browse and search information you required related to medial science.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> iphone, Android, Wordpress<br><b>Industry:</b> Enterprise, Healthcare</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all enterprise blackberry gps">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/carpooling-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Car Pooling</h3>
                            <p>"Car Pooling" is a system for people Codelco it easy to share car trips, vans and cycling routes to move to work or wherever you want. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#carPoolingModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="carPoolingModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/car-pooling-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/car-pooling-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/car-pooling-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Car Pooling</h3>
                                              <p>"Car Pooling" is a system for people Codelco it easy to share car trips, vans and cycling routes to move to work or wherever you want. You can save money, time, gain parking spaces and have more fun, comfortable and ecological paths with your colleagues in the company. You do not need car, van or bike to participate, one must register using your corporate mail.</p>
                                              <div class="sub-title"> <b>Technology:</b> Blackberry<br><b>Industry:</b> Enterprise, GPS</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all finance start-up ios android">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/lendstar-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Social Finance App - Lendstar</h3>
                            <p>Lendstar is the social finance app that lets you lend money to each other - easily, securely and quickly</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#socialMFaodal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="socialMFaodal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialFinance-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialFinance-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialFinance-app-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Social Finance App - Lendstar</h3>
                                              <p>
                                              <p>Lendstar is the social finance app that lets you lend money to each other - easily, securely and quickly. Send money using your fingerprint! Borrow money, divide bills and transfer funds directly from your bank account with Lendstar, your social finance app for paying and chatting between friends.</p>
                                              <p>The app has huge level of security management tools implemented along with encryption at multiple levels. The app also deals with complex bank wallet APIs to do the final transfer.</p>
                                              <p>Put money matters into your friends’ hands with the group payment feature! Lendstar supports not just one to one, but also one to many transactions. Lendstar relies on your existing bank account, so there’s no need to open an extra account or charge a wallet!</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> iphone, android<br> <b>Industry:</b> Finance, Start-up</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all consumer gps android">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Gemeentegids-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>City Guide App - Gemeentegids</h3>
                            <p>The Gemeentegids city guide app is developed for Netherlands. It will guide you in every municipality in the Netherlands.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#cityGuideModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="cityGuideModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/city_guide-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/city_guide-app-2.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>City Guide App - Gemeentegids</h3>
                                              <p>
                                              <p>The Gemeentegids city guide app is developed for Netherlands. It will guide you in every municipality in the Netherlands. For example, good physiotherapist, the contact details of a cozy restaurant or the weather forecast for the coming days request.</p>
                                              <p>The built-in GPS function implemented in the app will help you to get information about businesses and amenities nearby (where you are) or of specific places. You can search by name or keyword you instantly get the contact details, get all the information about that place like opening time and closing time, contact number, book your order, etc. You can also share these details with your contacts through email, Twitter, Facebook, and other social media sites. You can also save the data under your favourites to look or browse faster in future.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> Android<br><b>Industry:</b> Consumer, GPS </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all consumer online-booking ios blackberry windows">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/atlasjet-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Online Flight Ticket And Booking – AtlasGlobal</h3>
                            <p>AtlasGlobal previously called as Atlasjet is an airline headquartered in Istanbul, Turkey. We developed the iOS, Android and Blackberry mobile application of AtlasGlobal.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#onlineFlightModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="onlineFlightModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/OnlineFlight-ticket-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/OnlineFlight-ticket-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/OnlineFlight-ticket-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Online Flight Ticket and Booking – AtlasGlobal</h3>
                                              <p>
                                              <p>AtlasGlobal previously called as Atlasjet is an airline headquartered in Istanbul, Turkey. We developed the iOS, Android and Blackberry mobile application of AtlasGlobal.</p>
                                              <p>With the help of this application you can book flight tickets online. The app also facilitates user to do real time booking, Visual Calendar, Currency and Language Settings, View and book flights, Check flights time table, View PNR status, Can do PNR cancellation, Book Tickets for one way or round trips, Select and confirm seats online, Get reminder notifications before 3 hours of your flight, Cancel booking, etc.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> iPhone, Blackberry, Windows<br><b>Industry:</b> Consumer, Online Booking</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all enterprise job-portal ios xcode">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/trabajos-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Trabajos - The Pioneer Job Portal In Spain</h3>
                            <p>Established in 1996, Trabajos is the leading job portal in Spain. Trabajos is always oriented to the user service for both company and candidate.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#trabajosModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="trabajosModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/trabajos-thepioneer-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/trabajos-thepioneer-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/trabajos-thepioneer-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Trabajos - The Pioneer Job Portal in Spain</h3>
                                              <p>
                                              <p>Established in 1996, Trabajos is the leading job portal in Spain. Trabajos is always oriented to the user service for both company and candidate. It acts as a link between supply and demand.</p>
                                              <p>Trabajos is a complete online tool that can streamline and facilitate your objective and provide custom alerts and suggestions according to your need.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> iOS, Mac OS 10.6.8, Xcode 4.2,<br><b>Industry:</b>      Enterprise, Job portal</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all healthcare ios">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/work-out-boost-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Workout Tracking App – MyWOD</h3>
                            <p>If you are a fitness freak and want to log and track your daily workouts, myWOD is your app. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#WorkoutkModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="WorkoutkModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/workoutTracking-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/workoutTracking-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/workoutTracking-app-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Workout Tracking App – myWOD</h3>
                                              <p>
                                              <p>If you are a fitness freak and want to log and track your daily workouts, myWOD is your app. This workout tracking app keep track of your records, share your accomplishments on social media profiles, create your own WOD, etc.</p>
                                              <p>There are many other features of this workout tracking app such as you can add custom movements and track max weight achievements, can check graphics to see your progress over time, iPod music access within timers, large collection of how-to videos with covering many basic and advanced movements, weight percentage charts and calculator, etc.</p>
                                              <p>This workout tracking app is a great for any Crossfiter, it allows you to backup to Dropbox and import to any other device. The app completely works offline, unless you are browsing the how-to videos then you have to use mobile data, or Wifi.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> iPhone <br><b>Industry:</b> Healthcare </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all start-up security internet-of-things ios">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bike-security-app-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Bike Security App - Hardware Integration</h3>
                            <p>This app is a smart bike lock app developed using hardware integration. The app controls a device i.e. attachable to the bike called "Bike Security Device".</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#BikeSecurityModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="BikeSecurityModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bike-security-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bike-security-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/bike-security-app-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Bike Security App - Hardware Integration</h3>
                                              <p>
                                              <p>This app is a smart bike lock app developed using hardware integration. The app controls a device i.e. attachable to the bike called "Bike Security Device". So when you park your bike somewhere, the device records its current coordinates and send the necessary details to the bike lock server. And when someone try to change displace your bike or want to rob, you will get an alert notification on your bike security app immediately.</p>
                                              <p>Bluetooth Low Energy and GSM/GPS implementation help the app to send signals to the app remotely.</p>
                                              </p>
                                              <div class="sub-title"> <b>Technology:</b> iPhone, IoT, Hardware Integration, BLE<br><b>Industry:</b> Start-up, Security </div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all ios android consumer photo-sharing">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/Bezzirk-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Social Photo Sharing App – Bezzirk</h3>
                            <p>Bezzirk is a social photo sharing application that allows users to instantly share photos with friends. </p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#socialPhotoModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="socialPhotoModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialPhotoSharing-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialPhotoSharing-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialPhotoSharing-3.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/socialPhotoSharing-4.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Social Photo Sharing App – Bezzirk</h3>
                                              <p>Bezzirk is a social photo sharing application that allows users to instantly share photos with friends. Some of the finest features of this app are that you can post polls and ask questions to your friends and see their answers in real time, apply filters, search and tag friends, share your life in photos, enlarge photos without compromising its quality, rate photos, upload multiple photos at a time, click photos by using built-in camera, and much more.</p>
                                              <div class="sub-title"><b>Technology:</b> iPhone, Android<br><b>Industry:<b> Consumer, photo sharing</b></b></div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                   <div class="col-md-6 js-filter-grid-item all gps android">
                      <div class="owk-thumbnail">
                         <div class="owk-img">
                            <img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/mobgo-portfolio-thumb.jpg" alt="Image">
                         </div>
                         <div class="owk-overlay"></div>
                         <div class="owk-content">
                            <h3>Brand Tracker App - MoBgo</h3>
                            <p>MoBgo pronounced as Mo Bee Go is a brand tracker app that gives you the information of nearest store or selling point of your favourite brand.</p>
                         </div>
                         <button id="myBtn" data-modal="ctmModal" data-target="#brandTrackerModal" class="owk-btn">More</button>
                      </div>
                      <!-- The Modal -->
                      <div id="brandTrackerModal" class="ctm-modal">
                         <div class="ctm-modal-overlay"></div>
                         <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="mdl-close"></span>
                            </div>
                            <div class="modal-body">
                               <div class="container">
                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="portfolio-slider-wrap">
                                           <div class="swiper-container portfolio-slider">
                                              <div class="swiper-wrapper">
                                                 <!-- Slides -->
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/BrandTracker-app-1.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/BrandTracker-app-2.jpg" alt="Slider Image" /></div>
                                                 <div class="swiper-slide"><img src="<?php echo home_url(); ?>/wp-assets/images/portfolio/BrandTracker-app-3.jpg" alt="Slider Image" /></div>
                                              </div>
                                              <div class="swiper-button-next"></div>
                                              <div class="swiper-button-prev"></div>
                                              <div class="swiper-pagination"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-7">
                                        <div class="content-right mCustomScrollbar darkScroll">
                                           <div class="og-details">
                                              <h3>Brand Tracker App - MoBgo</h3>
                                              <p>MoBgo pronounced as Mo Bee Go is a brand tracker app that gives you the information of nearest store or selling point of your favourite brand. The app also gives each and every unique (branded) location you want. You get the sales points in the order of the distance on your screen. While Choosing a store, you will immediately get the route, brand information, links to social media and can store all information you required.</p>
                                              <div class="sub-title"> <b>Technology:</b> Android <br><b>Industry:</b> GPS</div>
                                              <br/>
                                              <a target="_blank" class="btn our-quote" href="contact"><span>Request for quote</span></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- /.ctm-modal -->
                   </div>
                </div>
                <div class="owk-loadmore-btn wow fadeInUp">
                  <button id="loadMore" class="btn">Load More</button>
                </div>
                
             </div>
          </div>
       </section>
    </main>
<?php

   get_footer();

?>