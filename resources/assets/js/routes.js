import VueRouter from 'vue-router';

let routes = [
  //backend
  { path : '/dashboard', component: require('./views/backend/Dashboard') },
  { path : '/kategori', component: require('./views/backend/Kategori') },
  { path : '/kategori-create', component: require('./views/backend/KategoriStore.vue') },
  { path : '/kategori/:id', component: require('./views/backend/KategoriStore.vue'), props:true },
  { path : '/post', component: require('./views/backend/Post.vue') },
  { path : '/post-create', component: require('./views/backend/PostStore.vue') },
  { path : '/post/:id', component: require('./views/backend/PostStore.vue'), props:true },

  //frontend
  // { path : '/', component: require('./views/frontend/Home'), name: 'home' },
  // { path : '/post/:slug', component: require('./views/frontend/Post'), name: 'post', props:true },
];

export default new VueRouter({
  // mode: 'history',
  routes
})
