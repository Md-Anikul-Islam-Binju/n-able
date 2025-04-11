<template>

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold">ASSOCIATE BUSINESS DEVELOPMENT MANAGERS</h1>
            </div>
        </div>
    </header>



    <section class="section-contact-1 section-gap py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="section-description text-center text-muted mb-4">
                        If you are passionate about tech and eager to drive growth, jump in as an
                        <strong>Associate Business Development Manager</strong> and get hands-on experience
                        with the latest tech innovations, while learning from the best in the game!
                    </p>

                    <h4 class="fw-bold">Responsibilities</h4>
                    <p class="mb-4">
                        Conduct market analysis to identify opportunities, monitor trends, competitor actions, and emerging business prospects, while regularly updating the lead database to ensure data integrity and support data-driven decision-making <br>
                        Support communication efforts while collaborating with Sales, Marketing, and technology / Innovation teams to drive lead generation and strengthen brand presence. <br>
                        Assisting to enhance Technocare Orbit  industry presence and thought leadership through company events, webinars and conferences.
                    </p>

                    <h4 class="fw-bold">Requirements</h4>
                    <p class="mb-4">
                        Currently pursuing a Bachelor’s Degree in Marketing, Management, or a related discipline.
                        Exceptional written and verbal communication skills. <br>
                        Proficient in conducting detailed online research. <br>
                        Strong interest in how digital marketing strategies drive lead generation and contribute to business growth.Self-starter with a professional, outgoing demeanor and a talent for building meaningful relationships.
                    </p>

                    <h4 class="fw-bold">About Technocare Orbit </h4>
                    <p class="mb-4">
                        We are a leading industry giant boasting 16 years of expertise in delivering innovative IT management <br>
                        solutions. With a global presence spanning key markets including Singapore, Bangladesh, the Middle East and the East Asia, we’re uniquely positioned to empower businesses worldwide to innovate, optimize, and grow.
                    </p>

                    <p class="text-center fw-bold">
                        If you believe you can contribute to our success and wish to join our team,
                        please submit your CV to <a href="support@technocareorbit.io" class="text-decoration-none">support@technocareorbit.io</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "AssociateBusiness",
    layout: Layout,
}
</script>

<style scoped>

</style>
