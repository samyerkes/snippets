<template>
  <div>
    <a class="button copy-btn" :data-clipboard-text="this.clipboard" @click.prevent="copied()">
        <span class="icon">
            <i class="fa fa-clipboard"></i>
        </span>
        <span>{{ this.copytext }}</span>
    </a>
  </div>
</template>

<script>
    export default {
      props: ['clipboard'],
      data() {
        return {
          copytext: 'Copy'
        }
      },
      methods: {
        copied: function() {
          Event.$emit('alert', 'Text copied!');
          Event.$emit('copied');
          this.copytext = "Copied!";
        }
      }
    }
</script>