<template>
    <!-- header -->

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">APPLICATIONS</h1>
        </div>
    </header>


    <!-- Centered container -->

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col">
                    <Link href="/automation">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-9.webp" class="card-img-top custom-img" alt="Automation" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Automation</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <Link href="/applicationIntegration">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-10.webp" class="card-img-top custom-img" alt="Application Modernization" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Application Modernization & Integration</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <Link href="/bfsiApplications">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-11.webp" class="card-img-top custom-img" alt="BFSI Applications" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">BFSI Applications</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 4 -->
                <div class="col">
                    <Link href="/dataAnalytics">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-12.webp" class="card-img-top custom-img" alt="Data & Analytics" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Data & Analytics</h5>
                            </div>
                        </div>
                    </Link>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "Applications",
    layout: Layout,
}
</script>

<style scoped>

</style>
