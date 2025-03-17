<script setup>
import { reactive } from 'vue';
import RegisterForm from '@/components/auth/RegisterForm.vue';
import { useAuthStore } from '@/stores/auth';

const form = reactive({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
})

const { register } = useAuthStore();



</script>

<template>
    <section class="flex w-full h-screen flex-col justify-center">
        <div>
            <RegisterForm v-model="form" :register="register" />
        </div>
    </section>
</template>
