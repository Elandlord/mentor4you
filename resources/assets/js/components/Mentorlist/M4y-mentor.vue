<template>
<transition name="fade">
<div  >
    <div  class="col-lg-3  reset-padding space-inside-sides-sm space-outside-sm relative ">
        <div style="cursor:pointer" class="image "  @click="toggleOverlay">
            <img class="height-auto" :src="getPath()" :alt="mentor.first_name">
        </div>
    </div>

    <div @click="toggleOverlay"  v-if="overlay" class="custom-modal">
        <span @click.stop="closeOverlay"  class="closeOverlay"> x </span>

    <div @click.stop class="col-lg-8  col-centered auto shadow-xs reset-padding space-inside-sides-sm space-outside-sm relative ">
    <!-- Overlay -->
        <div class="col-lg-12 wow fadeInWow">
            <div class="overlay-resultaten no-overflow bg-secondary">
                <div class="col-lg-12 space-inside-sides-lg space-outside-up-lg space-outside-down-sm">
                    <h2 class="text-color-light "> {{ mentor.first_name + ' ' + mentor.last_name}}  </h2>
                </div>
                <div class="col-lg-3 reset-padding space-inside-sides-sm  text-center">
                    <div class="image circle circle-lg bg-accent space-outside-md space-outside-left-md ">
                        <img class="height-auto" :src="getPath()" >
                    </div>
                </div>
                <div class="col-lg-9 space-outside-up-md space-inside-sides-lg">
                    <p class=" text-color-light font-sm space-outside-down-lg space-inside-right-md">
                        {{ mentor.description }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    </div>


</div>
</transition>
</template>

<style>

.closeOverlay{
    background: rgba(0,0,0,.5);
    color: white;
    border-radius:2000px;
    padding: 0px 10px;
    padding-bottom: 2px;
    cursor: pointer;
    display: inline-block;
    margin: 20px;
    float: right;
    z-index: 200;
    position: relative;
    font-weight: 300;
}

</style>

<script>
    export default {

        props: {
            mentor: "",
            photo: "",
        },

        data() {
            return {
                overlay: false,
            }
        },


        methods: {
            toggleOverlay() {

                this.overlay = !this.overlay;

            },

            closeOverlay() {
                this.overlay = false;
            },

            // -------- GETTERS AND SETTERS
            getPath() {
                if(this.mentor.photos[0]) {
                    return this.mentor.photos[0].path;
                }
            }

        },
        mounted() {
            document.addEventListener("keydown", (e) => {
                if (this.overlay && e.keyCode == 27) {
                    this.toggleOverlay();
                }
            });

        },
    }
</script>
