<template>
<div class="row">
    <slot></slot>
    <div class="col-lg-12">
        <form :action="'/' + route"
              class="dropzone"
              id="my-awesome-dropzone">
              <input type="hidden" name="mapId" :value="map_id">
        </form>
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
            route: "",
            map_id: ""
        },
        data() {
            return {

            };
        },

        created() {
        },
        mounted() {
            Dropzone.options.myAwesomeDropzone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 500, // MB
                headers: { "X-CSRF-TOKEN": Laravel.csrfToken },
                accept: (file, done) => {
                    done();
                },
                success: (file, response) => {
                    console.log(response);
                },
            }
        },

        methods: {

        },

    }
</script>
