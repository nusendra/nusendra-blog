import VueRouter from 'vue-router';

let routes = [
  {
    path : '/',
    component: require('./views/Home')
  }
];

export default new VueRouter({
  routes
})
