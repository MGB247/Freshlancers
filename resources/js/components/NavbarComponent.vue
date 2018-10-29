<template>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark cust-nav">
  <a class="navbar-brand" href="/">
      <img v-if="brand.link" v-bind:src="brand.link" width="100" height="100" alt="">
      {{brand.name}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#about">About</a>
      <a class="nav-item nav-link" href="#services">Services</a>
      <a class="nav-item nav-link" href="#workforce">Workforce</a>
      <a class="nav-item nav-link" href="#recentwork">Our Work</a>
      <a class="nav-item nav-link" href="#contact">Contact</a>
    </div>
  </div>
</nav>
</template>

<script>
export default {
  name: "navbar",
  props: ["brand"],
  methods: {
    initializeListeners: function() {
      var links = document.getElementsByClassName("nav-item");
      for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", this.setActive);
      }

      document.addEventListener("scroll", this.setFilter);
      window.addEventListener("scroll", this.setActiveByBtn);
    },

    //Set Currently Active Link Color
    setActive: function(navItem) {
      var links = document.getElementsByClassName("nav-item");
      for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("active");
      }
      navItem.target.classList.add("active");
    },

    setActiveByBtn: function() {
      //If Scroll component is used to scroll
      var links = document.getElementsByClassName("nav-item");
      for (var i = 0; i < links.length; i++) {
        if (links[i].getAttribute("href") == window.location.hash) {
          for (var j = 0; j < links.length; j++) {
            links[j].classList.remove("active");
          }
          links[i].classList.add("active");
          break;
        }
      }
    },

    //Add filter to Navbar on Scroll
    setFilter: function() {
      var navbar = document.getElementsByClassName("navbar")[0];
      if (document.scrollingElement.scrollTop > 50) {
        navbar.classList.add("filter");
      } else {
        navbar.classList.remove("filter");
      }
    }
  },
  mounted() {
    this.initializeListeners();
  }
};
</script>

<style scoped>
.cust-nav {
  background-color: black;

  padding-top: unset;
  padding-bottom: unset;
  transition: 0.5s all;
}

.filter {
  filter: opacity(0.85);
}

.navbar-brand {
  font-size: 22px;
  font-weight: bolder;
}

.navbar-brand img {
  border-radius: 50%;
}

.nav-item {
  font-size: 16px;
  font-weight: bold;
}

.active {
  color: white !important;
}
</style>