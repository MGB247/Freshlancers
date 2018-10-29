<template>
    <a v-if="linkto" v-bind:href="linkto">
    <i v-bind:style="{color: color}" v-if="down" class="fas fa-chevron-circle-down"></i>
    <i v-bind:style="{color: color}" v-if="up" class="fas fa-chevron-circle-up"></i>
    </a>
</template>

<script>
//Works well with Scroll behaviour smooth
export default {
  props: ["linkto", "up", "down", "color"]
};
</script>


<style scoped>
a,
a:hover {
  color: unset;
  text-decoration: none;
  width: 100%;
}
i {
  position: relative;
  bottom: 0%;
  left: calc(50% - 1.5vw);
  font-size: 3vw;
  margin-bottom: 3vw;
  margin-top: 3vw;
  color: black;
}
</style>


