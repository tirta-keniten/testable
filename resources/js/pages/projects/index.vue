<template>
    <div>
        <h1>All Projects</h1>
        <p>
            <router-link :to="{ name: 'testable.projects.create' }"
                            class="btn btn-primary">Create Project</router-link>
        </p>
        <div v-if="projects.lenght == 0"
                class="alert alert-info"
                role="alert">
          This is a info alert—check it out!
        </div>
        <div class="row">
            <div v-for="project in projects"
                    :key="`project_${project.id}`"
                    class="col-md-4" >

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <strong>{{ project.name }}</strong>
                            </h5>
                            <p class="card-text">{{ project.name }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <router-link :to="{ name: 'testable.test.create' }">Test This Project</router-link>
                            </li>
                            <!-- li class="list-group-item">
                                Edit Project
                            </li -->
                          </ul>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    computed: {
        projects () {
            return this.$store.state.Project.items
        }
    },

    created () {
        this.$store.dispatch('Project/getAll')
    }
}
</script>
