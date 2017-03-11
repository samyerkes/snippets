<template>
  <div class="notification is-success" v-if="message" v-show="close">
      <button class="delete" @click="closeNotification"></button>
      {{ message }}
    </div>
</template>

<script>
    export default {
      data() {
        return {
          close: '',
          message: ''
        }
      },
      mounted: function() {
          Event.$on('alert', (alertMsg) => {
            this.close = true;
            this.message = alertMsg;
          });
      }, 
      methods: {
        closeNotification: function() {
          this.close = false;
          console.log('Closing alert');
        }
      }
    }
</script>