<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses" :key="status.id">
                    <div class="message-header">
                        <p>{{ status.user.name }} said .....</p>
                        <p>{{ postedOn(status) }}</p>
                    </div>

                    <div class="message-body" v-text="status.body"></div>

                </div>
            </div>
        </div>
    </div>

</template>
<script>

    import moment from 'moment';

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
        },

        methods: {
            postedOn(status) {

                return moment(status.created_at).fromNow();
            },
        }

    }
</script>
