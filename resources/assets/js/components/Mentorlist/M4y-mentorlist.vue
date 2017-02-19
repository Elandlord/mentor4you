<template>
<div>
    <div v-if="mentoren != null" v-for="mentor in mentoren" class="col-lg-3 col-md-4">
        <div class="row row-centered">
            <mentor :mentor="mentor" > </mentor>
        </div>
    </div>
    <mentor-popup> </mentor-popup>
</div>
</template>

<script>

    export default {

        props: {
            mentoren: "",
        },

        data() {
            return {

            }
        },
        created() {
            console.log(this.mentoren);
        },
    }
</script>
