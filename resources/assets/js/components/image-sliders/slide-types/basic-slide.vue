<template>
<div class="banner">
    <div class="padding">
        <slot name="content"  class="move"> </slot>
    </div>
    <slot class="slider-image" name="background"></slot>
    <div v-if="overlay" class="overlay"></div>
</div>
</template>

<style type="text/css">
    .padding {
        padding: 0px 40px;
    }

    .banner{
        position: relative;
        overflow: hidden;
        height: 440px;
    }

    .background{
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -10;
    }

    .overlay {
        position: absolute;
        background: rgba(0,0,0,0.25);
        top: 0;
        left: 0;
        width: 100%;
        height: 440px;
        z-index: -9;
    }

    slide .img{
        position: absolute;
        top: 0;
        left: 0;
        z-index: -10;
    }

</style>

<script>
    export default {
        props: {
            overlay: "",
        },
        data() {
            return {

            }
        },
        mounted() {

        }
    }
</script>
