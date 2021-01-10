import Vue    from 'vue'
import Router from 'vue-router'
Vue.use(Router)

 //secciones
import Welcome             from '@views/welcome/Welcome';
import Admin               from '@views/admin/Admin';
/*import Home                  from '@views/home/home';*/

//tools
import PageNotFound     from  '@views/404/NotFound'
/*import Crud             from  '@views/crud/crud' */

let isAuthenticated = true;
export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
    routes: [
         {
          path:  '/',
          name:  'welcome',
          label: 'Welcome',
          icon:  'mdi-home',
          profile: '',
          visible: false,
          component: Welcome,
        },
        
        {
          path:  '/admin',
          name:  'admin',
          label: 'Administrador',
          icon:  'mdi-home',
          profile: '',
          visible: true,
          component: Admin,
        },
        { 
            path: "*", 
            name: 'notfound',
            label: 'Not Found',
            profile: '*',
            visible: false,
            component: PageNotFound 
        } 
    ]
})


