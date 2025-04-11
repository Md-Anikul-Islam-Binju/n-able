<template>
    <!-- header -->
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">THE TEAM</h1>
            <p class="lead fw-bold fs-5">Highly Skilled Professionals</p>
        </div>
    </header>

    <section class="section-ab-3 position-relative py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="text-dark">
                        We are backed by a highly skilled and diverse group of over 300 professionals, each bringing a wealth of expertise across a range of domains. With a strong focus on innovation, the team combines deep technical knowledge with industry best practices to deliver cutting-edge technology solutions tailored to ever-changing industry requirements. Technocare Orbit commitment to continuous learning and staying at the forefront of emerging technologies makes its team a key driver of the company's success.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="team-img">
                        <img src="https://www.n-able.biz/wp-content/uploads/2025/01/146187.jpg" alt="Team Image" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Board of Directors -->
    <section class="section-ab-3 position-relative py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-lg-12">
                    <h2 class="text-primary">Our Board of Directors</h2>
                    <p class="text-muted">
                        Technocare Orbit is led by a team of accomplished business leaders and technology experts, with a proven track record of leading successful organizations in South East Asia. Led by strong corporate governance principles and backed by close relationships with technology partners, the leadership at N-able is geared to take on the challenges faced by our clients and create impactful, sustainable solutions.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
                <div  class="col" v-for="(team, index) in teams" :key="index">
                    <div class="card border-0 shadow-sm p-3 text-center">
                        <img :src="baseUrl + '/images/team/' + team.image" alt="Buddhike Illangatillake" class="rounded-circle mx-auto" width="150" height="150">
                        <h3 class="mt-3">{{ team.name }}</h3>
                        <p class="text-primary h5">{{ team.designation }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container-fluid h-25">
        <div class="row h-25 justify-content-center align-items-center">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading-2 text-primary">
                    Our Senior Leadership
                </h2>
                <p class="section-description text-muted">
                    Technocare Orbit is led by a team of industry veterans, who collectively bring decades of experience to the table.
                    The leadership team is invested in mentoring and training the next generation of IT Professionals in Sri Lanka,
                    and do so in every interaction they get.
                </p>
            </div>
        </div>
    </section>

</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "Team",
    layout: Layout,
    props: {
        teams: Array,
    },
    computed: {
        baseUrl() {
            return window.location.origin;
        },
    },
}
</script>

<style scoped>

</style>
