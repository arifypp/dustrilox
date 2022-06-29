<?php

/**
* Template Name: Portfolio Page Template
 * @package rasalina
 */

get_header();


?>

   <main>


      <!-- portfolio-area start -->
      <section class="portfolio-area pt-110 pb-110">
         <div class="container">
             <div class="row">
                 <!-- START PORTFOLIO FILTER AREA -->
                 <div class="col-12">
                     <div class="text-center">
                         <div class="portfolio-filter mb-40">
                             <button class="active" data-filter="*">All Works</button>
                             <button data-filter=".cat1" class="">Industry </button>
                             <button data-filter=".cat2" class="">Manufacturing</button>
                             <button data-filter=".cat3" class="">Rennova tion </button>
                             <button data-filter=".cat4" class="">Materials Making</button>
                         </div>
                     </div>
                 </div>
                 <!-- END PORTFOLIO FILTER AREA -->
             </div>
             <div id="portfolio-grid" class="row grid">
               <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-1.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="#">That are related based on their primary business</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="#">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">That are related based on their primary business</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat1 cat3">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-2.jpg" alt="portfolio">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="#">An industry is a group of companies</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">An industry is a group of companies</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-3.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p> Industry, Manufacturing </p>
                           <h6>That while an automobile manufacturer</h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">That while an automobile manufacturer</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-4.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="portfolio-details.html">Have a financing division that contributes</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">Have a financing division that contributes</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat1 cat3">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-6.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="#">The firm's overall revenues, the company</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">The firm's overall revenues, the company</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat3 cat2">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-7.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="portfolio-details.html">Would be classified in the automaker industry </a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="#">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">Would be classified in the automaker industry </a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-8.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="portfolio-details.html">Content creation company specializes in designing</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">Content creation company specializes in designing</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat1 cat3">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-9.jpg" alt="portfolio">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="#">Producing content in all its forms, audio, video</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">Producing content in all its forms, audio, video</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-10.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="#">Distributes it through anymedium or channel. </a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">Distributes it through any medium or channel. </a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-11.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="portfolio-details.html">Creation companies know the basics of content</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">Creation companies know the basics of content</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat1 cat3">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-12.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="portfolio-details.html">Marketing & generate ideas that resonate</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">Marketing & generate ideas that resonate</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat3 cat2">
                  <div class="portfolio-item mb-30">
                     <div class="portfolio-wrapper">
                        <div class="portfolio-image w-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/protfolio-5.jpg" alt="">
                        </div>
                        <div class="portfolio-caption">
                           <p>Industry, Manufacturing</p>
                           <h6><a href="portfolio-details.html">Are four types of industry. These are primary</a></h6>
                        </div>
                        <div class="portfolio-caption-top">
                           <p><a href="portfolio-details.html">Industry, Manufacturing</a></p>
                           <h6><a href="portfolio-details.html">Are four types of industry. These are primary</a></h6>
                        </div>
                        <div class="portfolio-caption-bottom">
                           <a href="portfolio-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="more-pt-button text-center mt-10">
               <a href="portfolio.html" class="tp-btn">Load More <i class="fa-light fa-plus"></i></a>
            </div>
         </div>
     </section>
     <!-- portfolio-area end -->

   </main>

<?php
get_footer();
