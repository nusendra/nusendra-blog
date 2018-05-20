<template>
    <div class="container column is-full">
      <div v-if="loading">Loading...</div>
      <router-link to="/post-create"><a class="button is-primary">Add New</a></router-link>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Ringkasan</th>
            <th>Status Terbit</th>
            <th>Tgl Terbit</th>
            <th>Author</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(post, index) in posts" :key="index">
            <td>{{post.id}}</td>
            <td>{{post.judul}}</td>
            <td>{{post.ringkasan}}</td>
            <td>{{post.status_terbit}}</td>
            <td>{{post.tgl_terbit}}</td>
            <td>{{post.user.name}}</td>
            <td>
              <router-link :to="'/post/' + post.id"><a>edit</a></router-link>
              <a @click="hapus(post.id)">hapus</a>
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
          posts: '',
          loading: true
        }
      },
      methods: {
        hapus: function(id) {
          axios.delete('/backend-post/' + id)
          .then((response) => {
            console.log("terhapus")
          })
          .catch(function (error) {
            console.log(error);
          });
        }
      },
      mounted(){
        axios.get('backend-post')
        .then((response) => {
          this.posts = response.data
          this.loading = false
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    }
</script>
