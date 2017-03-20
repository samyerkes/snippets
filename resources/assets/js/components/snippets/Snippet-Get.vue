<template>
  <div>
    <h1 v-for="snippet in snippets"><a :href="'/snippets/' + snippet.id">{{ snippet.title }}</a></h1>
  </div>
</template>

<script>
export default {
  props: ['token'],
  data() {
    return {
      snippets: '',
    }
  },
  mounted: function() {
    this.getSnippets();
  },
  methods: {
    getSnippets: function() {
      console.log('Getting snippets');
      axios.get('/api/v1/snippets?api_token=' + this.token)
        .then((response) => {
          this.snippets = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
      }
    }
  }
</script>