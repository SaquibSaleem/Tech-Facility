<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Contact Us</title>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
      <?php include("includes/header.php"); ?>
      <section class="mainBanner mainBanner-contact m1-h">
         <div class="container">
            <div class="row wow fadeInUp">
               <div class="col-md-12 col-lg-6">
                  <div class="cont_uls">
                   
                     <ul class="product-slid">
                        <li>
                           <div class="banner_1 contact_us">
                              <h5>Grow Your Business</h5>
                              <h2>Kickstart Your Digital journey today.</h2>
                              <div class="para_gap">
                                 <p>“We are the name behind products that have collected over $15 billion in revenue,funding,and frequently..”</p>
                                 <div class="blog_proifle blog_proifle_cont">
                                    <div class="blog_pro_img">
                                       <img src="assets/images/Ellipse17.png" alt="">
                                    </div>
                                    <div class="blog_pro_cont">
                                       <h4>Leslie Alexander</h4>
                                       <p>Site Reliability Engineer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="banner_1 contact_us">
                              <h5>Grow Your Business</h5>
                              <h2>Kickstart Your Digital journey today.</h2>
                              <div class="para_gap">
                                 <p>“We are the name behind products that have collected over $15 billion in revenue,funding,and frequently..”</p>
                                 <div class="blog_proifle blog_proifle_cont">
                                    <div class="blog_pro_img">
                                       <img src="assets/images/blog_profile_img2.png" alt="">
                                    </div>
                                    <div class="blog_pro_cont">
                                       <h4>Cameron Williamson</h4>
                                       <p>Jan, 18 2022</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 col-lg-6">
                  <div class="contant_form">
                  <h4>Request proposal</h4>
                     <form action="send_email.php" method="POST">
                        <div class="row">
                           <div class="col-md-12 col-lg-6">
                              <input type="text" class="form-control2" name="name" id="" aria-describedby="helpId" placeholder="Name" required>
                           </div>
                           <div class="col-md-12 col-lg-6">
                              <input type="text" class="form-control2" name="email" id="" aria-describedby="helpId" placeholder="E-mail" required>
                           </div>
                           <div class="col-md-12 col-lg-12">
                              <input type="text" class="form-control2" name="phone" id="" aria-describedby="helpId" placeholder="Contact number" required>
                           </div>
                           <div class="col-md-12 col-lg-12">
                              <select id="country" name="country" class="form-control2"></select> 
                           </div>

                           <div class="col-md-12 col-lg-12">
                              <div class="form-group checkboss">
                                 <input type="checkbox" id="css">
                                 <label for="css">It’s a whatsapp number</label>
                              </div>
                           </div>

                           <div class="col-md-12 col-lg-12">
                              <textarea class="form-control2" name="message" id="" rows="8" placeholder="Your Message" required></textarea>
                           </div>
                           <div class="col-md-12 col-lg-12 text-left">
                              <div class="bucontact">
                                 <input type="submit" name="submit" id="" class="btn btn-a" value="send message">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="border_tail">
                  <img src="assets/images/banner/border_tail.png" alt="">
               </div>
            </div>
         </div>
      </section>

      <section class="contact-inner m1-h" style="background-image:url(assets/images/contacct_back.png); ">
         <div class="container">
            <div class="row wow fadeInUp">
               <div class="col-md-12 col-lg-6">
                  <div class="banner_1 serv contact_us">
                     <div class="head_par cont_heead">
                        <h5>Have a question?</h5>
                        <h2>Get in touch</h2>
                     </div>
                     <div class="cosnt">
                        <div class="pas">
                           <p><a href="#">For work inquiry</a></p>
                           <p><a href="#">sales@techfacility.com</a></p>
                           <p><a href="#">UK +44 768 799 7899</a></p>
                        </div>
                        <div class="pas">
                           <p><a href="#">For career inquiry</a></p>
                           <p><a href="#">career@techfacility.com</a></p>
                           <p><a href="#">UK +44 768 799 7899</a></p>
                        </div>
                     </div>
                  </div>
               <div class="col-md-12 col-lg-6"></div>
            </div>
         </div>
      </section>
 
      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>

<!-- toggle -->
<script>
    document.querySelectorAll('.btn-toggle').forEach(function(button) {
        button.addEventListener('click', function() {
            button.classList.toggle('active');
            const isPressed = button.getAttribute('aria-pressed') === 'true';
            button.setAttribute('aria-pressed', !isPressed);

            // Switch the visibility of the content
            const contentOne = document.getElementById('contentOne');
            const contentTwo = document.getElementById('contentTwo');
            if (!isPressed) {
                contentOne.style.display = 'none';
                contentTwo.style.display = 'block';
            } else {
                contentOne.style.display = 'block';
                contentTwo.style.display = 'none';
            }
        });
    });
</script>