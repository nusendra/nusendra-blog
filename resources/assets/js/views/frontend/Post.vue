<template lang="html">
  <div class="">
    <section class="hero is-dark is-bold">
      <hero judul="Post" ringkasan="Blog post"></hero>
    </section>
    <br>
    <single-post></single-post>
    <br>
    {{slug}}
  </div>
</template>

<script>
import hero from '../../components/frontend/Hero';
import singlePost from '../../components/frontend/SinglePost';
  export default {
    props: ['slug'],
    components: {
      hero,
      singlePost,
    }
  }
</script>
