<template>
    <div id="about" class="contains" >
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
        <scroll-component id="sc" linkto="#services" down="1"></scroll-component>
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
}

.paragraph {
  padding: 30px;
  font-size: 2vw;
  font-style: italic;
  word-break: break-all;
}

.paragraph,
.image {
  width: 50%;
  text-align: center;
}

.image img {
  width: 80%;
  position: relative;
}

@media screen and (max-width: 800px) {
  .paragraph,
  .image {
    width: 100%;
  }
}
</style>


