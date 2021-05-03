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
          console.log(element);
          if (!this.authors.includes(element.author)) {
            this.authors.push(element.author);
          }
        });
        // this.listAuthors();
      });
  },
  methods: {
    getFilteredAlbums: function () {
      axios
        .get(
          "http://localhost:8888/php-ajax-dischi/ajax-version/server.php?action=filter_authors&author=" +
            this.selected
        )
        .then((result) => {
          console.log(result.data);
          this.albums = result.data;
        });
    },
  },
});
