<template>
    <nav class="navbar navbar-expand-lg navbar-dark cust-nav">
  <a class="navbar-brand" href="/">
      <img v-bind:src="brand.link" width="90" height="90" alt="">
      {{brand.name}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#a">About</a>
      <a class="nav-item nav-link" href="#b">Services</a>
      <a class="nav-item nav-link" href="#c">Workforce</a>
      <a class="nav-item nav-link" href="#d">Contact</a>
    </div>
  </div>
</nav>
</template>

<script>
export default {
  name: "navbar",
  props: ["brand"]
};
</script>

<style scoped>
.cust-nav {
  background-color: black;
  filter: opacity(0.85);
}

.navbar-brand {
  font-size: 22px;
  font-weight: bolder;
}

.nav-item {
  font-size: 16px;
  font-weight: bold;
}

.active {
  color: white !important;
}
</style>


