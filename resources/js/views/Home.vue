<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses" :key="status.id">
                    <div class="message-header">
                        <p>{{ status.user.name }} said .....</p>
                        <p>A Moment ago .....</p>
                    </div>

                    <div class="message-body" v-text="status.body"></div>

                </div>
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        name: 'Home',

        data() {
            return {
                statuses: [],
            }
        },

        created() {
            // fire an ajax request
            axios.get('/statuses')
                .then(response => this.statuses = response.data)
        }

    }
</script>
