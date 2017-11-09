<template>
    <div class="container column is-full">
      <pre>{{$data}}</pre>
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
            <th>Kategori</th>
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
            <td>{{post.user.name}}</td>
            <td>{{kategori}}</td>
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
          posts: '',
          kategoris:[],
          kats:''
        }
      },
      computed: {
        kategori : {
          get: function() {
            return this.kats
          },
          set: function() {
            this.kategoris.map(function(kat){
              this.kats = kat.kategori
            })
          }
        }
      },
      mounted(){
        axios.get('post')
        .then((response) => {
          this.kategori = response.data.kategoris
          this.posts = response.data
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    }
</script>
