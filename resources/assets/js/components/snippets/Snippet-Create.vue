<template>
  <form @submit.prevent="submitForm">
      <label class="label" for="title">Title</label>
      <p class="control">
          <input class="input" id="title" name="title" type="text" placeholder="..." v-model="title">
      </p>
      
      <label class="label" for="body">Body</label>
      <p class="control">
        <textarea class="textarea" id="body" name="body" placeholder="..." v-model="body"></textarea>
      </p>

      <p class="control">
          <button class="button is-primary">Submit</button>
       </p>
  </form>
</template>

<script>
    export default {
      props: ['title', 'token', 'body'],
      data() {
        return {
          submit: false
        }
      },
      methods: {
        submitForm: function() {
          axios.post('/api/v1/snippets?api_token=' + this.token, {
              title: this.title,
              body: this.body,
            })
            .catch((error) => {
              console.log(error.response);
            });
          this.title = '';
          this.body = '';
          Event.$emit('alert', 'Snippet added!');
        }
      }
    }
</script>