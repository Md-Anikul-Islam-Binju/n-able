<template>
    <!-- header -->
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">WHY WORK WITH US?</h1>
            <p class="lead fw-bold fs-5">Join us</p>
        </div>
    </header>

    <section class="section-ab-2 position-relative py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class=" text-muted">
                        At Technocare Orbit , we believe in fostering a dynamic and inclusive work environment where innovation thrives. As a part of our team, you'll have the opportunity to collaborate with talented professionals, work on cutting-edge technologies, and contribute to solutions that empower businesses worldwide.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-2">
                        <img src="frontend/images/slide.jpg"
                             alt="image" class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 380px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Us -->
    <section class="section-4 position-relative py-5 bg-light">
        <div class="container">

            <div class="row g-4">
                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/high-quality.png" alt="End-to-End Solution Portfolio" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Opportunities for Advancement</h4>
                        <p class="text-muted">We provide ongoing training and development programs to help you enhance your skills and knowledge.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/rating.png" alt="Industry-Leading Professionals" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Continuous Learning</h4>
                        <p class="text-muted">We provide ongoing training and development programs to help you enhance your skills and knowledge.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/themes/nable-theme/assets/img/price-tag.png" alt="Reliable 24/7 Support" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Competitive Salaries</h4>
                        <p class="text-muted">We offer competitive salaries and benefits packages to attract and retain top talent.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/themes/nable-theme/assets/img/price-tag.png" alt="Global Expertise" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Comprehensive Benefits</h4>
                        <p class="text-muted">We provide comprehensive benefits, including health insurance, retirement plans, and other perks.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/themes/nable-theme/assets/img/price-tag.png" alt="Certified Internationally" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Performance-Based Incentives</h4>
                        <p class="text-muted">We offer performance-based incentives to reward and motivate our employees.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/themes/nable-theme/assets/img/price-tag.png" alt="Multi-Vendor" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Employee Engagement</h4>
                        <p class="text-muted">We prioritize employee engagement through team-building activities, social events, and employee recognition programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "WhyWork",
    layout: Layout,
}
</script>

<style scoped>

</style>
