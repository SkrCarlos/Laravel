/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component("list-posts", {
    data: function() {
        return  {
            posts2: [
                {
                    title: 'Título 1',
                    image: '1644445333.jpg',            
                    content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
                },
                {
                    title: 'Título 2',
                    image: '1644445333.jpg',            
                    content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
                },
                {
                    title: 'Título 3',
                    image: '1644445333.jpg',            
                    content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
                },
                {
                    title: 'Título 4',
                    image: '1644445333.jpg',            
                    content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
                },
                {
                    title: 'Título 5',
                    image: '1644445333.jpg',            
                    content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
                }
            ],
        }
    },
    template: 
        `
        <div>
            <div class="card mt-5" v-for="post in posts2" style="display:none">
                <img :src=" '/images/' + post.image" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">@{{ post.title }}</h5>
                    <p class="card-text">@{{ post.content }}</p>
                    <a href="#" class="btn btn-primary">Ver Resumen</a>
                </div>
            </div>
        </div>
        `
});


const app = new Vue({
    el: '#app',
    data: {
        message: "Hola mundo",
        posts: [
            {
                title: 'Título 1',
                image: '1644445333.jpg',            
                content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
            },
            {
                title: 'Título 2',
                image: '1644445333.jpg',            
                content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
            },
            {
                title: 'Título 3',
                image: '1644445333.jpg',            
                content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
            },
            {
                title: 'Título 4',
                image: '1644445333.jpg',            
                content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
            },
            {
                title: 'Título 5',
                image: '1644445333.jpg',            
                content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore placeat commodi sint vel saepe, cum animi harum quo vitae ab ullam perferendis illo nulla illum magnam magni porro quod! Voluptate voluptatibus, assumenda mollitia alias laborum sit dicta at dolor cum beatae placeat corrupti? Asperiores reiciendis dolores, suscipit aliquid culpa nihil nemo, reprehenderit inventore voluptatum impedit expedita ducimus eligendi quisquam officia tenetur sed, voluptate perspiciatis labore dicta architecto totam! Molestias et provident laudantium id dicta dolorum? Velit culpa neque, cum impedit in tempore iure delectus tempora nostrum ad sed provident voluptatem, officia consectetur, magni dolorum corporis quo nihil! Iusto, ratione repudiandae explicabo natus deserunt cupiditate. Necessitatibus expedita perferendis ea distinctio rerum.'
            }
        ],
    }
});
