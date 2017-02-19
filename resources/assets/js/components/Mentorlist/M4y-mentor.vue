<template>

<div>
    <div @click="displayErvaring()" class="col-lg-12 col-centered space-outside-down-md pointer min-width-lg max-width-lg" >

        <div class="bg-secondary text-color-light text-center text-light font-md space-inside-xs">{{ mentor.first_name }} {{ mentor.last_name }}</div>

        <div style="height: 150px;"  class="image">
            <img class="width: auto;" src="/images/resultaten3.jpeg">
        </div>

        <div style="border-width: 4px;" class="bg-accent border-top border-main">
            <p style="max-height: 150px; min-height:150px;" class=" no-overflow font-md text-color-dark space-inside-sm space-inside-sides-sm">{{ mentor.description }}</p>
        </div>

    </div>
</div>
</template>

<style type="text/css"></style>

<script type="text/javascript">
    export default {
        props: {
            mentor: null,
        },
        methods: {
            displayErvaring() {
                Event.fire('mentor.display', this.mentor);
            }
        }

    }
</script>