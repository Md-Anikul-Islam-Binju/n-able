<template>

    <!-- header -->
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">OUR KEY PARTNERS</h1>
        </div>
    </header>

    <section class="container text-center mt-5">
        <h5 class="mb-5 text-black-50">
            Technocare Orbit has an extensive partner network, consisting of world-class brands across our technology solutions portfolio.
            The strength of these top-tier partnerships provide yet another value addition enjoyed by our customers.
        </h5>
    </section>


    <!-- Our Key Partners -->
    <section class="py-5 bg-white">
        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-4">
                <!-- First Row -->
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-1.webp" class="card-img-top" alt="Image 1">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-2.webp" class="card-img-top" alt="Image 2">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-3.webp" class="card-img-top" alt="Image 3">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-4.webp" class="card-img-top" alt="Image 4">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-5.webp" class="card-img-top" alt="Image 5">
                    </div>
                </div>
                <!-- Second Row -->
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-6.webp" class="card-img-top" alt="Image 6">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-7.webp" class="card-img-top" alt="Image 7">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-8.webp" class="card-img-top" alt="Image 8">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-9.webp" class="card-img-top" alt="Image 9">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-10.webp" class="card-img-top" alt="Image 10">
                    </div>
                </div>
                <!-- Third Row -->
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-11.png" class="card-img-top" alt="Image 11">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-12.webp" class="card-img-top" alt="Image 12">
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light">
                        <img src="frontend/images/logo/logo-13.webp" class="card-img-top" alt="Image 13">
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "Partners",
    layout: Layout,
}
</script>

<style scoped>

</style>
