<template>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Create Projects</h2>
            <p>
                <router-link :to="{ name: 'testable.projects' }">Back</router-link>
            </p>
            <ProjectForm />
        </div>
    </div>
</template>

<script>
export default {
}
</script>
