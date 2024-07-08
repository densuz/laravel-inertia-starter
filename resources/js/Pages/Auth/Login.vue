<template>
    <form @submit.prevent="submitForm">
        <input type="email" v-model="form.email" placeholder="Email" required>
        <input type="password" v-model="form.password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: '',
                password: '',
            }
        };
    },
    methods: {
        async submitForm() {
            await this.$inertia.post('/login', this.form);
        }
    }
};
</script>
