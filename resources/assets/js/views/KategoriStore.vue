<template>
  <div class="field">
    <sukses pesan="Proses Berhasil" :alert="statusResponse"></sukses>
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
  import Sukses from '../components/Sukses';
    export default {
        props: ['id'],
        components: {
          'sukses':Sukses
        },
        data: function() {
          return {
            // id:0,
            kategori:'',
            statusResponse:false
          }
        },
        methods:{
          submit : function() {
            axios.post('kategori', {
      				id : this.id,
              kategori : this.kategori
      			})
      			.then(response => {
              this.statusResponse = true;
              this.kategori = '';
      			})
      			.catch(function(error) {
      			    console.log(error.response.data);
      			});
          }
        },
        mounted(){
          axios.get('kategori/' + this.id + '/edit')
          .then((response) => {
            this.kategori = response.data
            // console.log(response.data)
          })
          .catch(function (error) {
            console.log(error);
          });
        }

    }
</script>
