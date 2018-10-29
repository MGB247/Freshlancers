<template>
    <div class="contains" id="recentwork">
        <h1>
            {{heading}}
        </h1>
        <div class="content">
            <div v-for="work in works" :key="work.id" v-bind:id="work.id" class="work">
                <div  v-bind:style="work.thumb" class="hexagon">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                </div>
                <p>{{work.name}}</p>
            </div>
        </div>
        <slide-show-component v-on:close="close" v-if="showWork" v-bind:heading="activeWork.name" v-bind:slides="activeWork.slides"></slide-show-component>
        <scroll-component linkto="#contact" down="1"></scroll-component>
    </div>
</template>

<script>
import ScrollComponent from "./ScrollComponent.vue";
import SlideShowComponent from "./SlideShowComponent.vue";
export default {
  name: "recentwork",
  props: ["heading"],
  data: function() {
    return {
      works: [],
      activeWork: {},
      showWork: 0
    };
  },
  components: {
    ScrollComponent,
    SlideShowComponent
  },
  methods: {
    initialize: function() {
      window.addEventListener("load", this.loader);
    },
    loader: function() {
      var works = document.getElementsByClassName("work");
      for (var i = 0; i < works.length; i++) {
        works[i].addEventListener("click", this.setActive);
      }
    },
    setActive: function(work) {
      var workI = work.target;
      if (work.target.getAttribute("class")) {
        if (
          work.target.getAttribute("class") == "hexTop" ||
          work.target.getAttribute("class") == "hexBottom"
        ) {
          workI = workI.parentNode.parentNode;
        } else if (work.target.getAttribute("class") == "hexagon") {
          workI = workI.parentNode;
        }
        this.activeWork = this.works[workI.getAttribute("id")];
        this.showWork = 1;
      }
    },
    fillWorks: function() {
      this.works.push({
        id: this.works.length,
        name: "MCDB",
        thumb: {
          backgroundImage: "url('/images/mcdb.png')"
        },
        slides: ["/images/mcdb.png", "/images/p5.jpg", "/images/p6.jpg"]
      });
      this.works.push({
        id: this.works.length,
        name: "Spice House",
        thumb: {
          backgroundImage: "url('/images/p1.jpg')"
        },
        slides: []
      });
      this.works.push({
        id: this.works.length,
        name: "Other",
        thumb: {
          backgroundImage: "url('/images/p3.jpg')"
        },
        slides: []
      });
    },
    close: function() {
      this.showWork = 0;
    }
  },
  mounted() {
    this.fillWorks();
    this.initialize();
  }
};
</script>

<style scoped>
.content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  padding: 100px 0;
}

.content > div > div {
  position: relative;
  left: calc(50% - 95px);
}

.content > div > p {
  text-align: center;
}

h1 {
  text-align: center;
  font-size: 5vw;
}

p {
  word-break: break-all;
  padding: 30px;
  font-size: 2vw;
}

.hexagon {
  position: relative;
  width: 150px;
  height: 86.6px;
  margin: 86.6px 20px;
  background-size: auto 173.2051px;
  background-position: center;
  cursor: pointer;
}

.hexTop,
.hexBottom {
  position: absolute;
  z-index: 1;
  width: 106.07px;
  height: 106.07px;
  overflow: hidden;
  -webkit-transform: scaleY(0.5774) rotate(-45deg);
  -ms-transform: scaleY(0.5774) rotate(-45deg);
  transform: scaleY(0.5774) rotate(-45deg);
  background: inherit;
  left: 21.97px;
}

/*counter transform the bg image on the caps*/
.hexTop:after,
.hexBottom:after {
  content: "";
  position: absolute;
  width: 150px;
  height: 86.60254037844388px;
  -webkit-transform: rotate(45deg) scaleY(1.7321) translateY(-43.3013px);
  -ms-transform: rotate(45deg) scaleY(1.7321) translateY(-43.3013px);
  transform: rotate(45deg) scaleY(1.7321) translateY(-43.3013px);
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  background: inherit;
}

.hexTop {
  top: -53.033px;
}

.hexTop:after {
  background-position: center top;
}

.hexBottom {
  bottom: -53.033px;
}

.hexBottom:after {
  background-position: center bottom;
}

.hexagon:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 0;
  width: 150px;
  height: 86.6025px;
  z-index: 2;
  background: inherit;
}
</style>


