<!-- <template>
    <div class="shop-container">
      <h1>Categories</h1>
      <div class="categories">
        <div class="category" @click="filterProducts('Mobile')">Mobile</div>
        <div class="category" @click="filterProducts('Tshirt')">Tshirt</div>
        <div class="category" @click="filterProducts('Tablet')">Tablet</div>
      </div>
      <div class="product-grid">
        <div class="product-card" v-for="product in filteredProducts" :key="product.id">
          <div class="product-content">
            <img :src="product.image" :alt="product.name" class="product-image"/>
            <div class="product-details">
              <p class="product-name">{{ product.name }}</p>
            </div>
          </div>
          <button class="buy-now-button">Buy Now</button>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  import { ref } from 'vue';
  import Yourlayout from '@/Layouts/Yourlayout.vue';

  defineOptions({
    layout: Yourlayout
  });

  const products = [
    { id: 1, name: "Redmi Note 12 Pro", price: "₱49.99", image: "https://i.gadgets360cdn.com/products/large/redmi-note-12-5g-pro-plus-db-gadgets360-800x600-1673019783.jpg", category: "Mobile" },
    { id: 2, name: "iPhone 15 Pro Max", price: "₱83,990.00", image: "https://powermaccenter.com/cdn/shop/files/iPhone_15_Pro_Max_Natural_Titanium_PDP_Image_Position-1__en-US_3295c924-7c21-417d-870c-32bee7f1e310.jpg?v=1695861436", category: "Mobile" },
    { id: 3, name: "Nike Tshirt", price: "₱89.99", image: "https://down-ph.img.susercontent.com/file/c51e22666454e92c0280cf20fcec47bd", category: "Tshirt" },
    { id: 4, name: "Unisex Black T shirt", price: "₱39.99", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGkz8TvGgulzht0JXmJQ2cq5jGhTy1BSy45msdiiREGg&s", category: "Tshirt" },
    { id: 5, name: "Tab P12 Pro ", price: "₱99.99", image: "https://p2-ofp.static.pub/fes/cms/2021/10/28/juqs65pgl1gh3dysi7yv1tnvtsiqva364946.png", category: "Tablet" },
    { id: 6, name: "Tab Q12 Pro", price: "₱29.99", image: "https://p2-ofp.static.pub/fes/cms/2023/03/29/8rz4mn5wzzx3s29zfcffctkb2xcwjj602719.png", category: "Tablet" },
  ];

  const selectedCategory = ref(null);

  const filteredProducts = ref([]);

  const filterProducts = (category) => {
    selectedCategory.value = selectedCategory.value === category ? null : category;
    filteredProducts.value = selectedCategory.value ? products.filter(product => product.category === selectedCategory.value) : products;
  };
  </script>


  <style scoped>

h1 {
    font-size: 40px;
    color: #333;
    margin-bottom: 50px;
  }

  .shop-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    font-size: 32px;
    color: #000000;
    margin-bottom: 20px;
  }

  .categories {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .category {
    padding: 10px 20px;
    margin: 0 10px;
    border-radius: 5px;
    background-color: #f0f0f0;
    font-weight: bold;
  }

  .product-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Change this line */
  gap: 20px;
  max-width: 1200px;
  align-items: center;
}



  .product-card {
    position: relative; /* Set position relative to contain absolute child */
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s, box-shadow 0.3s;
    overflow: hidden;
    text-align: center;
    padding: 20px;
    margin: auto; /* Center the product card */
    width: 200px; /* Set a fixed width for the product card */
    height: 300px; /* Set a fixed height for the product card */
  }

  .product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
  }

  .product-content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* Fill the height of the product card */
  }

  .product-image {
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
  }

  .product-details {
    margin-bottom: 20px;
  }

  .product-name {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin: 0 0 50px;
  }

  .product-price {
    font-size: 20px;
    color: #ff8a00;
    margin: 0;
  }

  .buy-now-button {
    position: absolute; /* Position the button absolutely */
    bottom: 20px; /* Adjust the distance from the bottom */
    left: 50%; /* Align the button to the center horizontally */
    transform: translateX(-50%); /* Adjust for center alignment */
    background: linear-gradient(90deg, #d7cfc6, #2c2b2b);
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s;
    width: 80%; /* Set a width for the button */
  }

  .buy-now-button:hover {
    background: linear-gradient(90deg, #e52e71, #ff8a00);
  }
  </style> -->
