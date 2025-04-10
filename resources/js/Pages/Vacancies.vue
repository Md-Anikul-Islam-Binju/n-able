<template>
    <!-- header -->
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">VACANCIES</h1>
            <p class="lead fw-bold fs-5">Join us</p>
        </div>
    </header>

    <!-- Vacancies -->
    <section class="section-4 position-relative py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 bg-info text-white">
                        <h4 class="mt-3 text-truncate">Associate Business Development Managers</h4>
                        <br>
                        <div class="text-info text-light">
                            <p><i class='bx bxs-map'></i> Colombo, Sri Lanka</p>
                            <p><i class='bx bxs-time-five'></i> On site - Full Time</p>
                            <p><i class='bx bxs-calendar-alt'></i> November 9, 2024</p>
                        </div>
                        <Link class="btn btn-secondary" href="/associateBusiness" role="button">Apply Now</Link>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 bg-info text-white">
                        <h4 class="mt-3 text-truncate">Call Centre Executive</h4>
                        <br>
                        <div class="text-info text-light">
                            <p><i class='bx bxs-map'></i> Colombo, Sri Lanka</p>
                            <p><i class='bx bxs-time-five'></i> On site - Full Time</p>
                            <p><i class='bx bxs-calendar-alt'></i> September 10, 2024</p>
                        </div>
                        <Link class="btn btn-secondary" href="/callCentre" role="button">Apply Now</Link>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 bg-info text-white">
                        <h4 class="mt-3 text-truncate">Senior Business Development Manager – Public Sector</h4>
                        <br>
                        <div class="text-info text-light">
                            <p><i class='bx bxs-map'></i> Colombo, Sri Lanka</p>
                            <p><i class='bx bxs-time-five'></i> On site - Full Time</p>
                            <p><i class='bx bxs-calendar-alt'></i> November 13, 2024</p>
                        </div>
                        <Link class="btn btn-secondary w-0" href="/seniorBusiness" role="button">Apply Now</Link>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "Vacancies",
    layout: Layout,
}
</script>

<style scoped>

</style>
