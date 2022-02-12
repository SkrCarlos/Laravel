<template>
    <div class="modal fade" id="postModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{ post.title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            <div class="modal-body">
                {{ post.content }}
            </div>
            <div class="modal-footer">
                <button type="button" @click="clean" class="btn btn-primary " data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
</template> 

<script>
export default {
    props: ['post'],
    created() {
        
    },
    methods: {
        clean: function(){
            this.$emit('closeModalPost');
        },
    }
}
</script>