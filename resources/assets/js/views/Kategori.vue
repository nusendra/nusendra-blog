<template>
    <div class="container">

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
          <tr v-for="kategori in kategoris">
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
          kategoris: ''
        }
      },
      mounted(){
        axios.get('kategori')
        .then((response) => {
          this.kategoris = response.data
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    }
</script>
