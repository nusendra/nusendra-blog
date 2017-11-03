import VueRouter from 'vue-router';

let routes = [
  { path : '/', component: require('./views/Home') },
  { path : '/kategori', component: require('./views/Kategori') },
  { path : '/kategori-create', component: require('./views/KategoriStore.vue') },
  { path : '/kategori/:id', component: require('./views/KategoriStore.vue'), props:true },
  { path : '/post', component: require('./views/Post.vue') },
  { path : '/post-create', component: require('./views/PostStore.vue') },
];

export default new VueRouter({
  routes
})
