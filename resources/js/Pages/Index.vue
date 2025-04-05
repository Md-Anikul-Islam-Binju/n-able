<template>
    <section class="container mt-5">
        <div class="d-flix justify-content-center text-center">
            <h1 class="fw-bold">Services</h1>
            <p class="text-black-50 fs-5">We provide comprehensive offerings in infrastructure, applications & data, and managed services, backed by a wide-ranging portfolio that enables organizations to harness technology effectively and achieve their goals.</p>
        </div>
        <br>
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <a href="https://images.google.com/" class="text-decoration-none">
                    <div class="card text-center mb-3 service-card">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/cloud-computing.png" class="card-img-top mx-auto d-block" alt="image" style="width: 5rem; height: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title text-dark fs-3">Infrastructure Solutions</h5>
                            <p class="card-text text-secondary fs-5">We provide building robust, secure &amp; scalable infrastructure solutions that support every modern business need.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <a href="https://images.google.com/" class="text-decoration-none">
                    <div class="card text-center mb-3 service-card">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/categories.png" class="card-img-top mx-auto d-block" alt="image" style="width: 5rem; height: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title text-dark fs-3">Applications</h5>
                            <p class="card-text text-secondary fs-5">We enhance application performance &amp; data management for improved insights, decision-making &amp; user experiences.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <a href="https://images.google.com/" class="text-decoration-none">
                    <div class="card text-center mb-3 service-card">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/customer-service.png" class="card-img-top mx-auto d-block" alt="image" style="width: 5rem; height: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title text-dark fs-3">Tech Services</h5>
                            <p class="card-text text-secondary fs-5">We handle your IT operations with reliability, efficiency &amp; expert management, letting you focus on your core business activities.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";
export default {
    name: "Index",
    layout: Layout,
}
</script>

<style scoped>
.service-card {
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    background-color: #11b9d6; /* Change to your desired hover color */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Adds shadow on hover */
}
</style>
