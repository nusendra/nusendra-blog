import VueRouter from 'vue-router';

let routes = [
  //backend
  { path : '/dashboard', component: require('./views/backend/Dashboard') },
  { path : '/kategori', component: require('./views/backend/Kategori') },
  { path : '/kategori-create', component: require('./views/backend/KategoriStore.vue') },
  { path : '/kategori/:id', component: require('./views/backend/KategoriStore.vue'), props:true },
  { path : '/post', component: require('./views/backend/Post.vue') },
  { path : '/post-create', component: require('./views/backend/PostStore.vue') },

  //frontend
  { path : '/', component: require('./views/frontend/Home') },
];

export default new VueRouter({
  mode: 'history',
  routes
})
