<template>
    <a v-if="linkto" v-bind:href="linkto">
    <i v-if="down" class="fas fa-chevron-circle-down"></i>
    <i v-if="up" class="fas fa-chevron-circle-up"></i>
    </a>
</template>

<script>
export default {
  props: ["linkto", "up", "down"]
};
</script>


<style scoped>
a,
a:hover {
  color: unset;
}
i {
  position: relative;
  bottom: 4vw;
  left: calc(50% - 1.5vw);
  font-size: 3vw;
}
</style>


