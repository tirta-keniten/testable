<template>
    <form @submit.prevent="formSubmitHandler">
        <div class="form-group">
            <label>Project Name</label>
            <input v-model="project.name" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea v-model="project.description" class="form-control" />
        </div>
        <button type="submit" class="btn btn-success">Create Project</button>
    </form>
</template>

<script>
export default {
    data () {
        return {
            project: {
                name: '',
                description: ''
            }
        }
    },

    methods: {
        formSubmitHandler () {
            this.$store.dispatch('Project/store', this.project)
        }
    }
}
</script>
