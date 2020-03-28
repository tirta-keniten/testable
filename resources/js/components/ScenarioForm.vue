<template>
    <div>
        <h2>Scenario Form</h2>
        <form @submit.prevent="formSubmitHandler">
            <div class="form-group">
                <label>Input</label>
                <textarea v-model="scenario.input" type="text" class="form-control" rows="5" />
            </div>
            <div class="form-group">
                <label>Expected</label>
                <textarea v-model="scenario.expected" type="text" class="form-control" rows="5" />
            </div>
            <div class="form-group">
                <label>Output</label>
                <textarea v-model="scenario.output" type="text" class="form-control" rows="5" />
            </div>
            <div class="form-group">
                <label>Status</label>
                <select v-model="scenario.status" class="form-control">
                    <option :value="true">Success</option>
                    <option :value="false">Fail</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Save Scenario</button>
        </form>
    </div>
</template>

<script>
export default {
    props: {
        editData: {
            type: Object,
            default: () => { return {} }
        }
    },

    data () {
        return {
            scenario: {},
        }
    },

    methods: {
        formSubmitHandler () {
            if (this.scenario.id == '') this.scenario.id = this.$uuid()
            this.$emit('save', this.scenario)
        }
    },

    watch: {
        editData (data) {
            if ('id' in data) {
                this.scenario = data
            } else {
                this.scenario = {
                    id: '',
                    sequence: 0,
                    input: '',
                    expected: '',
                    output: '',
                    status: null,
                }
            }
        }
    }
}
</script>
