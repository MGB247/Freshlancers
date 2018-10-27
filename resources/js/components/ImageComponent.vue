<template>
    <div class="image-holder contains" id="image-holder">
        <img v-bind:src="image.src" v-bind:alt="image.alt" v-bind:height="image.height" v-bind:width="image.width">
    </div>
</template>

<script>
export default {
  name: "imageHolder",
  props: ["image"]
};
</script>


