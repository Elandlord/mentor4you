<template>
    <div style="height: 450px;" class="owl-carousel no-overflow">
      <slot></slot>
    </div>
</template>

<script>

    export default {
        mounted() {
          $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
              loop: true,
              autoplay: true,
              items:1,
              smartSpeed:450,
              autoplayHoverPause: true,
            });
          });


        }
    }
</script>
