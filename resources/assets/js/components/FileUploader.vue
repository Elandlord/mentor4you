<template>
<div class="container">
    <div class="row">
        <slot></slot>
        <div class="col-lg-12">
            <form :action="'/' + route"
                  class="dropzone"
                  id="my-awesome-dropzone">
                  <input type="hidden" name="model_id" :value="model_id">
                  <input type="hidden" name="model_type" :value="type">
            </form>
        </div>
    </div>

</div>
</template>

<style type="text/css">
    img {
        max-width: 100%;
    }
</style>

<script>
    export default {
        props: {

        },
        data() {

        },

        created() {
        },
        mounted() {

        },

        methods: {

        },

    }
</script>
