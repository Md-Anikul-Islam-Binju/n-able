<template>

    <!-- slider -->
    <div class="container-fluid p-0">
        <div class="row h-100 align-items-center">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('frontend/images/10.gif'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                        <div class="container h-100 d-flex align-items-center justify-content-start text-start">
                            <div class="banner-content text-white">
                                <h1 class="fs-1">Welcome to Technocare Orbit</h1>
                                <p>Driving Business Growth with Innovative Tech Solutions</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('frontend/images/11.gif'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                        <div class="container h-100 d-flex align-items-center justify-content-start text-start">
                            <div class="banner-content text-white">
                                <h1 class="section-heading white-color js-scroll scrolled fade-in fs-1">
                                    Infrastructure Solutions
                                </h1>
                                <p>Built for Today. Ready for Tomorrow.</p>
                                <a href="https://www.n-able.biz/infrastructure/" class="btn btn-info">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('frontend/images/slide.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                        <div class="container h-100 d-flex align-items-center justify-content-start text-start">
                            <div class="banner-content text-white">
                                <h1 class="fs-1">Applications & Data</h1>
                                <p>Powering Insights, Driving Efficiency</p>
                                <a href="https://www.n-able.biz/applications/" class="btn btn-custom">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="carousel-item" style="background-image: url('frontend/images/slide.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                        <div class="container h-100 d-flex align-items-center justify-content-start text-start">
                            <div class="banner-content text-white">
                                <h1 class="fs-1">Tech Services</h1>
                                <p>Expert Care, Seamless Operations.</p>
                                <a href="https://www.n-able.biz/tech-services/" class="btn btn-info">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <section class="stats-section py-5 bg-light">
        <div class="container mt-5 fs-1 fw-bold">
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="text-center">
                        <div class="card-body">
                            <div class="counter" data-count="16">16</div>
                            <p class="cw-text fs-5">Years of Industry Experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="text-center">
                        <div class="card-body">
                            <div class="counter" data-count="2000">2000</div>
                            <p class="cw-text fs-5">Successful Projects Implemented</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="text-center">
                        <div class="card-body">
                            <div class="counter" data-count="40">40</div>
                            <p class="cw-text fs-5">Industry Awards</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="text-center">
                        <div class="card-body">
                            <div class="counter" data-count="300">300</div>
                            <p class="cw-text fs-5">Team of Industry Specialists</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- services -->
    <section class="container mt-5">
        <div class="d-flix justify-content-center text-center">
            <h1 class="fw-bold">Services</h1>
            <p class="text-black-50 fs-5">We provide comprehensive offerings in infrastructure, applications & data, and managed services, backed by a wide-ranging portfolio that enables organizations to harness technology effectively and achieve their goals.</p>
        </div>
        <br>
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <Link href="/infrastructure" class="text-decoration-none">
                    <div class="card text-center mb-3 service-card">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/cloud-computing.png" class="card-img-top mx-auto d-block" alt="image" style="width: 5rem; height: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title text-dark fs-3">Infrastructure Solutions</h5>
                            <p class="card-text text-secondary fs-5">We provide building robust, secure &amp; scalable infrastructure solutions that support every modern business need. <br><br> </p>
                        </div>
                    </div>
                </Link>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <Link href="/applications" class="text-decoration-none">
                    <div class="card text-center mb-3 service-card">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/categories.png" class="card-img-top mx-auto d-block" alt="image" style="width: 5rem; height: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title text-dark fs-3">Applications</h5>
                            <p class="card-text text-secondary fs-5">We enhance application performance &amp; data management for improved insights, decision-making &amp; user experiences.<br><br></p>
                        </div>
                    </div>
                </Link>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <Link href="/tech" class="text-decoration-none">
                    <div class="card text-center mb-3 service-card">
                        <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/customer-service.png" class="card-img-top mx-auto d-block" alt="image" style="width: 5rem; height: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title text-dark fs-3">Tech Services</h5>
                            <p class="card-text text-secondary fs-5">We handle your IT operations with reliability, efficiency &amp; expert management, letting you focus on your core business activities.</p>
                        </div>
                    </div>
                </Link>
            </div>
        </div>
    </section>



    <!-- Industries We Serve  -->
    <section class="section-3 position-relative py-5">
        <div class="container">
            <h2 class="text-center text-primary fw-bold">Industries We Serve</h2>
            <p class="text-center fw-bold text-muted">
                Leveraging our decades of expertise, we deliver tailored services designed to meet the specific needs of our clients across diverse sectors.
            </p>

            <div class="row justify-content-center g-4">
                <!-- Industry Box 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow industries-card">
                        <div class="industries-box position-relative"
                             style="background-image: url('frontend/images/page/page-15.jpg');">
                            <div class="industries-overlay d-flex align-items-center justify-content-center">
                                <p class="text-white text-center">Financial institutions rely on our solutions to manage critical systems securely and optimize service delivery.</p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="fw-bold">Banking & Finance</h4>
                        </div>
                    </div>
                </div>

                <!-- Industry Box 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow industries-card">
                        <div class="industries-box position-relative"
                             style="background-image: url('frontend/images/page/page-4.webp');">
                            <div class="industries-overlay d-flex align-items-center justify-content-center">
                                <p class="text-white text-center">Our offerings ensure seamless connectivity and efficient operations for telecommunications providers.</p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="fw-bold">Telecommunications</h4>
                        </div>
                    </div>
                </div>

                <!-- Industry Box 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow industries-card">
                        <div class="industries-box position-relative"
                             style="background-image: url('frontend/images/page/page-16.jpg');">
                            <div class="industries-overlay d-flex align-items-center justify-content-center">
                                <p class="text-white text-center">We help governments and public sector organizations enhance security, streamline operations, and ensure compliance.</p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="fw-bold">Governments</h4>
                        </div>
                    </div>
                </div>

                <!-- Industry Box 4 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow industries-card">
                        <div class="industries-box position-relative"
                             style="background-image: url('frontend/images/page/page-17.jpg');">
                            <div class="industries-overlay d-flex align-items-center justify-content-center">
                                <p class="text-white text-center">We help governments and public sector organizations enhance security, streamline operations, and ensure compliance.</p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="fw-bold">Enterprise</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- why choose us page -->
    <section class="section-4 position-relative py-5 bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-5">
                    <h2 class="fs-1 fw-bold text-dark">Why Choose Us?</h2>
                    <h3 class="fs-4 text-info">Partnering for Impact</h3>
                </div>
                <div class="col-lg-7">
                    <p class="text-muted">
                        We don’t just engage; we collaborate with you to drive innovation and achieve your goals. Our expertise & dedication ensure impactful results tailored to your success.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="frontend/images/high-quality.png" alt="End-to-End Solution Portfolio" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">End-to-End Solution Portfolio</h4>
                        <p class="text-muted">Delivering seamless, end-to-end solutions for all your business needs.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="frontend/images/rating.png" alt="Industry-Leading Professionals" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Industry-Leading Professionals</h4>
                        <p class="text-muted">Together, we set the standard as industry-leading professionals.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="frontend/images/bulb.png" alt="Reliable 24/7 Support" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Reliable 24/7 Support</h4>
                        <p class="text-muted">24/7 support from our experts to cater to your business needs.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="frontend/images/global.png" alt="Global Expertise" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Global Expertise</h4>
                        <p class="text-muted">Driving success with a world-class blend of knowledge, innovation, and strategic insight.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="frontend/images/quality.png" alt="Certified Internationally" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Certified Internationally</h4>
                        <p class="text-muted">Globally recognized for excellence with trusted international certifications.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" p-3">
                        <img src="frontend/images/vendor.png" alt="Multi-Vendor" class="img-fluid mx-auto" width="50">
                        <h4 class="mt-3">Multi-Vendor</h4>
                        <p class="text-muted">Offering seamless solutions across a diverse range of trusted vendors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Customers -->
    <div class="container mw-100">
        <div class="slider bg-info" style="height: 22rem;">
            <div class="col text-center">
                <h1 class="fw-bold mb-4 text-light">Our Customers</h1>
            </div>
            <br><br>
            <div class="slide-track gap-4">
                <div class="slide"  v-for="(company, index) in companys" :key="index">
                    <img :src="baseUrl + '/images/company/' + company.image" height="100" width="250" alt="">
                </div>
                <div class="slide"  v-for="(company, index) in companys" :key="index">
                    <img :src="baseUrl + '/images/company/' + company.image" height="100" width="250" alt="">
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Our Global Presence -->
<!--    <section class="position-relative py-5">-->
<!--        <div class="container text-center">-->
<!--            <h2 class="fw-bold text-primary mb-3">-->
<!--                Our Global Presence-->
<!--            </h2>-->
<!--            <p class="text-secondary mb-4">-->
<!--                With a presence spanning multiple countries and regions, we are proud to bring our expertise to businesses & organizations across the world. From local initiatives to large-scale global projects, our solutions empower industries across diverse markets, helping them thrive.-->
<!--            </p>-->
<!--            <img alt="map"-->
<!--                 src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/themes/nable-theme/assets/img/map.png"-->
<!--                 class="img-fluid rounded shadow"-->
<!--                 decoding="async">-->
<!--        </div>-->

<!--        &lt;!&ndash; Vanta.js Background &ndash;&gt;-->
<!--        <div id="vantajs" class="position-absolute top-0 start-0 w-100 h-100">-->
<!--            <canvas class="vanta-canvas"></canvas>-->
<!--        </div>-->
<!--    </section>-->


    <!-- News & Events -->
    <div class="container">
        <div class="d-flix justify-content-center text-center" >
            <h1>News & Events</h1>
            <p class="text-secondary">Stay updated with the latest news and events from N-able.</p>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col" v-for="(newsEvent, index) in newsEvents" :key="index">
                <div class="card">
                    <img :src="baseUrl + '/images/event/' + newsEvent.image" style="height: 250px;" class="card-img-top" alt="card-1">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{ newsEvent.title }}</h5>
                        <p class="card-text" v-html="getTruncatedText(newsEvent.details)"></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-start fs-6 fw-bold"><i class='bx bxs-calendar'></i>  {{ newsEvent.event_date }}  {{ newsEvent.event_time }}</a>
                            <Link :href="'/newsEventDetails/' + newsEvent.id" class="text-decoration-none text-end fs-1 fw-bold text-danger"><i class='bx bx-right-arrow-alt'></i></Link>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="text-center">
            <Link href="/newsEvent" role="button" class="btn btn-outline-primary rounded-pill fs-5">View more</Link>
        </div>
    </div>
    <br>
    <br>

    <!-- Testimonials -->
    <section class="section-7 section-gap green-sec text-center py-5">
        <div class="container">
            <h2 class="section-heading-2 text-white">Testimonials</h2>
            <p class="section-description text-white">
                Hear what our clients have to say about their journey with Technocare Orbit.
            </p>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <div class="testi-box d-flex flex-column align-items-center">
                            <div class="testi-img">
                                <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/01/adam.png"
                                     alt="Adam Gamage-Brooker" class="rounded-circle" width="100">
                            </div>
                            <h5 class="testi-name text-white mt-3">Adam Gamage-Brooker</h5>
                            <p class="testi-designation text-white">Chief Operating Officer - Muve Colombo</p>
                            <p class="text-white">
                                “We have been utilizing Technocare Orbit Managed IT Services for the past two years at Muve
                                and we are extremely pleased with the level of service provided by them. Their proactive
                                approach and their expertise in managing IT infrastructure has greatly contributed to our
                                operational efficiency.”
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <div class="testi-box d-flex flex-column align-items-center">
                            <div class="testi-img">
                                <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/02/Untitled-design-2025-02-06T135219.717.png"
                                     alt="Professor Gihan Dias" class="rounded-circle" width="100">
                            </div>
                            <h5 class="testi-name text-white mt-3">Professor Gihan Dias</h5>
                            <p class="testi-designation text-white">Domain Registrar & CEO - LK Domain Registry</p>
                            <p class="text-white">
                                “We value our partnership with Technocare Orbit. as a Security Services Provider for
                                LK Domain Registry. Their services have contributed to the reliability and stability of
                                our IT infrastructure.”
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <div class="testi-box d-flex flex-column align-items-center">
                            <div class="testi-img">
                                <img src="https://cdn-ilcobfn.nitrocdn.com/hOBCIaYVVxKXldzbmkRJspxkjJMdNdKB/assets/images/optimized/rev-88a59fa/www.n-able.biz/wp-content/uploads/2025/02/ruwan-wickramarachchi__300x300-1.png"
                                     alt="Dr. Ruwan Wickramarachchi" class="rounded-circle" width="100">
                            </div>
                            <h5 class="testi-name text-white mt-3">Dr. Ruwan Wickramarachchi</h5>
                            <p class="testi-designation text-white">Department of Industrial Management - University of Kelaniya</p>
                            <p class="text-white">
                                “Thanks to Technocare Orbit, we now have a more secure & reliable network performance – ensuring
                                smooth connectivity across our campus. We highly appreciate N-able’s support and look
                                forward to future collaborations.”
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";
export default {
    name: "Index",
    layout: Layout,
    props: {
        newsEvents: Array,
        companys: Array,
    },
    computed: {
        baseUrl() {
            return window.location.origin;
        },
    },
    methods: {
        // Method to truncate the content to 250 words
        getTruncatedText(text) {
            // Remove HTML tags
            let cleanText = text.replace(/<\/?[^>]+(>|$)/g, "");

            // Split the text into words
            const words = cleanText.split(/\s+/);

            // If the text has more than 250 words, truncate it
            if (words.length > 20) {
                return words.slice(0, 10).join(" ") + " ...";
            }

            return cleanText; // Return original text if it's less than 250 words
        },
    },
}
</script>

<style scoped>

</style>
