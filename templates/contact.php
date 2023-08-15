<?php /* Template Name: Contact Us */ ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.cdnsol.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 06:23:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSS -->
    <!-- Custom CSS -->
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/wp-assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo home_url(); ?>/wp-assets/css/style.css" />
    <title>Contact Us</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-10073031-3"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-10073031-3');
</script>
<!--== chatbox start ==-->
      <!--Start of Tawk.to Script-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
      <script src='https://www.google.com/recaptcha/api.js' async defer></script>
      <script src="https://unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>
      <script type="text/javascript"> 

    $(document).ready(function() {
    var testing = false;
    $('#send_contact_form_contact').on('submit', function() {

        if(grecaptcha.getResponse() == "") {
            swal("You can't proceed. Please verify captcha first!");
            return false;
        }else {
            //var call_letters_code = $('input[name="call_letters_code"]').val();
            var name = $('input[name="name"]').val();
            var contactNumber = $('input[name="contactNumber"]').val();
			var country = $('input[name="country"]').val();
            var company_name = $('input[name="company_name"]').val();
            var email = $('input[name="email"]').val();
            var comment = $('textarea#comment').val();
			
			var check_url = comment.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
            
            if(check_url != null){
               swal('Please remove URL from your question');
               return false;
            }
			
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
						'country' : country,
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
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6048534e385de407571e7604/1f0d8ar0s';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
         })();
         </script>
      <!--End of Tawk.to Script-->
<!--== chatbox end ==-->
</head>

<body class="animated fadeIn">
    <div class="wrapper"> 
        <main class="main" id="main">
            <section class="contact-page">
                <div class="contact-page-wrap">
                    <!-- <div class="contact-close"><a href="/">x</a></div> -->
                    <div class="container">
                        <div class="row justify-content-between align-items-center pt-3 pb-5 position-relative">
                            <div>
                                <a class="contact-logo" href="index"><img src="<?php echo home_url(); ?>/wp-assets/images/cdn_logo.svg" alt="CDN Solutions Group" /></a>
                            </div>
                            <div>
                                <div class="contact-close"><a href="index"><img src="<?php echo home_url(); ?>/wp-assets/images/close_icon.svg" alt="Close" /></a></div>
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
                                        <form class="theme-form" id="send_contact_form_contact"  method="POST">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group inputControl">
                                                        <input type="text" id="name" name="name" class="form-control" required>
                                                        <div class="label">First name<span class="required">*</span></div>
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
                                                <div class="col-md-6">
                                                    <div class="form-group inputControl">
                                                        <input type="number" id="contactNumber" name="contactNumber" class="form-control" required>
                                                        <div class="label">Your phone number <span class="required">*</span></div>
                                                    </div>
                                                </div>
												<div class="col-md-6">

                                                    <div class="form-group inputControl">

                                                        <input type="text" id="country" name="country" class="form-control" required>

                                                        <div class="label">Country Name<span class="required">*</span></div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group inputControl textarea-field">
                                                <textarea class="form-control" id="comment" name="comment" required maxlength=""></textarea>
                                                <div class="label">Your question<span class="required">*</span></div>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label class="form-check-label ques-content d-block" for="privacyPolicy">Can we connect you back via watspp, skype or call</label>
                                                <div class="d-flex mt-2">
                                                    <div class="radio-con">
                                                        <input type="radio" id="" name="cont-que">
                                                        <label for="" class="form-check-label mx-2">Yes</label>
                                                    </div>
                                                    <div class="radio-con">
                                                        <input type="radio" id="" name="cont-que">
                                                        <label for="" class="form-check-label ml-2">No</label>
                                                    </div>
                                                </div>
                                            </div>
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
                                               <img src="captcha_code_file?rand=2118628126" id='captchaimg' alt="" ><br>
                                                    
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
                                                <h3 class="adress-title">DOMESTIC OPERATIONS OF Technorizen Software SOLUTIONS GROUP</h3>
                                                <p>xxx,xxxxx' xxxx xxxxx,<br>xx xxxxx, xxxxxxx, Indore, India</p>
                                            </div>
                                            <div class="domestic-contactus">
                                                <h3 class="title m-0">Technorizen Software Solutions Pvt. Ltd</h3> 
                                                <p><a href="mailto:contact@technorizen.com">contact@technorizen.com</a></p>
                                                <h3 class="title m-0">Suruche</h3>
                                                <p><a href="mailto:technorizen@technorizen.com">technorizen@technorizen.com</a></p>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-adrees">
                                    <h2 class="cdr-title">Explore your ideas with us!</h3>
                                        <h3 class="title">CALL US:</h3>
                                        <ul class="phon-list">
                                            <li><a href="tel:+910000000000">+91-0000000000</a></li>
                                            <li><a href="tel:+610000000000">+61-000-000-000</a></li>
                                            <li><a href="tel:+1-000-000-0000">+1-000-000-0000</a></li>
                                        </ul>
                                        <h3 class="title">EMAIL US:</h3>
                                        <p><a href="mailto:contact@technorizen.com">contact@technorizen.com</a></p>
                                        <h3 class="adress-title">ADDRESS</h3>
                                        <h3 class="title">INDIA</h3>
                                        <p>xxx,xxxxxx xxxxx,<br/>xx xxx, Indore, M.P.</p>
                                        <h3 class="title">USA</h3>
                                        <p>77 xxx xxxx Rd<br/>xxxxx 221 xxxxxx, xxxxx</p>
                                        <h3 class="title">xxxxx</h3>
                                        <p>xx Box xxx, xxx-xxxx<br/>Ph: +000-000-0000</p>
                                        <ul class="social-icon">
                                        <li>
                                                 <a href="https://twitter.com/cdnsolutions"><img width="100%" src="<?php echo home_url(); ?>/wp-assets/images/twitter.svg" alt="twitter"></a>
                                            </li>
                                            <li>
                                                 <a href="https://www.facebook.com/CDNSoftwareSolutions/"><img width="100%" src="<?php echo home_url(); ?>/wp-assets/images/facebook.svg" alt="facebook"></a>
                                            </li>
                                          
                                            <li>
                                                <a href="https://www.linkedin.com/company/cdn-solutions-group/posts"><img width="100%" src="<?php echo home_url(); ?>/wp-assets/images/linkedin.svg" alt="linkedin"></a>
                                            </li>
                                            <li>
                                                 <a href="https://www.instagram.com/accounts/login/"><img width="100%" src="<?php echo home_url(); ?>/wp-assets/images/instagram.svg" alt="skype"></a>
                                            </li>
                                            <li>
                                                 <a href="https://www.youtube.com/user/cdnsoftwaresolutions"><img width="100%" src="<?php echo home_url(); ?>/wp-assets/images/youtube.svg" alt="youtube"></a>
                                            </li>
                                            <li>
                                                 <a href="skype:-skype-name-?chat""><img width="100%" src="<?php echo home_url(); ?>/wp-assets/images/skype.svg" alt="skype"></a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.6839343083825!2d75.871596!3d22.702807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcf129c55555%3A0xf972ad5c5b881813!2sTechnorizen%20Software%20Solution%20%7C%20Software%20Development%20Company%20%7C%20Custom%20Blockchain%20%7C%20NFT%20%7C%20DEFI%20%7C%20Cryptocurrency%20%7C%20Mobile%20Apps!5e0!3m2!1sen!2sin!4v1680332546260!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </section>
        </main>
    </div> <!-- /.wrapper -->

<?php

   get_footer();

?>