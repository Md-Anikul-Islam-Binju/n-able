<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">INDUSTRIAL INTERNET OF THINGS (IIoT)</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-8.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Industrial Internet of Things (IIoT)</h1>
                    <p class="section-description text-muted">
                        At Technocare Orbit, we help businesses harness the power of the Industrial Internet of Things (IIoT) with solutions designed to address diverse industry needs. By connecting devices, systems, and processes, our offerings enable smarter, data-driven decisions. Through real-time monitoring, predictive analytics and automation, we enhance efficiency, improve safety and reduce costs. With innovative technology and seamless integration, our IIoT solutions ensure businesses stay competitive, agile and ready for future challenges.
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
                            <h5>Smart Ports</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  IIoT solutions for smart ports empower businesses to optimize port operations by enhancing safety, efficiency, and decision-making. These solutions address the complexities of modern port environments, ensuring seamless workflows, real-time monitoring and improved operational visibility. By integrating advanced technology, we enable ports to handle increasing demands while maintaining compliance and safety standards.
                            </p>
                            <h5 class="fw-bold">Our solutions include :</h5>
                            <ul class="mb-4">
                                <li>Dangerous Gas Monitoring</li>
                                <li>Data Center Monitoring</li>
                                <li>Driver Fatigue Management and Video Analytics</li>
                                <li>Rubber Tire Gantry Crane Monitoring</li>
                                <li>Reefer Monitoring</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Smart fleets</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our smart fleet solutions are designed to enhance the management and efficiency of fleet operations. From real-time tracking to driver monitoring, these offerings ensure safer transportation, optimized logistics, and reduced operational costs. Technocare Orbit solutions help businesses achieve seamless coordination and resource allocation while maintaining high levels of safety and productivity.
                            </p>
                            <h5 class="fw-bold">Our solutions include :</h5>
                            <ul class="mb-4">
                                <li>Smart Fleet Tracking Solutions</li>
                                <li>Vehicle State Monitoring & Driver Fatigue Monitoring</li>
                                <li>Smart Logistic Solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Smart Facilities</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit smart facility solutions transform conventional spaces into intelligent environments. By leveraging IIoT technology, we enable real-time monitoring of infrastructure, environmental conditions, and operational systems. These solutions help businesses improve energy efficiency, ensure safety, and enhance the comfort and functionality of homes, offices, factories, and other facilities.
                            </p>
                            <h5 class="fw-bold">Our solutions include :</h5>
                            <ul class="mb-4">
                                <li>Smart Homes, Offices, Factories & Buildings</li>
                                <li>Server Site Infrastructure Monitoring</li>
                                <li>Environment Condition Monitoring</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Smart Manufacturing</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit IIoT solutions for manufacturing streamline processes, enhance productivity, and reduce waste. By automating critical operations and integrating advanced monitoring technologies, we help businesses modernize their production lines and improve supply chain visibility. Our solutions are tailored to drive efficiency and maintain competitiveness in an ever-evolving manufacturing landscape.
                            </p>
                            <h5 class="fw-bold">Our solutions include :</h5>
                            <ul class="mb-4">
                                <li>Process Automation Solutions</li>
                                <li>RFID Solutions</li>
                                <li>Cold Chain Management Solutions</li>
                                <li>Data Acquisition and Remote Terminal Solutions</li>
                                <li>Legacy System Automation solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Value-Added lloT Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                In addition to our core IIoT solutions, Technocare Orbit provides a range of value-added services that amplify the benefits of technology integration. These include advanced analytics, security solutions, and future-ready integrations that ensure seamless operation and long-term adaptability. Our services empower businesses to harness the full potential of IIoT while meeting industry standards and business goals.
                            </p>
                            <h5 class="mb-4">Our solutions include :</h5>
                            <ul class="mb-4">
                                <li>OT Security</li>
                                <li>Data Analytics & Predictions</li>
                                <li>Data Visualization & Representation</li>
                                <li>Future-Ready Technology Integration</li>
                                <li>Big Data Handling</li>
                                <li>Regulatory Compliance</li>
                                <li>Customization & Configurability</li>
                                <li>User Training & Support</li>
                            </ul>
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
    name: "IndustrialInternet",
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
