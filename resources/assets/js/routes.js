import VueRouter from 'vue-router';

let routes = [
  {
    path : '/',
    component: require('./views/Home')
  },
  {
    path : '/kategori',
    component: require('./views/Kategori')
  },
  {
    path : '/kategori-create',
    component: require('./views/KategoriCreate.vue')
  },
];

export default new VueRouter({
  routes
})
