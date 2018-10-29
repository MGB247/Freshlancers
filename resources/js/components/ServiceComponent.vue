<template>
    <div class="contains" id="services">
        <h1 data-aos="fade-down">
            {{heading}}
        </h1>
        <div class="content">
            <div data-aos="flip-up" v-for="service in services" :key="service.id">
                <img v-bind:src="service.img" v-bind:alt="service.name">
                <p>{{service.info}}</p>
            </div>
        </div>
        <scroll-component id="sc" linkto="#workforce" down="1"></scroll-component>
    </div>
</template>

<script>
import ScrollComponent from "./ScrollComponent.vue";
export default {
  name: "service",
  props: ["heading"],
  data: function() {
    return {
      services: Array()
    };
  },
  components: {
    ScrollComponent
  },
  methods: {
    fillServices: function() {
      this.services.push({
        id: this.services.length,
        name: "Responsive Design",
        info: "Get You Know What!",
        img: "/images/resp.png"
      });
      this.services.push({
        id: this.services.length,
        name: "Wordpress Themed",
        info: "Get You Know What!",
        img: "/images/wp.png"
      });
      this.services.push({
        id: this.services.length,
        name: "Laravel Based Website",
        info: "Get You Know What!",
        img: "/images/lara.png"
      });
      this.services.push({
        id: this.services.length,
        name: "Games BOI!!",
        info: "Get You Know What!",
        img: "/images/games.png"
      });
    }
  },
  mounted() {
    //Fill Services Array

    this.fillServices();
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
  font-size: 1vw;
}

.content {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  align-items: center;
  width: 100%;
  margin: 100px auto;
}

.content > div {
  width: 30%;
  margin: 10px 1.66% 10px 1.66%;
  text-align: center;
}
</style>


