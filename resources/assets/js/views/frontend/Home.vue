<template lang="html">
  <div class="">
    <section class="hero is-dark is-bold">
      <nav-bar></nav-bar>
      <hero></hero>
    </section>
    <sticky></sticky>
    <br>
    <blog-post></blog-post>
    <br>
    <foot></foot>
  </div>
</template>

<script>
import navBar from '../../components/frontend/NavBar';
import hero from '../../components/frontend/Hero';
import sticky from '../../components/frontend/StickyAlert';
import blogPost from './BlogPosts';
import foot from '../../components/frontend/Foot';
  export default {
    components: {
      navBar,
      hero,
      sticky,
      blogPost,
      foot
    }
  }
</script>
