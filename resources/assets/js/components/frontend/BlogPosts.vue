<template lang="html">
  <section class="container">
    {{loadingContent}}

    <div class="columns features" v-for="posts in chunkedPosts">
        <div class="column is-3" v-for="post in posts">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong><h3>{{post.judul}}</h3></strong><small>{{post.user.name}}</small>
                    <br>
                    <small>{{post.tgl_terbit}}</small>
                    <p>
                      {{post.ringkasan}}
                      {{post.slug}}
                    </p>
                  </p>
                </div>
                <router-link :to="{ name: 'post', params: { slug: post.slug } }">
                  <a class="button is-dark is-pulled-right">Baca Selanjutnya</a>
                </router-link>
              </div>
            </article>
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
        console.log(response.data)
      })
      .catch(function (error) {
        console.log(error);
      });
    }
  }
</script>

<style lang="css">
</style>
