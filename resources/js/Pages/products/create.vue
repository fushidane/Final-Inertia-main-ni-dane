<template>
    <div class="flex justify-center items-center h-screen bg-gradient">
      <div class="flex max-w-2xl mx-auto p-8 bg-gradient-to-br from-blue-300 to-blue-500 rounded-lg shadow-3d transform hover:scale-105 transition duration-300 relative">
        <div class="w-full">
          <h1 class="text-3xl text-white font-bold mb-6 text-shadow">Create Product</h1>
          <form @submit.prevent="submit">
            <div class="mb-4">
              <label for="name" class="block text-white font-bold mb-2 label-shadow">Name</label>
              <input type="text" id="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 input-shadow" v-model="form.name">
            </div>
            <div class="mb-4">
              <label for="description" class="block text-white font-bold mb-2 label-shadow">Description</label>
              <input type="text" id="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 input-shadow" v-model="form.description">
            </div>
            <div class="mb-4">
                <label for="category_id" class="block text-white font-bold mb-2 label-shadow">Product</label>
                <select id="category_id" v-model="form.category_id" class="w-full rounded">
                    <option value="0" disabled>Select Genre</option>
                    <option v-for="categ in categories" :key="categ.id" :value="categ.id">
                        {{ categ.name }}
                    </option>
                </select>

            </div>
            <div class="mb-4">
              <label for="price" class="block text-white font-bold mb-2 label-shadow">Price</label>
              <input type="number" id="price" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 input-shadow" v-model="form.price">
            </div>
            <div class="flex">
              <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700 button-shadow">Save Product</button>
            <button onclick="window.history.back()" class="btn-back">Back</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </template>

  <script setup>
  import { useForm } from '@inertiajs/vue3';
  import Yourlayout from '@/Layouts/Yourlayout.vue';

  defineOptions({
    layout: Yourlayout
})
      const form = useForm({
        name: '',
        category_id: 0,
        description: '',
        price: '',
      });

      const props = defineProps({
        categories: {
            type: Array,
            required: true
        }
    })

      const submit = async () => {
        form.post('/products');
      };

  </script>

  <style scoped>
  .flex {
    display: flex;
  }

  .justify-center {
    justify-content: center;
  }

  .items-center {
    align-items: center;
  }

  .h-screen {
    height: 100vh;
  }

  .bg-gradient {
    background: linear-gradient(45deg, #2cbac4, #118486);
  }

  .max-w-2xl {
    max-width: 42rem;
  }

  .p-8 {
    padding: 2rem;
  }

  .bg-gradient-to-br {
    background-image: linear-gradient(to bottom right, #36b3d2, #0ed0e1);
  }

  .border {
    border: 1px solid transparent;
  }

  .rounded-lg {
    border-radius: 0.75rem;
  }

  .shadow-3d {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), inset 0 1px 3px rgba(255, 255, 255, 0.2);
  }

  .text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
  }

  .label-shadow {
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
  }

  .input-shadow {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2), 0 1px 2px rgba(0, 0, 0, 0.1);
  }

  .button-shadow {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
  }

  .hover\:scale-105:hover {
    transform: scale(1.05);
  }

  .transition {
    transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
    transition-duration: 300ms;
  }

  .text-white {
    color: white;
  }

  .font-bold {
    font-weight: bold;
  }

  .mb-6 {
    margin-bottom: 1.5rem;
  }

  .mb-4 {
    margin-bottom: 1rem;
  }

  .w-full {
    width: 100%;
  }

  .px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .focus\:outline-none:focus {
    outline: none;
  }

  .focus\:border-red-500:focus {
    border-color: #169ad3;
  }

  .bg-red-600 {
    background-color: #000000;
  }

  .hover\:bg-red-700:hover {
    background-color: #27dcdc;
  }

  .rounded-md {
    border-radius: 0.375rem;
  }

  /* Custom Button Style */
  .btn-back {
    position: absolute;
    bottom: -2rem;
    left: 50%;
    transform: translateX(-50%);
    background-color: #000000;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  .btn-back:hover {
    background-color: #17c2e8;
    transform: translateX(-50%) scale(1.05);
  }
  </style>
