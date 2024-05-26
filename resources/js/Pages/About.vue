<template>
    <div class="about-page">
      <h1>About this shop</h1>
      <section class="intro">
        <p>Welcome to Shopee, your ultimate destination for a diverse range of products. At Shopee, we are committed to bringing you a seamless shopping experience, featuring high-quality items across various categories. Whether you're looking for the latest gadgets or fashionable apparel, Shopee has it all.</p>
      </section>
    </div>
  </template>

  <script setup>
  import Yourlayout from '@/Layouts/Yourlayout.vue';

  defineOptions({
    layout: Yourlayout
  });
  </script>

  <style scoped>

  .about-page {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    color: rgb(16, 15, 15);
    background-color: rgb(29, 129, 200);
  }
  .container {
    background-color: aquamarine;
  }

  h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 2.5em;
  }
  element.style {
    background: linear-gradient(45deg, rgb(54 241 227), rgb(3 62 55));
}

  .intro p {
    font-size: 1.1em;
    line-height: 1.6;
  }
  </style>
