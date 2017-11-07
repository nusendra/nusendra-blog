<template lang="html">
  <section class="container">
    {{loadingContent}}
    <div class="columns features" v-for="posts in chunkedPosts">
        <div class="column is-4" v-for="post in posts">
          <div class="card" >
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <p class="title is-4">{{post.judul}}</p>
                  <p class="subtitle is-6">by {{post.user.name}}</p>
                </div>
              </div>

              <div class="content">
                {{post.ringkasan}}
                <br>
                <time datetime="2016-1-1">{{post.tgl_terbit}}</time>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
</template>

<script>
  var chunk = require('chunk')

  export default {
    data: function() {
      return {
        posts: '',
        loadingContent: 'Loading content ......'
      }
    },
    computed: {
      chunkedPosts () {
        return chunk(this.posts,3)
      }
    },
    mounted(){
      axios.get('post')
      .then((response) => {
        this.loadingContent = ''
        this.posts = response.data
      })
      .catch(function (error) {
        console.log(error);
      });
    }
  }
</script>

<style lang="css">
</style>
