<template>
    <!-- header -->

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">INFRASTRUCTURE</h1>
        </div>
    </header>


    <!-- Centered container -->

    <section class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col">
                    <Link href="/cybersecurity">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-1.webp" class="card-img-top custom-img" alt="Cybersecurity" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Cybersecurity</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <Link href="/virtualization">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-2.webp" class="card-img-top custom-img" alt="Virtualization & Cloud" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Virtualization & Cloud</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <Link href="/enterprise">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-3.webp" class="card-img-top custom-img" alt="Enterprise & Data Center Networks" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Enterprise & Data Center Networks</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 4 -->
                <div class="col">
                    <Link href="/itInfrastructureSolutions">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-4.webp" class="card-img-top custom-img" alt="IT Infrastructure Solutions" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">IT Infrastructure Solutions</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 5 -->
                <div class="col">
                    <Link href="/dataCentreConsultancyBuild">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-5.webp" class="card-img-top custom-img" alt="Data Centre Consultancy & Build" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Data Centre Consultancy & Build</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 6 -->
                <div class="col">
                    <Link href="/voltageSolutions">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-6.webp" class="card-img-top custom-img" alt="Extra-Low Voltage Solutions" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Extra-Low Voltage Solutions</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 7 -->
                <div class="col">
                    <Link href="/telecomInfrastructure">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-7.webp" class="card-img-top custom-img" alt="Telecom Infrastructure & Applications" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Telecom Infrastructure & Applications</h5>
                            </div>
                        </div>
                    </Link>
                </div>

                <!-- Card 8 -->
                <div class="col">
                    <Link href="/industrialInternet">
                        <div class="card position-relative">
                            <img src="frontend/images/page/page-8.webp" class="card-img-top custom-img" alt="Industrial Internet of Things (IIoT)" style="height: 22rem; object-fit: cover;">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center text-white bg-dark bg-opacity-50">
                                <h5 class="w-100 m-0 p-2">Industrial Internet of Things (IIoT)</h5>
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
    name: "Infrastructure",
    layout: Layout,
}
</script>

<style scoped>

</style>
