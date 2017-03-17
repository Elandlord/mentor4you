<template>

<div>
    <div @click="displayErvaring()" class="col-lg-12 col-centered space-outside-down-md pointer min-width-lg max-width-lg" >

        <div v-if="mentor.type == 'youth'" class="bg-main text-color-light text-center text-light font-md space-inside-xs">JONGERE</div>


        <div v-if="mentor.type == 'mentor'" class="bg-secondary text-color-light text-center text-light font-md space-inside-xs">MENTOR</div>

        <div style="height: 150px;"  class="image">
            <img class="width: auto;" :src="mentor.thumbnail">
        </div>

        <div style="border-width: 4px; max-height: 150px; min-height:150px;" class="bg-accent border-top border-main">
            <p class='text-bold font-md space-inside-xs space-inside-sides-sm block'>{{ mentor.first_name }}</p>
            <p class="font-md text-color-dark block space-inside-sides-sm">&#8220;{{ mentor.last_name | substring }}&#8221;</p>
        </div>

        <a v-if="mentor.type == 'youth'" class='width-auto bg-main bg-main-hover-darken-xs transition-normal block text-center text-color-light font-sm space-inside-xs'>Lees meer</a>

        <a v-if="mentor.type == 'mentor'" class='width-auto bg-secondary bg-secondary-hover-darken-xs transition-normal block text-center text-color-light font-sm space-inside-xs'>Lees meer</a>

    </div>
</div>
</template>

<style type="text/css"></style>

<script type="text/javascript">
    export default {
        props: {
            mentor: null,
        },

        filters: {
            substring(str){
                if(str.length > 100){
                    return str.substring(0, 100);
                }

                return str;

            }
        },

        methods: {
            displayErvaring() {
                Event.fire('mentor.display', this.mentor);
            }
        }

    }
</script>