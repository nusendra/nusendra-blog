<template>
    <div class="control">
        <input class="input is-primary" type="text" placeholder="Cari apa saja disini ..." @keyup.enter="pencarian" v-model="kataPencarian">
      </div>
</template>

<script>
export default {
  props: ["kata"],
  data() {
    return {
      kataPencarian: this.kata
    };
  },
  methods: {
    pencarian: function() {
      axios
        .post("post-search", {
          param : this.kataPencarian
        })
        .then(response => {
          console.log(response.data)
        })
        .catch(function(error) {
          console.log(error.response.data);
        });
    }
  }
};
</script>