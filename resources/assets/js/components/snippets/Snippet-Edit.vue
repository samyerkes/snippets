<template>
  <form @submit.prevent="submitForm">
      <label class="label" for="title">Title</label>
      <p class="control">
          <input class="input" id="title" name="title" type="text" :placeholder="snippet.title" :value="snippet.title" v-model="snippet.title">
      </p>
      
      <label class="label" for="body">Body</label>
      <p class="control">
        <textarea class="textarea" id="body" name="body" :placeholder="snippet.body" v-model="snippet.body">{{ snippet.body }}</textarea>
      </p>

      <p class="control">
          <button class="button is-primary">Submit</button>
       </p>
  </form>
</template>

<script>
    export default {
      props: ['snippet', 'token'],
      data() {
        return {
          submit: false
        }
      },
      methods: {
        submitForm: function() {
          axios.put('/api/v1/snippets/' + this.snippet.id + '?api_token=' + this.token, {
              title: this.snippet.title,
              body: this.snippet.body,
            })
            .catch((error) => {
              console.log(error.response);
            });
          this.snippet.title = '';
          this.snippet.body = '';
          Event.$emit('alert', 'Snippet successfully edited!');
        }
      }
    }
</script>