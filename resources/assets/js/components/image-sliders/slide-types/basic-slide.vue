<template>
<div class="banner">
    <div class="padding-slider">
        <slot name="content"  > </slot>
    </div>
    <slot class="slider-image-sl" name="background"></slot>

</div>
</template>

<style type="text/css">
     .padding-sl {
        padding: 0px 40px;
    }

    .banner-sl{
        position: relative;
        overflow: hidden;
        height: 440px;
    }

     .background-sl{
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -10;
    }

     .overlay-sl {
        position: absolute;
        background: rgba(0,0,0,0.25);
        top: 0;
        left: 0;
        width: 100%;
        height: 440px;
        z-index: -9;
    }

    img{
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
