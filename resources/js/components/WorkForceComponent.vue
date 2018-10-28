<template>
<div class="contains" id="workforce">
  <div  v-bind:style="{height: bdHeight + 'px'}"  id="backdrop">

  </div>
<div id="content-wf">
    <h1>
        {{heading}}
    </h1>
        <div class="hexagonsHolder">
            <div v-for="n in 6" v-bind:id="'hex' + n" class="hexagon" :key="n">
            <div class="hexTop"></div>
            <div class="hexBottom"></div>
        </div>
        </div>
        <div class="activeHex">
            <div class="hexagonHolder">
            <div class="activeHexagon" v-bind:id="'hex' + activeHexID">
            <div class="activeHexTop"></div>
            <div class="activeHexBottom"></div>
            </div>
            </div>
            <div class="memberInfo animated">
            <h2>{{activeMember.name}}</h2>
            <p>{{activeMember.info}}</p>
            </div>
        </div>
    <scroll-component id="sc" linkto="#" down="1"></scroll-component>
</div>
</div>
</template>

<script>
import ScrollComponent from "./ScrollComponent.vue";
export default {
  data: function() {
    return {
      activeHexID: Math.ceil((Math.random() * 10) % 6),
      activeMember: [{}],
      bdHeight: 0,
      members: [
        {
          name: "Syed Hameez Rehman",
          info:
            "awdasdawawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdd"
        },
        {
          name: "Muhammad Ghayas Baig",
          info:
            "awdasdawawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdd"
        },
        {
          name: "Raafe Bin Asad",
          info:
            "awdasdawawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdd"
        },
        {
          name: "Abdullah Sherazi",
          info:
            "awdasdawawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdd"
        },
        {
          name: "Ehsan Shafique",
          info:
            "awdasdawawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdd"
        },
        {
          name: "Syed Asad Haider Rizvi",
          info:
            "awdasdawawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdd"
        }
      ]
    };
  },
  props: ["heading"],
  components: {
    ScrollComponent
  },
  methods: {
    initializeListeners: function() {
      var hexagons = document.getElementsByClassName("hexagon");
      for (var i = 0; i < hexagons.length; i++) {
        hexagons[i].addEventListener("click", this.setActive);
      }

      window.addEventListener("resize", this.resizeBD);
    },
    setActive: function(hexagon) {
      var memberInfo = document.getElementsByClassName("memberInfo")[0];

      //Start Fading Out
      memberInfo.classList.add("fadeOut");

      //Set Timeout for FadeOut
      setTimeout(
        function() {
          //Remove Fade Out
          memberInfo.classList.remove("fadeOut");

          //Start Fading In
          memberInfo.classList.add("fadeIn");

          //Change Data while fading In
          var clickedHexID = hexagon.target.getAttribute("id");
          this.activeHexID = clickedHexID[clickedHexID.length - 1];
          this.activeMember = this.members[this.activeHexID - 1];

          //Set Timeout for Fade In
          setTimeout(function() {
            //Remove Fade In
            memberInfo.classList.remove("fadeIn");
          }, 250);
        }.bind(this),
        250
      );
    },
    resizeBD: function() {
      //Set backdrop div size
      this.bdHeight = document.getElementById("content-wf").clientHeight + 200; //322 is anchor fix height + paddings/margins
    }
  },
  mounted() {
    this.initializeListeners();
    this.activeMember = this.members[this.activeHexID - 1];

    this.bdHeight = document.getElementById("content-wf").clientHeight + 200; //322 is anchor fix height + paddings/margins
  }
};
</script>


<style scoped>
#backdrop {
  position: absolute;
  background-image: url("/images/code.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  filter: brightness(0.4) blur(2px);
  width: 100%;
  z-index: -1;
}

#content-wf {
  z-index: 1;
  color: white;
}

h1 {
  text-align: center;
  font-size: 5vw;
}

h2 {
  text-align: center;
  font-size: 3vw;
}

p {
  word-break: break-all;
  padding: 30px;
  font-size: 2vw;
}

.hexagonsHolder,
.activeHex {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

.activeHex > div {
  width: 50%;
}

#hex1 {
  background-image: url("/images/p1.jpg");
}
#hex2 {
  background-image: url("/images/p2.jpg");
}
#hex3 {
  background-image: url("/images/p3.jpg");
}
#hex4 {
  background-image: url("/images/p4.jpg");
}
#hex5 {
  background-image: url("/images/p5.jpg");
}
#hex6 {
  background-image: url("/images/p6.jpg");
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

.activeHexagon {
  left: calc(50% - 175px);
  position: relative;
  width: 350px;
  height: 202.07px;
  margin: 101.04px 0;
  background-size: auto 404.1452px;
  background-position: center;
  transition: 0.5s all;
}

.activeHexTop,
.activeHexBottom {
  position: absolute;
  z-index: 1;
  width: 247.49px;
  height: 247.49px;
  overflow: hidden;
  -webkit-transform: scaleY(0.5774) rotate(-45deg);
  -ms-transform: scaleY(0.5774) rotate(-45deg);
  transform: scaleY(0.5774) rotate(-45deg);
  background: inherit;
  left: 51.26px;
}

/*counter transform the bg image on the caps*/
.activeHexTop:after,
.activeHexBottom:after {
  content: "";
  position: absolute;
  width: 350px;
  height: 202.07259421636903px;
  -webkit-transform: rotate(45deg) scaleY(1.7321) translateY(-101.0363px);
  -ms-transform: rotate(45deg) scaleY(1.7321) translateY(-101.0363px);
  transform: rotate(45deg) scaleY(1.7321) translateY(-101.0363px);
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  background: inherit;
}

.activeHexTop {
  top: -123.7437px;
}

.activeHexTop:after {
  background-position: center top;
}

.activeHexBottom {
  bottom: -123.7437px;
}

.activeHexBottom:after {
  background-position: center bottom;
}

.activeHexagon:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 0;
  width: 350px;
  height: 202.0726px;
  z-index: 2;
  background: inherit;
}

#sc {
  position: relative;
  bottom: -8vw; /* Yet to know why */
}

@media screen and (max-width: 800px) {
  .activeHex {
    margin: 30px 0 0 0;
  }
  .activeHex > div {
    width: 100%;
    padding: 20px 0 20px 0;
  }
}
</style>

