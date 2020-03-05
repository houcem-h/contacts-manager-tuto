import Vue from 'vue';
import VueRouter from 'vue-router';
import Welcome from './components/Welcome.vue';
import ContactsIndex from './views/ContactsIndex'
import ContactShow from './views/ContactShow'
import BirthdaysIndex from './views/BirthdayIndex.vue'

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/', component: Welcome },
        { path: '/contacts', component: ContactsIndex},
        { path: '/contacts/:id', component: ContactShow},
        { path: '/birthdays', component: BirthdaysIndex},
    ],
    mode: 'history'
});