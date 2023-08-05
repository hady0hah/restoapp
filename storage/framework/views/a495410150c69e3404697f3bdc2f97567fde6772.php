  <!-- Preloader Starts -->
  <div class="preloader">
          <img src="assets\images\loader1.gif"   class="preloader-img">
      </div>
  <!-- Preloader End -->
<style>
/* Styles for the preloader */
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.preloader-img {
    max-width: 600px; /* Adjust the size of the preloader image as needed */
}

/* Hide the preloader when the content is loaded */
.content.loaded .preloader {
    display: none;
}

</style>
<?php /**PATH C:\xampp\htdocs\restoapp\resources\views/home/partials/preloader.blade.php ENDPATH**/ ?>