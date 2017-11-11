<template lang="html">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        {{judul}}
      </h1>
      <h2 class="subtitle">
        <br>
        {{ringkasan}}
      </h2>
    </div>
  </div>
</template>

<script>
export default {
  props: ['judul','ringkasan'],
}
</script>

<style lang="css">
</style>
