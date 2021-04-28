Vue.config.devtools = true;

var app = new Vue({
  el: "#app",
  data: {
    albums: [],
    selected: "",
  },
  mounted() {
    axios
      .get("http://localhost:8888/php-ajax-dischi/ajax-version/server.php")
      .then((result) => {
        console.log(result.data);
        console.log(result.data);
        this.albums = result.data;
        console.log(this.albums);
      });
  },
  methods: {
    choose(event) {
      console.log(event.target.value);
      console.log(this.selected);
    },
  },
});
