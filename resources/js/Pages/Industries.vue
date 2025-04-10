<template>
    <!-- header -->

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">INDUSTRIES WE SERVE</h1>
        </div>
    </header>

    <section class="container text-center mt-5">
        <h5 class="mb-5 text-black-50">
            As a leading technology solutions provider, Technocare Orbit empowers businesses across industries to achieve growth and efficiency through innovative solutions.
        </h5>
    </section>


    <!-- Banking & Finance -->

    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-15.jpg"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Banking & Finance</h1>
                    <p class="section-description text-muted">
                        Financial institutions trust us to secure critical systems while optimizing service delivery. With solutions designed for compliance and performance, we help banks and financial organizations navigate the complexities of a dynamic landscape.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Telecommunications -->

    <section class="section-ab-2 position-relative py-5 bg-light">
        <div class="container h-50">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-dark fw-bold">Telecommunications</h1>
                    <p class="text-muted">
                        Telecommunications providers depend on our solutions to maintain seamless connectivity and ensure efficient, uninterrupted operations. By leveraging advanced tools tailored to the industry’s needs, we enable improved network reliability and operational scalability.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-2">
                        <img src="frontend/images/page/page-4.webp"
                             alt="image"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Governments -->

    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-16.jpg"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Governments</h1>
                    <p class="section-description text-muted">
                        We help governments and public sector organizations enhance security, streamline operations and ensure compliance with regulatory standards. Through scalable, secure and cost-effective solutions, we support the digital transformation of government services, enabling the efficient delivery of public services and the protection of critical infrastructure.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enterprise -->

    <section class="section-ab-2 position-relative py-5 bg-light">
        <div class="container h-50">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-dark fw-bold">Enterprise</h1>
                    <p class="text-muted">
                        Technological solutions that are being provided by us can atone the need of the clients that
                        includes Customized IT Solutions, Server Configuration and maintenance, Infrastructure
                        Solutions and its Security, Cyber Security, Cloud Solutions, Software Design & Development etc.
                        With a team of some tremendously skilled and certified professionals, we Technocare Orbit Ltd.
                        are very much capable to satisfy any technological needs. Our specialized team has been
                        providing support to small, mid to large organizations.

                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-2">
                        <img src="frontend/images/page/page-17.jpg"
                             alt="image"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "Industries",
    layout: Layout,
}
</script>

<style scoped>

</style>
