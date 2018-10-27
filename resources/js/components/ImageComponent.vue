<template>
    <div class="image-holder">
        <img v-bind:src="image.src" v-bind:alt="image.alt" v-bind:height="image.height" v-bind:width="image.width">
    </div>
</template>

<script>
export default {
  name: "image",
  props: ["image"]
};
</script>

<style>
.image-holder {
  width: 100%;
  max-height: calc(100% - 115px);
  height: auto;
}
</style>


