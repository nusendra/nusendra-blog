<template>
    <div class="container">
      <div v-if="loading">Loading...</div>
      <router-link to="/kategori-create"><a class="button is-primary">Add New</a></router-link>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th width="50%">Judul Kategori</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(kategori, index) in kategoris" :key="index">
            <td>{{kategori.id}}</td>
            <td>{{kategori.kategori}}</td>
            <td>
              <router-link :to="'/kategori/' + kategori.id"><a>edit</a></router-link>
              <router-link to="/kategori"><a>hapus</a></router-link>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</template>

<script>
    export default {
      data: function() {
        return {
          kategoris: '',
          loading: true
        }
      },
      mounted(){
        axios.get('backend-kategori')
        .then((response) => {
          this.kategoris = response.data
          this.loading = false
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    }
</script>
