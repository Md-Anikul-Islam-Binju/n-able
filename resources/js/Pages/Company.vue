<template>
    <!-- header -->
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold">THE COMPANY</h1>
            <p class="lead text-info fw-bold fs-5">Who we are & what we do</p>
        </div>
    </header>

    <!-- Our Identity -->
    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/4565.jpg"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="section-sub-heading-2 text-primary">Our Identity</h4>
                    <h1 class="section-heading-2 text-dark fw-bold">About Technocare Orbit</h1>
                    <p class="section-description text-muted">
                        Technocare Orbit has been established in 2018 with the motto to provide possible best IT and
                        Cyber Security services to our honorable customer following an ethical business model. Now it’s
                        a great opportunity for us to present all about us to our honorable clients, customers, partners
                        and well-wishers with a lot of enthusiasm. Technocare Orbit Ltd is an IT company in Bangladesh
                        that provides IT Solutions to satisfy the needs of the clients. We are very much determined to
                        create expert professionals by imparting corporate trainings. We cherish the desire and
                        dedication which helps us to understand the requirements of a client and to realize the solution
                        that is required.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Journey -->
    <section class="section-ab-2 position-relative py-5 bg-light">
        <div class="container h-50">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h4 class="text-primary">The Journey</h4>
                    <h1 class="text-dark fw-bold">Our History &amp; Legacy</h1>
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
                        <img src="frontend/images/page/2558.jpg"
                             alt="image" class="img-fluid rounded-4 shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Founding Company -->
    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/new69.jpg"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="section-sub-heading-2 text-primary">Our Founding Company</h4>
                    <h1 class="section-heading-2 text-dark fw-bold">We are an Agility Innovation Company</h1>
                    <p class="section-description text-muted">
                        The company has developed not only a strong reputation but also a strong network throughout
                        Bangladesh and has been involved in different activities. This positioning is central to the
                        partnership we propose to tackle some of the immediate challenges within Bangladesh to
                        improve attainment of the nation’s prosperity goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Purpose -->
    <section class="section-ab-2 position-relative py-5 bg-light">
        <div class="container h-25">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="text-dark fw-bold fs-1">Our Purpose</h1>
                    <p class="text-black-50 fade-i fw-bold">Connecting People and Things with Insights for an Efficient and Intelligent World.</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";
export default {
    name: "Company",
    layout: Layout,
}
</script>

<style scoped>

</style>
