<template>
  <div class="notification is-primary" v-show="show">
    {{ pesan }}
  </div>

</template>

<script>
    export default {
        props: ['pesan','alert'],
        computed: {
          show: function() {
            return this.alert
          }
        }
    }
</script>
