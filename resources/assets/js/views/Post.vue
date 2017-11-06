<template>
    <div class="container">

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
          <tr v-for="post in posts">
            <td>{{post.id}}</td>
            <td>{{post.judul}}</td>
            <td>{{post.ringkasan}}</td>
            <td>{{post.status_terbit}}</td>
            <td>{{post.tgl_terbit}}</td>
            <td>{{post.user_id}}</td>
            <td>
              <router-link :to="'/post/' + post.id"><a>edit</a></router-link>
              <router-link to="/post"><a>hapus</a></router-link>
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
          posts: ''
        }
      },
      mounted(){
        axios.get('post')
        .then((response) => {
          this.posts = response.data
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    }
</script>
