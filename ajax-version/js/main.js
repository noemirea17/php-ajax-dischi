Vue.config.devtools = true;

var app = new Vue({
  el: "#app",
  data: {
    albums: [],
    authors: ["All"],
    selected: "",
  },
  mounted() {
    axios
      .get("http://localhost:8888/php-ajax-dischi/ajax-version/server.php")
      .then((result) => {
        console.log(result.data);
        this.albums = result.data;
        this.albums.forEach((element) => {
          if (!this.authors.includes(element.author)) {
            this.authors.push(element.author);
          }
        });
        console.log(this.authors);
      });
  },
  methods: {
    choose() {
      console.log(this.selected);
    },
  },
});
