<template>
  <div class="field">
    <pre>{{$data}}</pre>
    <label class="label">Kategori</label>
    <div class="control">
      <input class="input" type="text" v-model="kategori">
    </div>
    <br>
    <div class="field is-grouped">
      <div class="control">
        <button class="button is-link" @click="submit">Submit</button>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        data: function() {
          return {
            id:0,
            kategori:''
          }
        },
        methods:{
          submit : function() {
            axios.post('kategori', {
      				id : this.id,
              kategori : this.kategori
      			})
      			.then(response => {
      				console.log("ntap");
      			})
      			.catch(function(error) {
      			    console.log(error.response.data);
      			});
          }
        }

    }
</script>
