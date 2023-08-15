      <?php wp_footer(); ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
      <script src='https://www.google.com/recaptcha/api.js' async defer></script>
      <script src="https://unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>
      <script type="text/javascript"> 
         $(document).ready(function() {
         var testing = false;
         $('#send_contact_form').on('submit', function() {
         
             if(grecaptcha.getResponse() == "") {
                 swal("You can't proceed. Please verify captcha first!");
                 return false;
             }else {
                 //var call_letters_code = $('input[name="call_letters_code"]').val();
                 var name = $('input[name="name"]').val();
                 var contactNumber = $('input[name="contactNumber"]').val();
                 var company_name = $('input[name="company_name"]').val();
                 var email = $('input[name="email"]').val();
                 var comment = $('textarea#comment').val();
                 $.ajax({
                     url: 'send_email',
                     type: 'post',
                     data: {
                             //'call_letters_code' : call_letters_code,
                             'name' : name,
                             'contactNumber' : contactNumber,
                             'company_name' : company_name,
                             'comment' : comment,
                             'email' : email,
                             'action' : 'contactForm'
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
                             /*testing = true;
                             $('#send_contact_form').attr('action', 'send_email.php');
                             $('#send_contact_form').submit();*/
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
      <footer id="footer">
         <div class="footer-inner">
            <div class="container">
               <div class="row">
                  <div class="ftr-col-1 footer-end-logo-top ftr-col">
                     <div class="ftr-content">
                        <a href="/wp-assets/index-2.html" class="ftr-logo">
                        <img src="/wp-assets/images/logo.png">                         
                        </a>
                        <div class="text-quote" style="padding-top:10px;"> <img src="/wp-assets/images/text.svg" /></div>
                        <div class="ftr-logo-tagline">
                           <ul class="social-icon list-inline">
                              <li class="list-inline-item">
                                 <a target="_blank" href="https://twitter.com/cdnsolutions"><img width="100%" src="/wp-assets/images/twitter.svg" alt="twitter"></a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="https://www.facebook.com/CDNSoftwareSolutions/"><img width="100%" src="/wp-assets/images/facebook.svg" alt="facebook"></a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="https://www.linkedin.com/company/cdn-solutions-group"><img width="100%" src="/wp-assets/images/linkedin.svg" alt="linkedin"></a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="https://www.instagram.com/cdn_solutions_group/"><img width="100%" src="/wp-assets/images/instagram.svg" alt="instagram"></a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="https://www.youtube.com/user/cdnsoftwaresolutions"><img width="100%" src="/wp-assets/images/youtube.svg" alt="youtube"></a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="Javascript:void(0);"><img width="100%" src="/wp-assets/images/skype.svg" alt="skype"></a>
                              </li>
                           </ul>
                           <div class="partner-footer mt-20">
                              <h5>Partners</h5>
                              <p>India - Infograins</p>
                              <p>Ireland Partner - TuiTech</p>
                              <p>Domestic Partner - Suruche Tech(India) Pvt.Ltd</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.ftr-colum-wrap -->
                  <div class="ftr-col-2 ftr-col">
                     <div class="ftr-content">
                        <div class="ftr-title">
                           <h3>Company</h3>
                           <a class="btn bg-transparent hidden-lg hidden-sm hidden-md w-100 text-left border-0" data-toggle="collapse" class="menu-a" href="#company" role="button" aria-expanded="false" aria-controls="company">Company <span class="float-right"><img
                              src="/wp-assets/images/arrow-circle.png" alt="arrow-down" /></span></a>
                        </div>
                        <div class="ftr-centent collapse" id="company">
                           <ul class="ftr-menu">
                              <li><a href="/wp-assets/about.html">About us</a></li>
                              <li><a href="/wp-assets/career.html">Careers</a></li>
                              <li><a href="/wp-assets/it-events.html">IT Events</a></li>
                              <li><a href="/wp-assets/press-releases/index.html">Press Releases</a></li>
                              <li><a href="#" data-toggle="modal" data-target="#download">Downloads</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- /.ftr-colum-wrap -->
                  <div class="ftr-col-3 ftr-col">
                     <div class="ftr-content">
                        <div class="ftr-title">
                           <h3>Quick Links</h3>
                           <a class="btn bg-transparent hidden-lg hidden-sm hidden-md w-100 text-left border-0" data-toggle="collapse" class="menu-a" href="#why-cdn" role="button" aria-expanded="false" aria-controls="why-cdn">Why CDN <span class="float-right"><img
                              src="/wp-assets/images/arrow-circle.png" alt="arrow-down" /></span></a>
                        </div>
                        <div class="ftr-centent collapse" id="why-cdn">
                           <ul class="ftr-menu">
                              <li><a href="/wp-assets/industries-we-serve.html">Industries we serve</a></li>
                              <li><a href="/wp-assets/technologies-we-work-on.html">Technologies</a></li>
                              <li><a href="/wp-assets/our-work.html">Our works</a></li>
                              <li><a href="/wp-assets/engagement-models.html">Engagement models</a></li>
                              <li><a href="/wp-assets/testimonials.html">Testimonials</a></li>
                              <li><a href="/wp-assets/case-study/index.html" target="_blank">Case studies</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- /.ftr-colum-wrap -->
                  <div class="ftr-col-4 ftr-col">
                     <div class="ftr-content">
                        <div class="ftr-title">
                           <h3>Services</h3>
                           <a class="btn bg-transparent hidden-lg hidden-sm hidden-md w-100 text-left border-0" data-toggle="collapse" class="menu-a" href="#services" role="button" aria-expanded="false" aria-controls="why-cdn">Services<span class="float-right"><img
                              src="/wp-assets/images/arrow-circle.png" alt="arrow-down" /></span></a>
                        </div>
                        <div class="ftr-centent collapse" id="services">
                           <ul class="ftr-menu">
                              <li><a href="/wp-assets/mobile-app-development.html">Mobile App Development </a></li>
                              <li><a href="/wp-assets/custom-software-development.html">Custom Software Development </a></li>
                              <li><a href="/wp-assets/web-development.html">Web Design and Development </a></li>
                              <li><a href="/wp-assets/consultancy.html">IT Consultancy </a></li>
                              <li><a href="/wp-assets/ecommerce-solutions.html">E-commerce Development </a></li>
                              <li><a href="/wp-assets/business-solution-provider.html">Business solution provider</a></li>
                              <li><a href="/wp-assets/start-ups.html">Startups</a></li>
                              <li><a href="/wp-assets/enterprise-mobile-app-development.html">Enterprise Mobile App Development</a></li>
                              <!-- <li><a href="Javascript:void(0);">Hire Developers</a></li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- /.ftr-colum-wrap ds -->
                  <div class="ftr-col-5 ftr-col">
                     <div class="ftr-content">
                        <div class="ftr-title">
                           <h3>Have Question?</h3>
                           <a class="btn bg-transparent hidden-lg hidden-sm hidden-md w-100 text-left border-0" data-toggle="collapse" class="menu-a" href="#have-que" role="button" aria-expanded="false" aria-controls="why-cdn">have-que <span
                              class="float-right"><img src="/wp-assets/images/arrow-circle.png"
                              alt="arrow-down" /></span></a>
                        </div>
                        <div class="ftr-centent collapse" id="have-que">
                           <ul class="ftr-menu ftr-adress">
                              <li>Call us 24/7</li>
                              <li><a href="tel:+91-8770274225">+91-8770274225</a></li>
                              <li><a href="tel:+61408989495">+61-408-989-495</a></li>
                              <li><a href="tel:+1-415-230-0320">+1-415-230-0320</a></li>
                              <hr />
                              <li>Skype: cdnindia</li>
                              <li>Email: <a href="mailto:someone@example.com">contact@cdnsol.com</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="ftr-col-1 ftr-col footer-end-logo">
                     <div class="footer-new-bottom">
                        <div class="ftr-content">
                           <a href="/wp-assets/index-2.html" class="ftr-logo">
                           <img src="/wp-assets/images/cdn_logo.svg" />
                           <img src="/wp-assets/images/text.svg" />
                           </a>
                           <div class="ftr-logo-tagline">
                              <ul class="social-icon list-inline">
                                 <li class="list-inline-item">
                                    <a target="_blank" href="https://twitter.com/cdnsolutions"><img width="100%" src="/wp-assets/images/twitter.svg" alt="twitter"></a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a target="_blank" href="https://www.facebook.com/CDNSoftwareSolutions/"><img width="100%" src="/wp-assets/images/facebook.svg" alt="facebook"></a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a target="_blank" href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fcdn-solutions-group%2Fposts"><img width="100%" src="/wp-assets/images/linkedin.svg" alt="linkedin"></a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a target="_blank" href="/wp-assets/instagram.com/accounts/login/index.html"><img width="100%" src="/wp-assets/images/instagram.svg" alt="instagram"></a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a target="_blank" href="https://www.youtube.com/c/Cdnsol/videos"><img width="100%" src="/wp-assets/images/youtube.svg" alt="youtube"></a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a target="_blank" href="Javascript:void(0);"><img width="100%" src="/wp-assets/images/skype.svg" alt="skype"></a>
                                 </li>
                              </ul>
                              <div class="partner-footer">
                                 <h5>Partners</h5>
                                 <p>UK Partner - Open Consulting </p>
                                 <p>Domestic Partner - Suruche Tech(India) Pvt.Ltd</p>
                                 <p class="suruche"> <a href="https://suruchetech.com/" target="_blank" class="ftr-logo"> <img src="/wp-assets/images/logo-suruche.svg" />   </a></p>
                                 <p class="cdnmobile"> <a href="https://cdnmobilesolutions.com/" target="_blank" class="ftr-logo"> <img src="/wp-assets/images/cdn-mobile-logo.svg" class="img-fluid"/>   </a></p>
                                 <p class="infograins"> <a href="https://infograins.com/" target="_blank" class="ftr-logo"> <img src="/wp-assets/images/infograins/logo-infograins.png" class="img-fluid"/>   </a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Desktop view-->
               <div class="logo-desktop">
                  <div class="row align-items-center">
                     <div class="ftr-col-1 ftr-logo-1">
                        <p class="suruche"> 
                           <a href="https://suruchetech.com/" target="_blank" class="ftr-logo"> <img src="/wp-assets/images/logo-suruche.svg" class="img-fluid"/></a>
                        </p>
                     </div>
                     <div class="ftr-col-2 ftr-logo-2">
                        <p class="cdnmobile"> <a href="https://cdnmobilesolutions.com/" target="_blank" class="ftr-logo"> <img src="/wp-assets/images/cdn-mobile-logo.svg" class="img-fluid"/>   </a></p>
                     </div>
                     <div class="ftr-col-2 ftr-logo-3">
                        <p class="cdnmobile"> <a href="https://infograins.com/" target="_blank" class="ftr-logo"> <img src="/wp-assets/images/infograins/logo_white.svg" class="img-fluid"/>   </a></p>
                     </div>
                     <!--    <div class="ftr-col-2 ftr-col"> 
                        <p class="cdnmobile"> <a href="#" target="_blank" class="ftr-logo"> <img src="/wp-assets/images/Tuitech_Final-Logo-2-177x68.png" class="img-fluid"/>   </a></p>
                        </div>-->
                  </div>
               </div>
               <!--//-->
            </div>
         </div>
         <div class="footer-copyright">
            <a class="arrow-top" href="#main"><img src="/wp-assets/images/arrow-circle.png" alt="arrow-up" /></a>
            <div class="container">
               <div class="copyright-wrap">
                  <div class="copyright-des">Copyright © CDN Solutions Pvt. Ltd. 2022-All rights reserved | <a href="/wp-assets/privacy-policy.html">Privacy-Policy</a> | <a href="/wp-assets/sitemap.xml">Sitemap</a></div>
               </div>
            </div>
         </div>
      </footer>
      <!--== DOWNLOAD START ==-->
      <!-- Modal -->
      <div class="modal fade" id="download" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Our Assets</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body footer-download">
                  <table class="table table-striped table-responsive">
                     <tbody>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center font-weight-bolder"><span><img src="/wp-assets/images/pdf.svg" alt="pdf" /></span> Corporate Profile</div>
                           </td>
                           <td><a href="/wp-assets/images/pdf/CDN-Corporate-Profilef614.pdf?pdf=CDN-Corporate-Profile" target="_blank" class="d-flex align-items-center justify-content-center"><span><img src="/wp-assets/images/eye.svg" alt="View" /></span> View</a></td>
                           <td><a href="/wp-assets/images/pdf/CDN-Corporate-Profile.pdf" class="d-flex align-items-center justify-content-center" download><span><img src="/wp-assets/images/cloud-computing.svg" alt="Download" /></span> Downloads</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center font-weight-bolder"><span><img src="/wp-assets/images/pdf.svg" alt="pdf" /></span> Process Document</div>
                           </td>
                           <td><a href="/wp-assets/images/pdf/Process-Documentcac0.pdf?pdf=Process-Document" class="d-flex align-items-center justify-content-center" target="_blank"><span><img src="/wp-assets/images/eye.svg" alt="View" /></span> View</a></td>
                           <td><a href="/wp-assets/images/pdf/Process-Document.pdf" class="d-flex align-items-center justify-content-center" download><span><img src="/wp-assets/images/cloud-computing.svg" alt="Download" /></span> Downloads</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center font-weight-bolder"><span><img src="/wp-assets/images/pdf.svg" alt="pdf" /></span> 3D Work Catalogue</div>
                           </td>
                           <td><a href="/wp-assets/images/pdf/CDN-3D-Catalogue.pdf" class="d-flex align-items-center justify-content-center" target="_blank"><span><img src="/wp-assets/images/eye.svg" alt="View" /></span> View</a></td>
                           <td><a href="/wp-assets/images/pdf/CDN-3D-Catalogue.pdf" class="d-flex align-items-center justify-content-center" download><span><img src="/wp-assets/images/cloud-computing.svg" alt="Download" /></span> Downloads</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center font-weight-bolder"><span><img src="/wp-assets/images/pdf.svg" alt="pdf" /></span> Internet of Things Work</div>
                           </td>
                           <td><a href="/wp-assets/images/pdf/CDN-IoT-Internet-Of-Things11f8.pdf?pdf=CDN-IoT-Internet-Of-Things" class="d-flex align-items-center justify-content-center" target="_blank"><span><img src="/wp-assets/images/eye.svg" alt="View" /></span> View</a></td>
                           <td><a href="/wp-assets/images/pdf/CDN-IoT-Internet-Of-Things.pdf" class="d-flex align-items-center justify-content-center" download><span><img src="/wp-assets/images/cloud-computing.svg" alt="Download" /></span> Downloads</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center font-weight-bolder"><span><img src="/wp-assets/images/pdf.svg" alt="pdf" /></span> Web Catalouge</div>
                           </td>
                           <td><a href="/wp-assets/images/pdf/Web-Catalouge.pdf" class="d-flex align-items-center justify-content-center" target="_blank"><span><img src="/wp-assets/images/eye.svg" alt="View" /></span> View</a></td>
                           <td><a href="/wp-assets/images/pdf/Web-Catalouge.pdf" class="d-flex align-items-center justify-content-center" download><span><img src="/wp-assets/images/cloud-computing.svg" alt="Download" /></span> Downloads</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center font-weight-bolder"><span><img src="/wp-assets/images/pdf.svg" alt="pdf" /></span> Mobile Catalouge</div>
                           </td>
                           <td><a href="/wp-assets/images/pdf/Mobile-Catalouge.pdf" class="d-flex align-items-center justify-content-center" target="_blank"><span><img src="/wp-assets/images/eye.svg" alt="View" /></span> View</a></td>
                           <td><a href="/wp-assets/images/pdf/Mobile-Catalouge.pdf" class="d-flex align-items-center justify-content-center" download><span><img src="/wp-assets/images/cloud-computing.svg" alt="Download" /></span> Downloads</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center font-weight-bolder"><span><img src="/wp-assets/images/pdf.svg" alt="pdf" /></span> ISO/IEC 27001:2013</div>
                           </td>
                           <td><a href="/wp-assets/images/pdf/0113712_ENG_CDN_Software_Solutions_Pvt._Ltd.pdf" class="d-flex align-items-center justify-content-center" target="_blank"><span><img src="/wp-assets/images/eye.svg" alt="View" /></span> View</a></td>
                           <td><a href="/wp-assets/images/pdf/0113712_ENG_CDN_Software_Solutions_Pvt._Ltd.pdf" class="d-flex align-items-center justify-content-center" download><span><img src="/wp-assets/images/cloud-computing.svg" alt="Download" /></span> Downloads</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center font-weight-bolder"><span><img src="/wp-assets/images/pdf.svg" alt="pdf" /></span> ISO 9001:2015</div>
                           </td>
                           <td><a href="/wp-assets/images/pdf/IIN-0375.10_ENG_CDN_Software_Solutions_Pvt._Ltd.pdf" class="d-flex align-items-center justify-content-center" target="_blank"><span><img src="/wp-assets/images/eye.svg" alt="View" /></span> View</a></td>
                           <td><a href="/wp-assets/images/pdf/IIN-0375.10_ENG_CDN_Software_Solutions_Pvt._Ltd.pdf" class="d-flex align-items-center justify-content-center" download><span><img src="/wp-assets/images/cloud-computing.svg" alt="Download" /></span> Downloads</a></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!--== DOWNLOAD END ==-->
      <div class="modal fade popup-talk" id="letstalk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-body p-0 talk-form-section ">
                  <section class="contact-page">
                     <div class="contact-page-wrap">
                        <!-- <div class="contact-close"><a href="/wp-assets/index">x</a></div> -->
                        <div class="container">
                           <div class="row justify-content-between align-items-center pt-3 pb-5 position-relative">
                              <div>
                                 <a class="contact-logo" href="/wp-assets/index-2.html"><img src="/wp-assets/images/cdn_logo.svg" alt="logo" /></a>
                              </div>
                              <div>
                                 <div class="contact-close"><a href="/wp-assets/index-2.html">x</a></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="contact-form-wrap">
                                    <div class="section-title" style="visibility: visible; animation-name: fadeInUp;">
                                       <h2 class="title">Contact us</h2>
                                       <p class="subtitle">Over the years, CDN Solutions Group has successfully delivered the quality solutions to all our clients over the globe. We have proudly satisfied the below mentioned clients and served projects over the globe.</p>
                                    </div>
                                    <div class="contact-form p-0">
                                       <form class="theme-form" id="send_contact_form"  method="POST">
                                          <div class="row">
                                             <div class="col-md-4">
                                                <div class="form-group inputControl">
                                                   <input type="text" id="name" name="name" class="form-control" required>
                                                   <div class="label">Frist name<span class="required">*</span></div>
                                                </div>
                                             </div>
                                             <div class="col-md-4">
                                                <div class="form-group inputControl">
                                                   <input type="text" id="company_name" name="company_name" class="form-control" required>
                                                   <div class="label">Your company name<span class="required">*</span></div>
                                                </div>
                                             </div>
                                             <div class="col-md-4">
                                                <div class="form-group inputControl">
                                                   <input type="email" id="email" name="email" class="form-control" required>
                                                   <div class="label">Your e-mail<span class="required">*</span></div>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="form-group inputControl">
                                                   <input type="number" id="contactNumber" name="contactNumber" class="form-control" required>
                                                   <div class="label">Your phone number <span class="required">*</span></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group inputControl textarea-field">
                                             <textarea class="form-control" id="comment" name="comment" required></textarea>
                                             <div class="label">Your question<span class="required">*</span></div>
                                          </div>
                                          <br/>
                                          <div class="form-group form-check">
                                             <input type="checkbox" class="form-check-input" id="privacyPolicy" required>
                                             <label class="form-check-label" for="privacyPolicy">I have read and accept the <a href="#">Privacy Policy</a></label>
                                          </div>
                                          <div class="form-group form-check">
                                             <input type="checkbox" class="form-check-input" id="sendNDA">
                                             <label class="form-check-label" for="sendNDA">Send me NDA</label>
                                          </div>
                                          <!-- <div class="form-group form-check">
                                             <div id="captchafails" class="error"> </div>
                                             <p> 
                                             <img src="/wp-assets/captcha_code_file?rand=2118628126" id='captchaimg' alt="" ><br>
                                                  
                                             <label>Enter the code above here :</label>
                                             <br>
                                             <input id="call_letters_code" name="call_letters_code" type="text" style="height: 30px;" required="">
                                             <br>
                                             <small>Can't read the image? click <a href='javascript: refreshCaptcha();' class="regenerate">here</a> to refresh</small> 
                                             </p>
                                             </div> -->
                                          <div class="g-recaptcha" data-sitekey="6LdfV4saAAAAADqhInZsxTkETgqxlvTTK2tkIzzs"></div>
                                          <div class="btn-wrap">
                                             <input type="hidden" name="action" value="contactForm">
                                             <button class="contact">Submit Request</button>
                                          </div>
                                       </form>
                                       <div class="contact-adrees d-flex justify-content-between p-0 border-0 align-items-center">
                                          <div>
                                             <h3 class="adress-title">DOMESTIC OPERATIONS OF CDN SOLUTIONS GROUP</h3>
                                             <p>304,Princes' Business Skypark,<br>A.B. Road, Vijay Nagar, Indore, India</p>
                                             <p><a href="mailto:varshagarg@cdnsol.com">varshagarg@cdnsol.com</a></p>
                                          </div>
                                          <div class="domestic-contactus">
                                             <h3 class="title m-0">Suruche Tech (India) Pvt. Ltd</h3>
                                             <p><a href="mailto:contact@cdnsol.com">contact@suruchetech.com</a></p>
                                             <h3 class="title m-0">Suruche</h3>
                                             <p><a href="mailto:kdivyesh@suruchetech.com">kdivyesh@suruchetech.com</a></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="contact-adrees">
                                    <h2 class="cdr-title">
                                    Explore your ideas with us!</h3>
                                    <h3 class="title">CALL US:</h3>
                                    <ul class="phon-list">
                                       <li><a href="tel:+917314035927">+91-731-4035927</a></li>
                                       <li><a href="tel:+61408989495">+61-408-989-495</a></li>
                                       <li><a href="tel:+16026267419">+1(602)626-7419</a></li>
                                    </ul>
                                    <h3 class="title">EMAIL US:</h3>
                                    <p><a href="mailto:contact@cdnsol.com">contact@cdnsol.com</a></p>
                                    <h3 class="adress-title">ADDRESS</h3>
                                    <h3 class="title">INDIA</h3>
                                    <p>304,Princes' Business Skypark,<br/>A.B. Road, Indore, M.P.</p>
                                    <h3 class="title">USA</h3>
                                    <p>77 East Thomas Rd<br/>Suite 221 Phoenix, Arizona</p>
                                    <h3 class="title">MAURITIUS</h3>
                                    <p>P.O. Box 888, Port-Louis<br/>Ph: +230-231-0404</p>
                                    <ul class="social-icon">
                                       <li>
                                          <a href="https://twitter.com/cdnsolutions"><img width="100%" src="/wp-assets/images/twitter.svg" alt="twitter"></a>
                                       </li>
                                       <li>
                                          <a href="https://www.facebook.com/CDNSoftwareSolutions/"><img width="100%" src="/wp-assets/images/facebook.svg" alt="facebook"></a>
                                       </li>
                                       <li>
                                          <a href="https://www.linkedin.com/company/cdn-solutions-group/posts"><img width="100%" src="/wp-assets/images/linkedin.svg" alt="linkedin"></a>
                                       </li>
                                       <li>
                                          <a href="https://www.instagram.com/accounts/login/"><img width="100%" src="/wp-assets/images/instagram.svg" alt="skype"></a>
                                       </li>
                                       <li>
                                          <a href="https://www.youtube.com/user/cdnsoftwaresolutions"><img width="100%" src="/wp-assets/images/youtube.svg" alt="youtube"></a>
                                       </li>
                                       <li>
                                          <a href="Javascript:void(0);"><img width="100%" src="/wp-assets/images/skype.svg" alt="skype"></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </div>
      <script src="/wp-assets/js/magnific-popup.min.js"></script>
      <!-- /.wrapper -->
      <!-- common footer-->
      <!-- All jquery -->
      <script src="/wp-assets/js/jquery-3.5.1.slim.min.js"></script>
      <script src="/wp-assets/js/jquery.min.js"></script>
      <!--<script src="/wp-assets/assets/js/jquery.min.js"></script>-->
      <script src="/wp-assets/js/swiper.js"></script>
      <script src="/wp-assets/js/bootstrap.bundle.min.js"></script>
      <script src="/wp-assets/js/typed.min.js"></script>
      <script src="/wp-assets/js/typescript.js"></script>
      <script src="/wp-assets/js/magnific-popup.min.js"></script>
      <!-- Wow Animation JS -->
      <script src="/wp-assets/js/wow.min.js"></script>
      <script src="/wp-assets/js/custom.js"></script>
      <script src="/wp-assets/js/slider.js"></script>
      <!-- Button trigger modal -->
      <script>
         $(document).ready(function() {
           
             $('#letstalk-modal').click(function() {
                 $('.main-navbar').removeClass('main-navbar-active');
             });
         });
      </script>
      </div>
      <!-- modal-dialog -->
      <div id="myModal-pp" class="modal fade" role="dialog"  >
         <div class="modal-dialog">
            <div class="modal-content border-0 bg-transparent">
               <!-- <button type="button" class="close cookies-modal" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button> -->
               <div class="modal-body">
                  <p>We use cookies and other similar technologies (Cookies) to enhance your experience and to provide you with relevant content and advertisements. By using our website, you are agreeing to the use of Cookies. You can change your settings at any time.<a href="/wp-assets/privacy-policy.html"> Privacy-Policy</a>.  
                     <button class="btn btn-primary pt-1 pb-1 pl-4 pr-4 d-inline-block ml-3" data-dismiss="modal" aria-hidden="true" onclick="set_session()">Ok</button> 
                  </p>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      <script>
         $(document).ready(function(){
          $('#myModal-pp').modal('show').css({"padding-right": "0"});
            $(".modal-backdrop").css("display","none")
            $(".modal-open").css({"overflow": "auto", "padding-right": "0"});
            set_session();
         
            $('#myModal-pp').modal('show');
         });
         function set_session(){
             
            //  $.ajax({
            //       url: "set_session",
                  
            //  });
             
         }
      </script>
   </body>
</html>