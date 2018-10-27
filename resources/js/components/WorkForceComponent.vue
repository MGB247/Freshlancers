<template>
<div class="contains" id="workforce">
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
            <div class="memberInfo">
            <p>awdasdawawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdawdasdawdd</p>
            </div>
        </div>
</div>
</template>

<script>
export default {
  data: function() {
    return {
      activeHexID: 1
    };
  },
  props: ["heading"],
  methods: {
    initializeListeners: function() {
      var hexagons = document.getElementsByClassName("hexagon");
      for (var i = 0; i < hexagons.length; i++) {
        hexagons[i].addEventListener("click", this.setActive);
      }
    },
    setActive: function(hexagon) {
      var clickedHexID = hexagon.target.getAttribute("id");
      this.activeHexID = clickedHexID[clickedHexID.length - 1];
    }
  },
  mounted() {
    this.initializeListeners();
  }
};
</script>


<style scoped>
h1 {
  text-align: center;
  font-size: 5vw;
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

#hex1,
#hex2,
#hex3,
#hex4,
#hex5,
#hex6 {
  background-image: url(http://csshexagon.com/img/meow.jpg);
}
.hexagon {
  position: relative;
  width: 150px;
  height: 86.6px;
  margin: 86.6px 20px;
  background-size: auto 173.2051px;
  background-position: center;
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

@media screen and (max-width: 800px) {
  .activeHex > div {
    width: 100%;
  }
}
</style>

