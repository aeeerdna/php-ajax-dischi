console.log("JS OK!!!");

const app = new Vue({
  el: "#app",
  data() {
    return {
      songs: [],
      research_text: "",
    };
  },
  mounted() {
    this.getSongs("");
  },
  methods: {
    getSongs(genre) {
      axios
        .get("../php-ajax-dischi/api/songs.php?research_text=" + genre)
        .then((response) => {
          if (response.status === 200) {
            this.songs = response.data;
          }
        })
        .catch((e) => console.log(e));
    },
  },
});
