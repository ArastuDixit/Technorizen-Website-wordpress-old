<!DOCTYPE html>

<html lang="en">

   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

   <head>

      <meta charset="utf-8" />

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="google-site-verification" content="IKVnNbAXJgBSfUn_n4OP8HJ7dD-1Q-hQP6uwAKV1iVs" />

      <!-- CSS -->

      <!-- Custom CSS -->

      <link rel="shortcut icon" href="/wp-assets/images/favicon.ico" />

      <link rel="stylesheet" href="/wp-assets/scss/css/magnific-popup.min.css">

      <link rel="stylesheet" href="/wp-assets/css/style.css" />

      <meta name="viewport" content="width=device-width, initial-scale=1"/>

      <title> Software Development company | IT Consulting Services</title>

      <meta name="description" content=" CDN Solutions Group is a software development company providing excellent IT consulting, software, web & app development solutions across the globe. Get a free consultation from our experts."/>

      <meta name="keywords" content=" IT outsourcing company, web development company USA, software development company USA,  IT consulting service, Business consulting firm, Hire Software Developers"/>

      <meta property="og:locale" content="en_US" />

      <meta property="og:type" content="website" />

      <meta property="og:title" content="Software Development company | IT Consulting Services" />

      <meta property="og:description" content=" CDN Solutions Group is a software development company providing excellent IT consulting, software, web & app development solutions across the globe. Get a free consultation from our experts." />

      <meta property="og:url" content="index.html" />

      <meta property="og:site_name" content="CDN Solutions Group" />

      <meta name="twitter:card" content="summary" />

      <meta name="twitter:description" content="Established in 2000, CDN Solutions Group is a leading web and mobile app development company. We are an ISO 9001:2015 certified software development company." />

      <meta name="twitter:title" content="Software Development company | IT Consulting Services" />

      <meta name="twitter:site" content="@cdnsolutions" />

      <meta name="twitter:creator" content="@cdnsolutions" />

      <!-- Auto load popup script -->

      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

      <!-- End Script -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

      <script src='https://www.google.com/recaptcha/api.js' async defer></script>

      <script src="https://unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>

      <script type="text/javascript"> 

         $(document).ready(function() {

               

            var testing = false;

            $('#send_request_form').on('submit', function() {

         

            if(grecaptcha.getResponse() == "") {

                  swal("You can't proceed. Please verify captcha first!");

                  return false;

            }else {

               //var requestforquote_code = $('input[name="requestforquote_code"]').val();

               var name = $('input[name="name"]').val();

               var country = $('input[name="country"]').val();

               var contactNumber = $('input[name="contactNumber"]').val();

               var email = $('input[name="email"]').val();

               var message_text = $('textarea#message_text').val();

               var company = $('input[name="company"]').val();

               var messanger_id = $('#messanger_id').val();

               var social_id = $('input[name="social_id"]').val();

               $.ajax({

                     url: 'send_email',

                     type: 'post',

                     data: {

                        //'requestforquote_code' : requestforquote_code,

                        'name' : name,

                        'country' : country,

                        'contactNumber' : contactNumber,

                        'message_text' : message_text,

                        'email' : email,

                        'company' : company,

                        'messanger_id' : messanger_id,

                        'social_id' : social_id,

                        'action' : 'requestforquote'

                     },

                  async: false,

                  success: function(data) {

                     var result = $.parseJSON(data);

                     

                     if(result.success == false)

                     {

                        swal(result.message);

                     }

                     else

                     {

                        window.location.href = "http://cdnsol.com/thank_you";

                     }

                  },

                  error: function() {

                     alert('There has been an error, please alert us immediately');

                  }

            });

            }

         

            return testing;

         });

         });

      </script> 

      <?php wp_head(); ?>

   </head>

   <body >





      <header id="header" class="header-wrap">

         <div class="main-navbar-wrap">

            <div class="container clearfix">

               <div class="header-logo">

                  <a href="/wp-assets/index.html" class="logo"><img src="/wp-assets/images/logo.png" alt="Logo" /></a>

               </div>

               <!-- /.header-logo -->

               <nav class="main-navbar">

                  <div class="main-menu-top">

                     <div class="menu-toggle">

                        <span class="menu-toggle-icon">

                        <span></span>

                        </span>

                     </div>

                     <div class="main-menu-wrap clearfix">

                        <div class="main-menu-inner">

                           <ul class="main-menu">

                              <li class="has-submenu">

                                 <a class="menu-desk" href="JavaScript:void(0);">Company</a>

                                 <a data-toggle="collapse" class="menu-a" href="#about-menu" role="button" aria-expanded="false" aria-controls="about-menu" href="JavaScript:void(0);">Company</a>

                                 <div id="about-menu" class="submenu-wrap about-menu collapse">

                                    <div class="submenu-content">

                                       <div class="row">

                                          <div class="col-md-5">

                                             <div class="info-box-menu">

                                                <!-- <h6>Work with</h6> -->

                                                <h3>CDN Solutions Group</h3>

                                                <p>We build a better future with technologies. </p>

                                                <!-- <div class="menu-inner-btn">

                                                   <a href="/wp-assets/contact" class="contactus">Let's get started</a>

                                                   </div> -->

                                             </div>

                                          </div>

                                          <div class="col-md-7 menu-right-wrap">

                                             <div class="row">

                                                <div class="col-md-6">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/about.html">About us</a></li>

                                                      <li><a href="/wp-assets/products.html">Products</a></li>

                                                      <li><a href="/wp-assets/infograins.html">Partners</a></li>

                                                   </ul>

                                                </div>

                                                <div class="col-md-6">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/team.html">Team</a></li>

                                                      <li><a href="/wp-assets/Investment-opportunities.html">Investment Opportunities</a></li>

                                                   </ul>

                                                </div>

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </li>

                              <li class="has-submenu">

                                 <a class="menu-desk" href="JavaScript:void(0);">Services</a>

                                 <a data-toggle="collapse" class="menu-a" href="#service-menu" role="button" aria-expanded="false" aria-controls="service-menu" href="JavaScript:void(0);">Services</a>

                                 <div id="service-menu" class="submenu-wrap services-menu collapse">

                                    <div class="submenu-content">

                                       <div class="row">

                                          <div class="col-md-4">

                                             <div class="info-box-menu">

                                                <!-- <h6>Work with</h6> -->

                                                <h3>Services</h3>

                                                <p>Experience the excellence of our dedicated professionals who are adept in delivering top-notch solutions. </p>

                                                <!-- <div class="menu-inner-btn">

                                                   <a href="/wp-assets/contact" class="contactus">Let's get started</a>

                                                   </div> -->

                                             </div>

                                          </div>

                                          <div class="col-md-8 menu-right-wrap">

                                             <div class="row">

                                                <div class="col-md-6">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/team-augmentation.html">Team augmentation</a></li>

                                                      <li><a href="/wp-assets/web-development.html">Web development</a></li>

                                                      <li><a href="/wp-assets/mobile-app-development.html">Mobile app development</a></li>

                                                      <li><a href="/wp-assets/ecommerce-solutions.html">E-Commerce development</a></li>

                                                      <li><a href="/wp-assets/engagement-models.html">Engagement models</a></li>

                                                   </ul>

                                                </div>

                                                <div class="col-md-6">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/custom-software-development.html">Software development</a></li>

                                                      <li><a href="/wp-assets/chatbot.html">Chatbot development</a></li>

                                                      <li><a href="/wp-assets/consultancy.html">IT consultancy</a></li>

                                                      <li><a href="/wp-assets/wireframing-and-app-prototyping.html">Wireframing & Prototyping</a></li>

                                                   </ul>

                                                </div>

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </li>

                              <li class="has-submenu">

                                 <a class="menu-desk" href="JavaScript:void(0);">Technology</a>

                                 <a data-toggle="collapse" class="menu-a" href="#technology-menu" role="button" aria-expanded="false" aria-controls="technology-menu" href="JavaScript:void(0);">Technology</a>

                                 <div id="technology-menu" class="submenu-wrap technology-menu collapse">

                                    <div class="submenu-content">

                                       <div class="row">

                                          <div class="col-md-4">

                                             <div class="info-box-menu">

                                                <!-- <h6>Work with</h6> -->

                                                <h3>Technologies</h3>

                                                <p>We offer Technologies that offers millions of possibilities. </p>

                                                <!-- <div class="menu-inner-btn">

                                                   <a href="/wp-assets/contact" class="contactus">Let's get started</a>

                                                   </div> -->

                                             </div>

                                          </div>

                                          <div class="col-md-8 menu-right-wrap">

                                             <div class="row">

                                                <div class="col-md-4">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/open-source.html">Open Source</a></li>

                                                      <li><a href="/wp-assets/enterprise.html">Enterprise</a></li>

                                                      <li><a href="/wp-assets/ruby-on-rails.html">Ruby On Rails</a></li>

                                                   </ul>

                                                </div>

                                                <div class="col-md-4">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/internet-of-things.html">IoT</a></li>

                                                      <li><a href="/wp-assets/blockchain-development-company.html">Blockchain</a></li>

                                                      <li><a href="/wp-assets/wearable-app-development-company.html">Wearables</a></li>

                                                   </ul>

                                                </div>

                                                <div class="col-md-4">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/iBeacon-app-development.html">iBeacon</a></li>

                                                      <li><a href="/wp-assets/ar-vr-development-company.html">AR/VR</a></li>

                                                      <li><a href="/wp-assets/cloud-computing-development-services.html">Cloud  computing</a></li>

                                                   </ul>

                                                </div>

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </li>

                              <li class="has-submenu">

                                 <a class="menu-desk" href="JavaScript:void(0);">Vertical</a>

                                 <a data-toggle="collapse" class="menu-a" href="#industry-menu" role="button" aria-expanded="false" aria-controls="industry-menu" href="JavaScript:void(0);">Industries</a>

                                 <div id="industry-menu" class="submenu-wrap industries-menu collapse">

                                    <div class="submenu-content">

                                       <div class="row">

                                          <div class="col-md-12 menu-right-wrap">

                                             <div class="row">

                                                <div class="col-md-3">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/start-ups.html">Start-ups</a></li>

                                                      <li><a href="/wp-assets/healthcare-it-solutions.html">Healthcare</a></li>

                                                      <li><a href="/wp-assets/consumer.html">Consumer</a></li>

                                                      <li><a href="/wp-assets/software-solutions-for-travel-toursim.html">Travel & Tourism</a></li>

                                                      <li><a href="/wp-assets/IT-solutions-for-education-sector.html">Education</a></li>

                                                   </ul>

                                                </div>

                                                <div class="col-md-3">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/software-solutions-food-and-restaurants.html">Food & Restaurant</a></li>

                                                      <li><a href="/wp-assets/Warehouse-Management-Software-Solutions.html">Warehouse</a></li>

                                                      <li><a href="/wp-assets/IT-solutions-for-real-estate.html">Real Estate</a></li>

                                                      <li><a href="/wp-assets/banking-finance.html">Banking & Finance</a></li>

                                                      <li><a href="/wp-assets/pharmaceuticals.html">Pharmaceuticals</a></li>

                                                   </ul>

                                                </div>

                                                <div class="col-md-3">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/energy-and-utility.html">Energy & Utility</a></li>

                                                      <li><a href="/wp-assets/e-commerce.html">E-Commerce</a></li>

                                                      <li><a href="/wp-assets/Manufacturing.html">Manufacturing </a></li>

                                                      <li><a href="/wp-assets/retail-automotive.html">Retail automotive</a></li>

                                                      <li><a href="/wp-assets/social-networking.html">Social Networking</a></li>

                                                   </ul>

                                                </div>

                                                <div class="col-md-3">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/automative-software-solutions.html">Automotive</a></li>

                                                      <li><a href="/wp-assets/agriculture.html">Agriculture</a></li>

                                                      <li><a href="/wp-assets/government.html">Government</a></li>

                                                      <li><a href="/wp-assets/logistics-software-development.html">logistics </a></li>

                                                   </ul>

                                                </div>

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </li>

                              <li class="has-submenu">

                                 <a class="menu-desk" href="/wp-assets/our-work.html">Our work</a>

                              </li>

                              <li class="has-submenu">

                                 <a class="menu-desk" href="JavaScript:void(0);">Insights</a>

                                 <a data-toggle="collapse" class="menu-a" href="#insights-menu" role="button" aria-expanded="false" aria-controls="insights-menu" href="JavaScript:void(0);">Insights</a>

                                 <div id="insights-menu" class="submenu-wrap insights-menu collapse">

                                    <div class="submenu-content">

                                       <div class="row">

                                          <div class="col-md-4">

                                             <div class="info-box-menu">

                                                <!-- <h6>Work with</h6> -->

                                                <h3>Insights</h3>

                                                <p>Lets get what you need.</p>

                                                <!-- <div class="menu-inner-btn">

                                                   <a href="/wp-assets/contact" class="contactus">Let's get started</a>

                                                   </div> -->

                                             </div>

                                          </div>

                                          <div class="col-md-8 menu-right-wrap">

                                             <div class="row">

                                                <div class="col-md-6">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/social-events.html">Social Events</a></li>

                                                      <li><a href="/wp-assets/press-releases/index.html">Press Releasess</a></li>

                                                   </ul>

                                                </div>

                                                <div class="col-md-6">

                                                   <ul class="submenu">

                                                      <li><a href="/wp-assets/case-study/index.html" target="">Case studies</a></li>

                                                      <li><a href="/wp-assets/blog/index.html">Blogs</a></li>

                                                      <!-- <li><a href="/wp-assets/news">News</a></li> -->

                                                   </ul>

                                                </div>

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </li>

                           </ul>

                           <div class="menu-right-btn position-relative">

                              <a href="/wp-assets/contact.html" class="letstalk for-desk">Inquiry</a>

                              <!-- <a id="letstalk-modal" data-toggle="modal" data-target="#letstalk" class="letstalk for-mob">Inquiry Now</a> -->

                              <a href="/wp-assets/contact.html" id="letstalk-modal" class="letstalk for-mob">Inquiry</a>

                           </div>

                        </div>

                     </div>

                     <!-- /.main-menu-wrap -->

                  </div>

               </nav>

            </div>

         </div>

         <!-- /.main-navbar-wrap -->

      </header>