<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">TELECOM INFRASTRUCTURE & APPLICATIONS</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-7.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Telecom Infrastructure & Applications</h1>
                    <p class="section-description text-muted">
                        Technocare Orbit helps Telcos build robust, vendor-agnostic and automated networks, enabling them to deliver immersive services and sustain their business in an increasingly digital world. With our solutions, Telcos can enhance service delivery, optimize operational costs, and drive innovation for their customers.
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
                            <h5>5G Evolution</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                As the telecommunications industry transitions to 5G, Telcos have the opportunity to unlock transformational use cases and revenue streams. 5G will provide ultra-high speeds, low latency and support for massive connections, enabling new services such as IoT-based applications and private 5G networks. Technocare Orbit assists Telcos in deploying 5G private networks and leveraging edge computing to maximize the potential of 5G infrastructure. We provide end-to-end expertise in automation, application modernization, AI, and telecom solutions to help Telcos deliver next-gen services, drive IoT adoption and monetize their 5G investments effectively.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Open Networks</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Open Networks are a key enabler for Telcos to build flexible, scalable, and cost-effective networks. By adopting open, standard-based and disaggregated technologies, Telcos can create vendor-agnostic networks that reduce CAPEX and OPEX while improving network efficiency. Technocare Orbit helps Telcos implement open network solutions through a broad ecosystem of partners and expert professional services. We work closely with Telcos to integrate open technologies into their legacy networks, enhancing configurability, scalability, and speed of convergence, ensuring they stay ahead in a fast-evolving market.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Network Automation & Orchestration</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Open Networks are a key enabler for Telcos to build flexible, scalable, and cost-effective networks. By adopting open, standard-based and disaggregated technologies, Telcos can create vendor-agnostic networks that reduce CAPEX and OPEX while improving network efficiency. Technocare Orbit helps Telcos implement open network solutions through a broad ecosystem of partners and expert professional services. We work closely with Telcos to integrate open technologies into their legacy networks, enhancing configurability, scalability, and speed of convergence, ensuring they stay ahead in a fast-evolving market.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Consultancy & Professional Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                The future of service provider networks will be hybrid, combining conventional 3GPP standards with emerging open standards, leveraging both internal and external cloud infrastructure. Consultancy and professional services from Technocare Orbit help Telcos navigate this transformation by offering insights, strategy, and expertise for adopting and implementing hybrid and 5G networks. Our consultancy services guide Telcos on their digital journey, ensuring they remain relevant and competitive in the dynamic telecom industry. Additionally, Technocare Orbit works as a service partner for select OEMs, providing high-quality professional services to reduce overall solution costs while ensuring competitive pricing and the successful deployment of end-to-end solutions.
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
    name: "TelecomInfrastructure",
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
