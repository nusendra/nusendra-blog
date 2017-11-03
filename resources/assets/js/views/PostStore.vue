<template>
  <div class="field columns">
    <pre>{{$data}}</pre>
    <div class="column is-three-quarters">

      <sukses pesan="Proses Berhasil" :alert="statusResponse"></sukses>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Judul</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <input class="input" type="text" v-model="judul">
            </p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Isi Konten</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <textarea class="textarea" type="text" v-model="isi"></textarea>
            </p>
          </div>
        </div>
      </div>
      <hr>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Slug</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <input class="input" type="text" v-model="slug" v-slugify>
            </p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Kategori</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <multiselect v-model="value" :options="options" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pick some" label="name" track-by="name">
                <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.language }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
              </multiselect>
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
  </div>
</template>

<script>
  import Sukses from '../components/Sukses';
  // import Multiselect from 'vue-multiselect'

    export default {
        props: ['id'],
        components: {
          'sukses':Sukses,
          // 'multiselect':Multiselect
        },
        data: function() {
          return {
            judul:'',
            slug:'',
            isi:'',
            statusResponse:false,
            value: [
               { name: 'Vue.js', language: 'JavaScript' }
             ],
             options: [
               { name: 'Vue.js', language: 'JavaScript' },
               { name: 'Adonis', language: 'JavaScript' },
               { name: 'Rails', language: 'Ruby' },
               { name: 'Sinatra', language: 'Ruby' },
               { name: 'Laravel', language: 'PHP' },
               { name: 'Phoenix', language: 'Elixir' }
             ]
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
          // axios.get('kategori')
          // .then((response) => {
          //   this.options = response.data
            // console.log(response.data)
          // })
          // .catch(function (error) {
          //   console.log(error);
          // });
          // axios.get('kategori/' + this.id + '/edit')
          // .then((response) => {
          //   this.kategori = response.data
          //   // console.log(response.data)
          // })
          // .catch(function (error) {
          //   console.log(error);
          // });
        }

    }
</script>
