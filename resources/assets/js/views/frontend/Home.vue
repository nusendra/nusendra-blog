<template lang="html">
  <div class="">
    <section class="hero is-dark is-bold">
      <hero judul="Nusendra.com" ringkasan="Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger"></hero>
    </section>
    <sticky></sticky>
    <br>
    <blog-post></blog-post>
    <br>
  </div>
</template>

<script>
import hero from '../../components/frontend/Hero';
import sticky from '../../components/frontend/StickyAlert';
import blogPost from '../../components/frontend/BlogPosts';
  export default {
    components: {
      hero,
      sticky,
      blogPost,
    }
  }
</script>
