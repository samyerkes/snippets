<template>
  <form @submit.prevent="submitForm">
      <label class="label" for="title">Title</label>
      <p class="control">
          <input class="input" id="title" name="title" type="text" placeholder="..." v-model="snippet.title">
      </p>
      
      <label class="label" for="body">Body</label>
      <p class="control">
        <textarea class="textarea" id="body" name="body" placeholder="..." v-model="snippet.body"></textarea>
      </p>

      <p class="control">
          <button class="button is-primary">Submit</button>
       </p>
  </form>
</template>

<script>
    export default {
      props: ['clipboard'],
      data() {
        return {
          snippet: {
            title: '',
            body: '',
          },
          submit: false
        }
      },
      methods: {
        submitForm: function() {
          axios.post('/api/v1/snippets', {
              title: this.snippet.title,
              body: this.snippet.body,
            })
            .catch((error) => {
              console.log(error.response);
            });
          this.snippet = {};
          Event.$emit('alert', 'Snippet added!');
        }
      }
    }
</script>