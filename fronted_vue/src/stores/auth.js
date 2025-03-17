import axios from 'axios'
import { defineStore } from 'pinia'
import { ref } from 'vue'
import axiosClient from '@/axiosClient'
import router from '@/router'

export const useAuthStore = defineStore('useAuth', () => {
  const user = ref({})

  const errors = ref({})

  const isLoading = ref(false)

  const register = async (formData) => {
    //csrf token
    await axios.get('http://localhost:8000/sanctum/csrf-cookie', {
      withCredentials: true,
      withXSRFToken: true,
    })
    try {
      const { data } = await axios.post('http://localhost:8000/api/register', formData, {
        withCredentials: true,
        withXSRFToken: true,
      })
    } catch (error) {
      console.log(error.response)
    }
  }

  const login = async (formData) => {
    await axios.get('http://localhost:8000/sanctum/csrf-cookie', {
      withCredentials: true,
      withXSRFToken: true,
    })
    try {
      const res = await axiosClient.post('/api/login', formData)
      const data = await res.data
      router.push({ name: 'home' })
    } catch (error) {
      console.log(error.response.data.errors)
      errors.value = error.response.data.errors
    }
  }

  return { user, errors, isLoading, register, login }
})
