<template>
    <div data-aos="zoom-out" data-aos-duration="500" class="contains" id="slideshow" v-bind:style="{height: WHeight + 'px', width: WWidth + 'px'}">
        <img v-bind:src="activeSlide" alt="Image Not Available">
        <button id="closeBtn" v-on:click="close"> <i class="fas fa-times-circle"></i> </button>
        <button id="prevBtn" v-on:click="previousSlide"> <i class="fas fa-arrow-circle-left"></i> </button>
        <button id="nextBtn" v-on:click="nextSlide"> <i class="fas fa-arrow-circle-right"></i> </button>
    </div>
</template>

<script>
export default {
  name: "slideshow",
  data: function() {
    return {
      activeSlide: "",
      activeSlideNo: 0,
      WWidth: 0,
      WHeight: 0
    };
  },
  props: ["heading", "slides"],
  methods: {
    initialize: function() {
      window.addEventListener("resize", this.setSize);
    },
    setSize: function() {
      this.WWidth = window.innerWidth;
      this.WHeight = window.innerHeight;
    },
    close: function() {
      //Inform to parent that Slide Show is closed
      this.$emit("close");
    },
    previousSlide: function() {
      if (this.activeSlideNo) {
        this.activeSlide = this.slides[--this.activeSlideNo];
      }
    },
    nextSlide: function() {
      if (this.activeSlideNo != this.slides.length - 1) {
        this.activeSlide = this.slides[++this.activeSlideNo];
      }
    }
  },
  mounted() {
    this.initialize();
    this.activeSlide = this.slides[this.activeSlideNo];
    this.setSize();
  }
};
</script>

<style scoped>
#slideshow {
  top: 0%;
  left: 0%;
  position: fixed;
  font-size: 3vw;
  background-color: rgba(0, 0, 0, 0.75);
  z-index: 9999;
  text-align: center;
  color: white;
}

#slideshow img {
  position: relative;
  width: 75vw;
  height: 75vh;
  top: 15vh;
}

#closeBtn {
  position: absolute;
  right: 0;
  top: 0;
}

#prevBtn {
  position: absolute;
  left: 0;
  top: calc(50% - 1.5vw);
}

#nextBtn {
  position: absolute;
  right: 0;
  top: calc(50% - 1.5vw);
}

button {
  margin: 3vw;
  border: none;
  background: none;
  color: white;
  cursor: pointer;
  outline: none;
}
</style>


