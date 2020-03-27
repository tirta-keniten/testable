<template>
    <div>
        <form @submit.prevent="formSubmitHandler">
            <div class="form-group">
                <label>Title</label>
                <input v-model="test.title" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Code</label>
                <input v-model="test.code" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Tester</label>
                <input v-model="test.tester" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Initial Location / URL</label>
                <input v-model="test.initial_location" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Prerequiresite</label>
                <textarea v-model="test.prerequiresite" type="text" class="form-control" rows="3" />
            </div>

            <h3 class="card-title" v-if="scenarios.length > 0">
                Scenarios
            </h3>

            <p>
                <a href="javascript:;"
                    @click.prevent="showModalScenarioForm"
                    class="btn btn-primary">Add Scenario</a>
            </p>

            <table v-if="scenarios.length > 0" class="table">
                <thead>
                    <tr>
                        <th>Input</th>
                        <th>Expected</th>
                        <th>Output</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(scenario, key) in scenarios" :key="key">
                        <td v-html="$nl2br(scenario.input)" />
                        <td v-html="$nl2br(scenario.expected)" />
                        <td v-html="$nl2br(scenario.output)" />
                        <td>{{ (scenario.status) ? 'Success' : 'Failed' }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="form-group">
                <label>Status</label>
                <select v-model="test.status" class="form-control">
                    <option :value="true">Success</option>
                    <option :value="false">Fail</option>
                </select>
            </div>

            <div class="form-group">
                <label>Comment</label>
                <textarea v-model="test.comment" type="text" class="form-control" rows="4" />
            </div>

            <button type="submit" class="btn btn-success">Save This Test</button>
        </form>

        <div class="modal" tabindex="-1" role="dialog" ref="modalScenarioForm">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <ScenarioForm @save="scenarioFormHandler"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            test: {
                project_id: '',
                title: '',
                code: '',
                tester: '',
                date_time: '',
                initial_location: '',
                prerequiresite: '',
                status: false,
                comment: ''
            },
            scenarios: [

            ]
        }
    },

    methods: {
        formSubmitHandler () {

        },

        showModalScenarioForm () {
            $(this.$refs.modalScenarioForm).modal('show')
        },

        scenarioFormHandler (scenarioData) {
            this.scenarios = [
                ... this.scenarios,
                scenarioData
            ]
        }
    }
}
</script>
