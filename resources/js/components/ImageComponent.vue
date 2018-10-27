<template>
    <div class="image-holder contains" id="image-holder">
        <img v-bind:src="image.src" v-bind:alt="image.alt" v-bind:height="image.height" v-bind:width="image.width">
        <scroll-component linkto="#about" down="1"></scroll-component>
    </div>
</template>

<script>
import ScrollComponent from "./ScrollComponent.vue";
export default {
  name: "imageHolder",
  props: ["image"],
  components: {
    ScrollComponent
  }
};
</script>


