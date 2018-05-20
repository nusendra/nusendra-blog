<template>
  <div class="field columns">
    <div class="column">
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
                <froala :tag="'textarea'" v-model="isi"></froala>
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
                <textarea class="textarea" type="text" v-model="ringkasan" maxlength="200"></textarea>
              </p>
            </div>
          </div>
          <br>
        </div>
        <div class="field is-horizontal is-pulled-right">
          <small>Total teks ringkasan : {{ringkasanLength}}</small>
        </div>
        <br>
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
            <div v-if="loading">Loading ....</div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Sukses from "../../components/alert/Sukses";

export default {
  props: ["id"],
  components: {
    sukses: Sukses
  },
  data: function() {
    return {
      loading: false,
      judul: "",
      ringkasan: "",
      // image:'',
      slug: "",
      isi: "",
      terbit: true,
      tgl_terbit: "",
      statusResponse: false,
      value: [],
      options: []
    };
  },
  computed: {
    ringkasanLength: function() {
      return this.ringkasan.length;
    }
  },
  methods: {
    submit: function(e) {
      this.loading = true
      e.preventDefault();
      let array_select = [];
      this.value.map(function(value, key) {
        array_select.push(value.id);
      });
      axios
        .post("backend-post", {
          id: this.id,
          judul: this.judul,
          ringkasan: this.ringkasan,
          slug: this.slug,
          isi: this.isi,
          status_terbit: this.terbit,
          tgl_terbit: this.tgl_terbit,
          kategori: array_select
          // image : this.image
        })
        .then(response => {
          this.statusResponse = true;
          this.judul = "";
          this.ringkasan = "";
          this.slug = "";
          this.isi = "";
          this.terbit = true;
          this.tgl_terbit = "";
          this.value = [];
          this.loading = false
        })
        .catch(function(error) {
          console.log(error.response.data);
        });
    },
    fetchKategori: function() {
      axios
        .get("backend-kategori")
        .then(response => {
          this.options = response.data;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    fetchPost: function() {
      if (this.id > 0) {
        axios
          .get("backend-post/" + this.id + "/edit")
          .then(response => {
            // console.log(response)
            this.judul = response.data.judul;
            this.isi = response.data.isi;
            this.ringkasan = response.data.ringkasan;
            this.slug = response.data.slug;
            this.terbit = response.data.status_terbit;
            this.tgl_terbit = response.data.tgl_terbit;
            this.value = response.data.kategoris;
          })
          .catch(function(error) {
            console.log(error);
          });
      }
    }
  },
  mounted() {
    this.fetchKategori()
    this.fetchPost()
  }
};
</script>
