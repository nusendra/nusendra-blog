<template>
  <div class="field column is-5">
    <sukses pesan="Proses Berhasil" :alert="statusResponse"></sukses>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Kategori</label>
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control">
            <input class="input" type="text" v-model="kategori">
          </p>
        </div>
      </div>
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
  import Sukses from '../../components/alert/Sukses';
    export default {
        props: ['id'],
        components: {
          'sukses':Sukses
        },
        data: function() {
          return {
            kategori:'',
            statusResponse:false
          }
        },
        methods:{
          submit : function() {
            axios.post('backend-kategori', {
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
          if(this.id > 0)
          {
            axios.get('backend-kategori/' + this.id + '/edit')
            .then((response) => {
              this.kategori = response.data
            })
            .catch(function (error) {
              console.log(error);
            });
          }
        }

    }
</script>
