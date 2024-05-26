<template>
    <div>
        <Head title="Profile" />

        <Yourlayout>
            <main class="container">
                <div class="profile-details">
                    <div class="profile-picture">
                        <img src="https://th.bing.com/th?id=OIP.3sxx9Umln1xPaHQD6KCwtwHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" alt="Profile Picture">
                    </div>
                    <div class="user-info">
                        <h2>{{ $page.props.auth.user.name }}</h2>
                        <p>{{ $page.props.auth.user.email }}</p>
                    </div>
                </div>
                <section class="card-section">
                    <div class="cards-container">
                        <h1 class="section-heading">brand deals</h1>
                        <div class="cards">
                            <div class="card" v-for="(card, index) in cardImages" :key="index">
                                <div class="card-content">
                                    <img :src="card" alt="Card Image">
                                    <h3>{{ cardNames[index] }}</h3>
                                    <button @click="visit(cardNames[index])" class="visit-button"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </Yourlayout>
    </div>
</template>

<script setup>
import Yourlayout from '@/Layouts/Yourlayout.vue';
import { Head } from '@inertiajs/vue3';

const cardImages = [
    "https://th.bing.com/th?id=OIP.1T1gGa3lGC6biisUocYxQQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2",
    "https://th.bing.com/th?id=OIP.FPrqH1w5Nb2ti4_YuY7zWAHaHY&w=250&h=249&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2",
    "https://th.bing.com/th?id=OIP.mTHT85-9ubk4Zi1jxRzqsAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2"
];

const cardNames = [
    "App store",
    "Dell shop",
    "HP store",
];

const follow = (storeName) => {
    console.log(`Visiting ${storeName}`);
}
</script>

<style scoped>
.container {
    padding: 20px;
    max-width: 100%;
    height: 900px;
    perspective: 1000px;
    background-color: #94c7c8;
}

.card-section {
    display: flex;
    justify-content: center;
    align-items: flex-end;
    margin-top: 80px;
}

.cards-container {
    position: relative;
    margin-top: 100px;
}


.cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    width: 220px;
    height: 300px;
    background-color: #18edf0;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transform-style: preserve-3d;
}

.card:hover {
    transform: translateY(-10px) rotateX(10deg) rotateY(10deg);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
}

.card-content {
    text-align: center;
    padding: 20px;
}

.card-content img {
    width: 100%;
    height: 140px;
    object-fit: cover;
    border-bottom: 2px solid #201c1c;
    transition: transform 0.3s;
}

.card:hover img {
    transform: scale(1.05);
}

.card h3 {
    margin: 20px 0 10px;
    font-size: 20px;
    color: #333;
}

.card p {
    margin: 0;
    font-size: 30px;
    color: #000000;
}

.profile-details {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    perspective: 1000px;
    gap: 20px;
}

.profile-picture {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.user-info {
    padding: 20px;
    transform-style: preserve-3d;
    transition: transform 0.5s;
    text-align: center;
}

.user-info h2 {
    margin-bottom: 10px;
    font-size: 20px;
    color: #333;
}

.user-info p {
    margin: 0;
    font-size: 16px;
    color: #666;
}

.section-heading {
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 28px;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 1px;
    background-color: #1fa7c0;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.follow-button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.follow-button:hover {
    background-color: #45a049;
}

</style>
