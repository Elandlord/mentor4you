<template>

<div>
  <transition name="slide-fade">
  <div v-if="display" @click="closeOverlay()" class="
    mentor-overlay
    space-inside-sides-lg
    space-inside-lg
  ">
    <div class="col-lg-12">
      <h1 class="text-color-light">{{ mentor.first_name  }} {{ mentor.last_name }}</h1>
    </div>

    <div class="col-lg-7 col-md-7">
      <p class="
        font-md
        text-color-light
        space-inside-md

      "> {{ mentor.description }} </p>
      <button class="
        space-inside-sides-sm
        space-inside-xs
        inline-block
        text-color-light
        bg-main
        border-none
        text-center
        font-sm
        space-outside-down-lg
      ">
        Ga terug
      </button>
    </div>
    <div class="col-lg-5 col-md-5 space-inside-md">
      <div class="image">
        <img class="width-auto" :src="mentor.thumbnail">
      </div>
    </div>


  </div>
</transition>
</div>
</template>

<style type="text/css">

.mentor-overlay {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 10;
  background-color: rgba(0,0,0,0.8);
  overflow-x: scroll;
}

.slide-fade-enter-active {
  transition: all .3s ease;
}

.slide-fade-leave-active {
  transition: all .4s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}

.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active for <2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}

</style>

<script type="text/javascript">

  export default {
    data() {
      return {
        mentor: null,
        display: false,
      }
    },
    mounted() {
      Event.listen('mentor.display', (mentor) => {
        this.display = true;
        this.mentor = mentor;
      });


    },
    methods: {
      closeOverlay() {
        this.display = false;
      }
    }
  }

</script>