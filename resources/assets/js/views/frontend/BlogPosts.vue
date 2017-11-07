<template lang="html">
  <section class="container">
    {{loadingContent}}
    <div class="columns features" v-for="posts in chunkedPosts">
        <div class="column is-3" v-for="post in posts">
          <div class="card" >
            <div class="card-image">
              <figure class="image is-3by2">
                <img :src="'/image/' + post.featured_thumbnail" alt="Placeholder image">
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
                Published : {{post.tgl_terbit}}
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
        return chunk(this.posts,4)
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
