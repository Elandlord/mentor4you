<template>
<div>
  <div v-if="display" class="mentor-overlay">
  <h1>{{ mentor.first_name  }}</h1>
  </div>
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
  background-color: rgba(0,0,0,0.5);
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
    }
  }

</script>