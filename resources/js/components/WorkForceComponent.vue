<template>
  <div id="workforce" class="contains">
    <div id="workforceInner">
      <div data-aos="fade-up" v-bind:style="{height: bdHeight + 'px'}" id="backdrop"></div>
      <div class="content">
        <h1 data-aos="fade-up">{{heading}}</h1>
        <div class="hexagonsHolder">
          <div
            data-aos="flip-down"
            v-for="member in members"
            v-bind:id="'h' + member.id"
            class="hexagon"
            :key="member.id"
          >
            <div class="hexTop"></div>
            <div class="hexBottom"></div>
          </div>
        </div>
        <div data-aos="fade-right" class="activeHex">
          <div class="hexagonHolder">
            <div class="activeHexagon" v-bind:id="'h' + activeHexID">
              <div class="activeHexTop"></div>
              <div class="activeHexBottom"></div>
            </div>
          </div>
          <div data-aos="fade-down-left" class="memberInfo animated">
            <h2>{{activeMember.name}}</h2>
            <p>{{activeMember.info}}</p>
          </div>
        </div>
      </div>
    </div>
    <scroll-component linkto="#recentwork" down="1"></scroll-component>
  </div>
</template>

<script>
import ScrollComponent from "./ScrollComponent.vue";
export default {
  data: function() {
    return {
      activeHexID: 0,
      activeMember: {},
      bdHeight: 0,
      members: []
    };
  },
  props: ["heading"],
  components: {
    ScrollComponent
  },
  methods: {
    initialize: function() {
      window.addEventListener("resize", this.resizeBD);

      //Things to be done after loading the doc (like event assigning)
      window.addEventListener("load", this.loader);
    },
    setActive: function(hexagon) {
      var hex = hexagon.target;

      //Set hexagon if childs are clicked
      if (
        hexagon.target.getAttribute("class") == "hexTop" ||
        hexagon.target.getAttribute("class") == "hexBottom"
      ) {
        hex = hexagon.target.parentNode;
      }

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
          var clickedHexID = hex.getAttribute("id");
          clickedHexID = clickedHexID.substring(1, clickedHexID.length);
          console.log(clickedHexID);
          this.activeHexID = clickedHexID;
          this.activeMember = this.members[this.activeHexID];

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
      this.bdHeight = document.getElementById("workforceInner").clientHeight;
    },
    loader: function() {
      //Assign events to hex's
      var hexagons = document.getElementsByClassName("hexagon");
      for (var i = 0; i < this.members.length; i++) {
        hexagons[i].addEventListener("click", this.setActive);
      }

      //Set backdrop div size
      this.bdHeight = document.getElementById("workforceInner").clientHeight;
    },
    fillMembers: function() {
      this.members.push({
        id: this.members.length,
        name: "Syed Hameez Rehman",
        info:
          "Aflatoon. You just can't win an argument with this guy. He'll kill you with his never ending unjustified solely dependant proofs and theories that are waaay better then the consensus of even a billion people!"
      });
      this.members.push({
        id: this.members.length,
        name: "Muhammad Ghayas Baig",
        info: "Rainbow Six Siege khareedlo..... Pleeaaassseee :)"
      });
      this.members.push({
        id: this.members.length,
        name: "Raafe Bin Asad",
        info:
          "Code: Phantom. This former Fortnite player was boasted for his abilities to scout with his bare eyes playing the game at 30 fps on the minimum settings! You cant't reach his level of sophostication!"
      });
      this.members.push({
        id: this.members.length,
        name: "Abdullah Sherazi",
        info:
          "Top drama, Pathan lover, seeking his 4.3 GPA he can even reach 18 for that!"
      });
      this.members.push({
        id: this.members.length,
        name: "Ehsan Shafique",
        info: "Boiiii what u lookin at ? LOL"
      });
      this.members.push({
        id: this.members.length,
        name: "Syed Asad Haider Rizvi",
        info:
          "Time traveler, dimension-independant, gravity denier; This agent can tell you where you stand in the future and can decide you to put there!"
      });
    }
  },
  mounted() {
    //Fill members Array
    //Array must be filled first to allow assignment of events and other related data

    this.fillMembers();
    this.activeHexID = Math.floor((Math.random() * 10) % this.members.length);
    this.activeMember = this.members[this.activeHexID];
    this.initialize();
  }
};
</script>


<style scoped>
#backdrop {
  position: absolute;
  background-image: url("/images/code.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  filter: brightness(0.4);
  width: 100%;
  z-index: -1;
}

.content {
  z-index: 1;
  color: white;
}

.memberInfo {
  word-wrap: break-word;
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

#h0 {
  background-image: url("/images/p1.jpg");
}
#h1 {
  background-image: url("/images/p2.jpg");
}
#h2 {
  background-image: url("/images/p3.jpg");
}
#h3 {
  background-image: url("/images/p4.jpg");
}
#h4 {
  background-image: url("/images/p5.jpg");
}
#h5 {
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

@media screen and (max-width: 800px) {
  .activeHex {
    margin: 30px 0 0 0;
  }
  .activeHex > div {
    width: 100%;
    padding: 20px 0 20px 0;
  }
  h1 {
    font-size: 8vw;
  }

  h2 {
    font-size: 6vw;
  }

  p {
    font-size: 4vw;
  }
}
</style>

