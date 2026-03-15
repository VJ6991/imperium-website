<div class="outter-layer-autoscroll margin-top-esteem">
  <div class="layout">
    <div class="scroll-bottom">
      <div class="scroll__wrapper">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-1.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-2.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-3.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-4.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-5.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-6.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-7.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-8.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-9.png" height="40" alt="">
        <!-- Duplicate items for seamless effect -->
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-1.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-2.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-3.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-4.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-5.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-6.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-7.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-8.png" height="40" alt="">
        <img class="scroll__item" src="assets/image/redesign-img/scroll/scroll-2-9.png" height="40" alt="">
      </div>
    </div>
  </div>
</div>

<style>
  .scroll-bottom {
    overflow: hidden;
    position: relative;
    width: 100%;
    /* display: grid; */
    justify-content: center;
    align-items: center;
    width: 90% !important;
    height: 71px;
    margin: 0px auto !important;
    background-color: white;
    pointer-events: none;
  }

  .scroll__wrapper {
    display: flex;
    height: 100%;
    pointer-events: none;
  }

  .scroll__item {
    flex-shrink: 0;
    object-fit: contain;
    margin-top: 16px; /* Ensure no gaps between images */
 /* Prevent shrinking of images */
      /* margin-right: 38px; Gap between images */
      /* width: 116px !important; Width of the image */
      height: 40px !important;
      pointer-events: none;
      margin-right: 24px;
  }
  .slick-track{
    height: 100%;
  }
</style>

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $(document).ready(function () {
    $('.scroll__wrapper').slick({
      slidesToShow: 9,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0, // Continuous scrolling
      speed: 5000, // Adjust for smoothness
      cssEase: 'linear', // For seamless effect
      infinite: true,
      arrows: false,
      dots: false,
      variableWidth: true, // Ensures flexibility for item widths
      draggable: false, // Disable dragging
      pauseOnHover: false, 
    });
  });
</script>
