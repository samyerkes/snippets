<template>
  <div class="columns">
    <div class="column notification">
      <label for="token">API Token</label>
      <p class="control">
        <input type="text" name="token" id="token" :value="token" class="input">  
      </p>
      <a class="button is-warning" @click.prevent="regenerateToken">Regenerate token</a>
      <copy class="is-pulled-right" :clipboard="token"></copy>
    </div>
  </div>
</template>

<script>
    export default {
      props: ['token'],
      methods: {
        regenerateToken: function() {
          console.log('regenerating token');
          axios.post('/api/v1/profile/token', {
              api_token: this.token
            })
            .then((response) => {
              this.token = response.data;
            })
            .catch((error) => {
              console.log(error.response);
            });
        }
      }
    }
</script>