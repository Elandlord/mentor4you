<template>
<div  class="row row-centered">
    <m4y-mentor  v-for="mentor in mentoren"
        :mentor="mentor"

    > </m4y-mentor>
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
        },
    }
</script>
