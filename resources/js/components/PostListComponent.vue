<template>
    <div>
        <div class="card mt-5" v-for="post in posts" :key="post.title" >
            <img :src=" '/images/' + post.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.content }}</p>
                <a href="#" class="btn btn-primary" @click="postClick(post)" data-bs-toggle="modal" data-bs-target="#postModal">Ver Resumen</a>
            </div>
        </div>
    <modal-post @closeModalPost="closeModalPost" :post="postSelected"></modal-post>
    </div>
</template>



<script>
export default {
    data: function() {
        return  {
            postSelected: "",
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
    },
    methods: {
        closeModalPost: function () {
            this.postSelected = "";
        },
        postClick: function (post) {
            this.postSelected = post
        }
    }
}
</script>
