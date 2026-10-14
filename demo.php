<?php
    require ('include/header.php');
?>

<style>
.hero-slider .position-absolute{
    z-index:1;
    left:0;
    right:0;
    top:50%;
    transform: translateY(-50%);
}

</style>
<section class="hero-section position-relative w-100">

  <div class="d-block owl-carousel owl-theme hero-slider">

    <!-- Slide 1 -->
    <div class="item w-100 h-100">
        <img src="assets/images/banner/slider-3.webp" alt="Symbiosis distance education courses" title="#slider-caption-1" width="100%" height="auto" fetchpriority="high" />
      <div class="container position-absolute ">
          <div class="slider-text text-center">
            <a href="https://symhealth.siu.edu.in/index" target="_blank">
            <h2 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
              An Online Degree as Credible as On-Campus
            </h2>
            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s" style="font-size:26px !important">
                 - Powered by SSODL.
            </p>
            </a>
          </div>
      </div>
    </div>

    <div class="item w-100 h-100">
    <img class="d-block" src="assets/images/banner/slider-1.webp" alt="Symbiosis distance education courses" title="#slider-caption-1" width="100%" height="auto" fetchpriority="high" />
      <div class="container position-absolute">
          <div class="slider-text text-center ">
            <h2 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                Online Diploma & Certificate Programme
            </h2>
            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s" style="font-size:26px !important">
                by Symbiosis School for Online and Digital Learning (SSODL)
            </p>
                <a href="https://siu.ishinfo.com/SSODLY2025/Register/" target="_blank"
                class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Apply Now</a>
            <a href="#reg-form" class="default-btn wow cssanimation fadeInBottom"
                data-wow-delay="0.8s">Register</a>
            
          </div>
      </div>
    </div>
    
    <div class="item w-100 h-100">
    <img class="d-block" src="assets/images/banner/slider-3.webp" alt="Symbiosis distance education courses" title="#slider-caption-1" width="100%" height="auto" fetchpriority="high" />
      <div class="container position-absolute ">
          <div class="slider-text text-center">
            <h2 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                Advance Your Career with Online Degrees (UG/PG)
            </h2>
            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s" style="font-size:26px !important">
                from Symbiosis International (Deemed University)
            </p>
            <a href="https://enrollment.ssodl.edu.in/online/student_register" target="_blank"
                class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Apply Now</a>
            <a href="#reg-form" class="default-btn wow cssanimation fadeInBottom"
                data-wow-delay="0.8s">Register</a>
          </div>
      </div>
    </div>

  </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>

<script>
    $(document).ready(function(){
  $('.hero-slider').owlCarousel({
      items:1,
      loop:true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      nav:true,
      dots:false,
      navText : ["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      smartSpeed:1000
  });
});

</script>

<?php
    require ('include/footer.php');
?>