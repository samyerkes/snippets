<template>
    <div class="snippet">
        <p class="control">
            <input class="input" type="text" placeholder="Text input" v-model="input" v-on:keyup.space="formatOutput">
        </p>
        <blockquote>{{ output }}</blockquote>
        <copy :clipboard="output"></copy>
    </div>
</template>

<script>
    export default {
        props: ['snippet', 'token'],
        data: function() {
            return {
                input: '',
                output: ''
            }
        },
        computed: {
            inputArray: function() {
                return this.input.match(/\S+/g);
            }
        },
        mounted: function() {
            this.output = this.snippet.body;
            Event.$on('copied', () => {
                axios.post('/api/v1/output', {
                  snippet_id: this.snippet.id,
                  body: this.output,
                  api_token: this.token
                })
                .catch((error) => {
                  console.log(error.response);
                });
            });
        }, 
        methods: {
            formatOutput: function() {
                let reg = new RegExp('\\$'+ this.inputArray.length, 'g');
                this.output = this.output.replace(reg, this.inputArray[(this.inputArray.length-1)]);
            }
        }
    }
</script>