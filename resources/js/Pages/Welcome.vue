<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="home">
        <div class="content">
            <div class="auth-links">
                <div class="auth-container"> <!-- Container with black background and white border -->
                    <Link :href="route('login')" class="route-link">Log in</Link>
                    <Link v-if="canRegister" :href="route('register')" class="route-link">Register</Link>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.home {
    background-color: aquamarine;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content {
    text-align: center;
}

.auth-container {
    background-color: black;
    border: 2px solid white; /* White border */
    border-radius: 8px;
    padding: 20px; /* Add some padding for better appearance */
    display: flex;
    align-items: center;
    justify-content: center; /* Center horizontally */
}

.route-link {
    font-weight: 600;
    margin: 10px;
    padding: 8px 16px;
    border: 2px solid transparent;
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: #4a90e2;
    color: #fff;
    text-decoration: none;
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.1);
}

.route-link:hover {
    background-color: #fff;
    border-color: #4a90e2;
    color: #4a90e2;
}
</style>
