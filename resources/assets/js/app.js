
require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('post-component', require('./components/Post.vue').default);


const app = new Vue({
    el: '#app',

    created() {
        Echo.private('testChennal')
            .listen('PostCreated', (e) => {
                alert(e.post.title + 'Has been published now');
                console.log(e.post.title)
                console.log("Loaded")
            });
    }
});
