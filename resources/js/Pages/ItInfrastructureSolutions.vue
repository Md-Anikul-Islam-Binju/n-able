<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">IT INFRASTRUCTURE SOLUTIONS</h1>
            </div>
        </div>
    </header>

    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-4.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">IT Infrastructure Solutions</h1>
                    <p class="fw-bold">IT Systems Infrastructure</p>
                    <p class="section-description text-muted">
                        Technocare Orbit IT Systems Infrastructure solutions provide businesses with the foundation they need to support and scale their technology operations. By delivering robust, flexible and secure infrastructure, we help organizations optimize their IT environments, improve efficiency and ensure seamless integration across systems. Our solutions are designed to meet the evolving needs of businesses, enabling them to stay agile, reduce costs and achieve greater operational resilience in today’s dynamic technology landscape.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-gap grey-sec single-service-sec py-5">
        <div class="container">
            <h1 class="section-heading-2 text-center text-color mb-5 fw-bold">
                Our Solutions
            </h1>

            <div class="accordion" id="accordionExample">

                <!-- Accordion Item 1 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Computer & Storage Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Computer & Storage Solutions provide businesses with resilient, scalable infrastructure to meet the growing demands of modern IT environments. Our solutions ensure that organizations can efficiently manage and store critical data while optimizing their computing resources. By offering flexible and reliable systems, we help businesses maintain high performance, enhance productivity, and scale operations seamlessly.
                            </p>
                            <ul class="mb-4">
                                <li>Intel (x86) Based Servers</li>
                                <li>IBM Power Systems (AIX)</li>
                                <li>SAN/NAS Storage</li>
                                <li>Software Defined Storage</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Business Continuity Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Business Continuity Solutions are designed to ensure organizations remain operational even during unforeseen disruptions. Our solutions protect critical data and applications by ensuring they are quickly recoverable, minimizing downtime and preserving business operations. With a focus on reliability and resilience, we help businesses maintain continuity and secure their long-term success.
                            </p>
                            <ul class="mb-4">
                                <li>Disaster Recovery</li>
                                <li>Backup and Recovery</li>
                                <li>Remote Replication / Copy</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Middleeware Platforms</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Middleware Platforms provide the essential technology needed to support application development, integration, and management. These platforms enable businesses to optimize system performance, enhance connectivity, and streamline operations. By ensuring seamless communication between applications, they help businesses improve efficiency and reduce complexity in managing IT infrastructure.
                            </p>
                            <ul class="mb-4">
                                <li>Database Solutions</li>
                                <li>Java Middleware Platforms</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Virtuailzation & Containerization</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Virtualization & Containerization Solutions optimize IT environments by enabling businesses to better allocate resources, increase flexibility, and improve scalability. These solutions reduce operational costs while ensuring efficient application deployment and management. With enhanced agility and streamlined operations, businesses can respond more rapidly to changing demands and market conditions.
                            </p>
                            <ul class="mb-4">
                                <li>Infrastructure Virtualization</li>
                                <li>Containerization and Application Modernization Platforms</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Big Data Platform</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Big Data Platforms empower businesses to manage, process, and analyze large volumes of data. These solutions enable organizations to extract valuable insights from complex datasets, driving informed decision-making and innovation. By offering the necessary infrastructure to support big data initiatives, we help businesses unlock the full potential of their data and stay competitive in an increasingly data-driven world.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="consultation-section">
        <div class="container py-5">
            <div class="row">
                <!-- Left Side: Contact Info -->
                <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 60vh;">
                    <div>
                        <h1 class="fw-bold">Sign up for a consultation</h1>
                        <p>Our team of experts will get in touch with you to assist you on your journey.</p>
                    </div>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <form @submit.prevent="submitForm">
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" v-model="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" v-model="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" v-model="phone" class="form-control" placeholder="Enter your phone number">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea v-model="message" class="form-control" rows="4" placeholder="Your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</template>

<script>
import Layout from "../frontend/Layout.vue";
import {router} from "@inertiajs/vue3";

export default {
    name: "ItInfrastructureSolutions",
    layout: Layout,
    data() {
        return {
            name: '',
            email: '',
            phone: '',
            message: ''
        }
    },

    methods: {
        submitForm() {
            router.post('/contact-store', {
                name: this.name,
                email: this.email,
                phone: this.phone,
                message: this.message,
            }, {
                onSuccess: () => {
                    // Reset form fields
                    this.name = '';
                    this.email = '';
                    this.phone = '';
                    this.message = '';
                },
                onError: (errors) => {
                    console.log(errors);
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
