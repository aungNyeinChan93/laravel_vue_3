<script setup>
import { reactive } from 'vue';
import RegisterForm from '@/components/auth/RegisterForm.vue';

const form = reactive({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
})

</script>

<template>
    <section class="flex w-full h-screen flex-col justify-center">
        <div>
            <RegisterForm v-model="form" />
        </div>
    </section>
</template>
