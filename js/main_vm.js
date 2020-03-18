//imports

import HomePage from './modules/HomeComponent.js';
import ErrorPage from './modules/ErrorComponent.js';
import SubmitPage from './modules/SubmitComponent.js';


 const router = new VueRouter({
        routes: [
        { path: '/home', name: 'home', component: HomePage },
        { path: '/submit', name: 'submit', component: SubmitPage },
        { path: '/*', name: 'error', component: ErrorPage}
        ]
    });


    // Vue for app
    const vm = new Vue({


        router: router
    }).$mount("#app");