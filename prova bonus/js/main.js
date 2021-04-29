Vue.config.devtools = true;

var app = new Vue({
  el: "#app",
  data: {
    albums: [],
    authors: ["All"],
  },
  mounted() {
    axios
      .get("http://localhost:8888/php-ajax-dischi/ajax-version/server.php")
      .then((result) => {
        console.log(result.data);
        this.albums = result.data;
        // this.albums.forEach((element) => {
        //   if (!this.authors.includes(element.author)) {
        //     this.authors.push(element.author);
        //   }
        // });
        this.listAuthors();
      });
  },
  methods: {
    listAuthors() {
      axios
        .get(
          "http://localhost:8888/php-ajax-dischi/ajax-version/server.php?listAuthor=true"
        )
        .then((result) => {
          console.log(result.data);
          this.authors = result.data;
        });
    },
  },
});
