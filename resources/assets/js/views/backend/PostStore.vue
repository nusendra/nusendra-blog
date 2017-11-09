<template>
  <div class="field columns">

    <div class="column is-three-quarters">

      <sukses pesan="Proses Berhasil" :alert="statusResponse"></sukses>
      <form enctype="multipart/form-data">
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
        <div class="file has-name is-boxed">
          <div class="field-label is-normal">
            <label class="label">Featured Thumbnail</label>
          </div>
          <div class="field-body">
            <label class="file-label">
              <input class="file-input" type="file" name="resume" v-on:change="onFileChange">
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fa fa-upload"></i>
                </span>
                <span class="file-label">
                  Pilih Gambar
                </span>
                <img :src="image" alt="">
              </span>
            </label>
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
      </form>
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
            image:'',
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
          onFileChange(e) {
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length)
              return;
            this.createImage(files[0]);
          },
          createImage(file) {
            var image = new Image();
            var reader = new FileReader();
            var vm = this;

            reader.onload = (e) => {
              vm.image = e.target.result;
            };
            reader.readAsDataURL(file);
          },
          submit : function(e) {
            e.preventDefault()
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
              kategori : array_select,
              image : this.image
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
              this.image = '';
      			})
      			.catch(function(error) {
      			    console.log(error.response.data);
      			});
          },
          fetchKategori: function() {
            axios.get('kategori')
            .then((response) => {
              this.options = response.data
            })
            .catch(function (error) {
              console.log(error);
            });
          },
          fetchPost: function() {
            if(this.id > 0)
            {
              axios.get('post/' + this.id + '/edit')
              .then((response) => {
                this.judul = response.data.judul
                this.isi = response.data.isi
                this.ringkasan = response.data.ringkasan
                this.slug = response.data.slug
                this.terbit = response.data.status_terbit
                this.tgl_terbit = response.data.tgl_terbit

                console.log(response.data.kategoris)
              })
              .catch(function (error) {
                console.log(error);
              });
            }
          },
        },
        mounted(){
          this.fetchKategori()
          this.fetchPost()
        }

    }
</script>
