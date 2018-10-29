<template>
    <div class="contains" id="contact">
        <div class="content">
            <h1 data-aos="fade-up">
            {{heading}}
            </h1>
            <div class="contacts">
                <div data-aos="fade-down" v-for="contact in contacts" :key="contact.id">
                    <i v-bind:class="contact.icon" v-bind:style="{color: contact.color}"></i>
                    <a v-for="link in contact.links" :key="link.id" v-bind:href="link.href">{{link.info}}</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: "contact",
  props: ["heading"],
  data: function() {
    return {
      contacts: []
    };
  },
  methods: {
    fillContacts: function() {
      //Font Awesome Classes used as icons
      this.contacts.push({
        icon: "fab fa-whatsapp",
        color: "#25D366",
        links: [
          //Array of link object
          {
            id: this.length,
            info: "03042802489",
            href: "https://wa.me/923042802489"
          },
          {
            id: this.length,
            info: "03042802489",
            href: "https://wa.me/923042802489"
          },
          {
            id: this.length,
            info: "03042802489",
            href: "https://wa.me/923042802489"
          }
        ]
      });
      this.contacts.push({
        icon: "fab fa-facebook",
        color: "#3b5998",
        links: [
          //Array of link object
          {
            id: this.length,
            info: "My FB Page",
            href: "#"
          },
          {
            id: this.length,
            info: "Freshlancers",
            href: "#"
          }
        ]
      });
      this.contacts.push({
        icon: "fab fa-google",
        color: "#DD4B39",
        links: [
          //Array of link object
          {
            id: this.length,
            info: "Ghayas Baig",
            href: "#"
          },
          {
            id: this.length,
            info: "Freshlancers",
            href: "#"
          },
          {
            id: this.length,
            info: "Koi Aur",
            href: "#"
          }
        ]
      });
    }
  },
  mounted() {
    this.fillContacts();
  }
};
</script>

<style scoped>
* {
  color: white;
}

.content {
  background-color: black;
}

h1 {
  text-align: center;
  font-size: 5vw;
}

a {
  word-break: break-all;
  padding: 30px;
  font-size: 1.5vw;
  display: block;
}

a:hover {
  color: unset;
}

i {
  font-size: 3vw;
}

.contacts {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 100px;
}

.contacts > div {
  text-align: center;
}
</style>


