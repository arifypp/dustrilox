<?php

/**
* Template Name: Team Details
 * @package rasalina
 */

get_header();


?>
   <main>


      <!-- team__detrails-area start -->
      <section class="team__detrails-area">
         <div class="container">
            <div class="td-border pt-120 pb-60">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="team__details-image mb-40">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-d.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="team__main-info mb-40">
                        <span class="team__details-d-degination mb-25">Founder</span>
                        <h4 class="team__dtitle mb-15">Hexol D. Drownix</h4>
                        <p class="mb-30 team__details-text">The spectacular Harbour Central is a brand new development in London’s The Docklands, comprising a total of 642 private apartments divided across five residential buildings, along with a leisure complex.</p>
                        <div class="team__details-contact-info mb-40">
                           <ul>
                              <li>
                                 <div class="team__details-contact-wrapper">
                                    <div class="team__details-contact-icon mr-20">
                                       <a href="#"><i class="fa-solid fa-phone-flip"></i></a>
                                    </div>
                                    <div class="team__details-contact-text">
                                          <span>Address</span>
                                          <h6><a href="tel:+8886201">+(908) 786 789 78 6</a></h6>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="team__details-contact-wrapper">
                                    <div class="team__details-contact-icon mr-20">
                                       <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                    <div class="team__details-contact-text">
                                          <span>Email Address</span>
                                          <h6><a href="mailto:">info@webexample.com</a></h6>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="team__details-contact-wrapper">
                                    <div class="team__details-contact-icon mr-20">
                                       <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    </div>
                                    <div class="team__details-contact-text">
                                          <span>Office Location</span>
                                          <h6><a href="https://goo.gl/maps/LgdWtT5Ug7zgr5dK7" target="blank">14/A, Kilix Home Tower, NYC</a></h6>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="team__details-button">
                           <a href="contact.html" class="tp-touch-btn"> Get In Touch <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="td-border pt-100 pb-60">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="member-qualification pr-50 mb-40">
                        <h6 class="qulification-title">Personal Skills</h6>
                        <div class="member-skill mt-40">
                           <div class="skill-wrapper">
                                 <div class="skill-title">
                                    <h5 class="skill-category">Product Design</h5>
                                    <span>70%</span>
                                 </div>
                                 <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                           </div>
                           <div class="skill-wrapper">
                                 <div class="skill-title">
                                    <h5 class="skill-category">Design & Development Support</h5>
                                    <span>52%</span>
                                 </div>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-2 wow slideInLeft" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                           </div>
                           <div class="skill-wrapper">
                                 <div class="skill-title">
                                    <h5 class="skill-category">User Experience & Research</h5>
                                    <span>82%</span>
                                 </div>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-3 wow slideInLeft" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="team__main-info mb-40 w-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-d2.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="td-border-t pt-100 pb-80">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="team__details-image mb-40">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-d3.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="team__main-info mb-40">
                        <h6 class="qulification-title">Great Archivements</h6>
                        <p class="mb-30 team__details-text-2 mb-45">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ni ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh derit in voluptate velit esse cillum</p>
                        <div class="certificate">
                           <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/cetificate-1.jpg" alt="certificate"></a>
                           <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/cetificate-2.jpg" alt="certificate"></a>
                           <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/cetificate-3.jpg" alt="certificate"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- team__detrails-area end -->

   </main>
<?php
get_footer();
