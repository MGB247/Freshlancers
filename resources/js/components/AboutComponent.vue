<template>
    <div class="contains" id="about">
        <h1>
            {{heading}}
        </h1>
        <div class="content">
            <div class="paragraph">
                <p>awdasdawawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdd</p>
            </div>
            <div class="image">
                <img src="/images/abt.png" alt="About Us">
            </div>
        </div>
        <scroll-component linkto="#workforce" down="1"></scroll-component>
    </div>
</template>

<script>
import ScrollComponent from "./ScrollComponent.vue";
export default {
  name: "about",
  props: ["heading"],
  components: {
    ScrollComponent
  }
};
</script>

<style scoped>
h1 {
  text-align: center;
  font-size: 5vw;
}

.content {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  width: 100%;
  height: auto;
}

.paragraph {
  padding: 30px;
  font-size: 2vw;
  font-style: italic;
}

.paragraph,
.image {
  width: 50%;
  text-align: center;
  word-break: break-all;
}

.image img {
  width: 80%;
  height: 80%;
}

@media screen and (max-width: 800px) {
  .paragraph,
  .image {
    width: 100%;
  }
}
</style>


