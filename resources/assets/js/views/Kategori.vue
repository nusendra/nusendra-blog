<template>
    <div class="container">

      <router-link to="/kategori-create"><a class="button is-primary">Add New</a></router-link>
      <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th width="50%">Judul Kategori</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Judul Kategori</th>
          <th>Action</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th>1</th>
          <td>Lol</td>
        </tr>
      </tbody>
      </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
