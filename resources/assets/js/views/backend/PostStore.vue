<template>
  <div class="field columns">

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
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Ringkasan</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <textarea class="textarea" type="text" v-model="ringkasan"></textarea>
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
              <multiselect v-model="value" :options="options" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pilih kategori" label="kategori" track-by="id">
                <template slot="tag" slot-scope="props"><span class="custom__tag"><span> {{ props.option.kategori }}</span><span class="custom__remove" @click="props.remove(props.option.kategori)"> ❌</span></span></template>
              </multiselect>
            </p>
          </div>
        </div>
      </div>

      <hr>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Terbitkan ?</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <label class="checkbox">
                <input type="checkbox" v-model="terbit">
                {{terbit}}
              </label>
            </p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Tgl Terbit</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <datepicker placeholder="" :config="{ dateFormat: 'Y-m-d', static: true }" v-model="tgl_terbit"></datepicker>
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
  import Sukses from '../../components/alert/Sukses';

    export default {
        props: ['id'],
        components: {
          'sukses':Sukses,
        },
        data: function() {
          return {
            judul:'',
            ringkasan:'',
            slug:'',
            isi:'',
            terbit:true,
            tgl_terbit:'',
            statusResponse:false,
            value: [],
            options: []
          }
        },
        methods:{
          submit : function() {
            let array_select = [];
            this.value.map(function(value,key){
              array_select.push(value.id)
            })
            axios.post('post', {
      				id : this.id,
              judul : this.judul,
              ringkasan : this.ringkasan,
              slug : this.slug,
              isi : this.isi,
              status_terbit : this.terbit,
              tgl_terbit : this.tgl_terbit,
              kategori : array_select
      			})
      			.then(response => {
              this.statusResponse = true;
              this.judul = '';
              this.ringkasan = '';
              this.slug = '';
              this.isi = '';
              this.terbit = true;
              this.tgl_terbit = '';
              this.value = [];
      			})
      			.catch(function(error) {
      			    console.log(error.response.data);
      			});
          }
        },
        mounted(){
          axios.get('kategori')
          .then((response) => {
            this.options = response.data
            console.log(response.data)
          })
          .catch(function (error) {
            console.log(error);
          });
        }

    }
</script>
