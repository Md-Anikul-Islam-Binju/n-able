<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">EXTRA-LOW VOLTAGE SOLUTIONS</h1>
            </div>
        </div>
    </header>


    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-6.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Extra-Low Voltage Solutions</h1>
                    <p class="section-description text-muted">
                        Technocare Orbit Extra Low Voltage (ELV) Solutions provide businesses with state-of-the-art, reliable and energy-efficient technologies for a wide range of applications. Our ELV systems are designed to enhance the operational efficiency, security and management of your infrastructure. From structured cabling to advanced building management, our solutions enable businesses to streamline operations, improve safety and reduce costs while ensuring that all systems are fully integrated and optimized for modern needs. With N-able, businesses can leverage innovative ELV systems to support seamless connectivity, security and efficient management of their facilities.
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
                            <h5>Structured Cabling Systems (SCS)</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Structured Cabling Systems (SCS) provide the backbone for your organization’s network infrastructure. Our SCS solutions are designed to support high-speed data transmission, improve network efficiency and reduce maintenance costs. We implement flexible, scalable cabling systems that can easily accommodate future growth and technology upgrades, ensuring reliable connectivity for voice, data, video and other critical communication services within your business environment.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Automatic Infra Management Solutions (AIM)</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Automatic Infra Management Solutions (AIM) offer businesses intelligent automation to manage and monitor infrastructure in real-time. Our AIM systems allow businesses to optimize the performance of IT, energy and other facility systems by providing centralized control, remote monitoring and predictive maintenance capabilities. With AIM, organizations can streamline operations, minimize downtime and enhance overall efficiency by proactively managing their infrastructure assets.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Access Control Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Access Control Solutions provide businesses with secure, scalable and easy-to-manage systems to control access to critical areas. Our solutions integrate biometric, card-based and mobile access technologies to provide robust security while enabling smooth and efficient user access management. With real-time monitoring, reporting and audit trails, businesses can ensure that their premises remain secure and compliant with industry standards.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Public Addressing (PA) Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Public Addressing (PA) Solutions help businesses enhance communication across their facilities with clear, reliable and effective audio systems. Our PA systems are ideal for announcements, emergency communications, and general notifications, providing businesses with a flexible solution for both routine and emergency situations. Whether for large offices, warehouses or public spaces, N-able’s PA solutions ensure that critical messages are conveyed clearly and promptly.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>IP Surveillance & Video Analytics</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit IP Surveillance & Video Analytics solutions provide businesses with comprehensive security monitoring and intelligent insights. Our IP-based surveillance systems offer high-definition video capture, remote access and advanced video analytics to enhance security and operational efficiency. By leveraging machine learning and AI, our systems can identify anomalies, track behavior and provide actionable insights that help businesses improve safety and security while reducing manual monitoring efforts.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Physical Security Information Management (PSIM)</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Physical Security Information Management (PSIM) solutions offer businesses a unified platform for managing and integrating all physical security systems. From surveillance cameras to access control systems, PSIM centralizes security data and provides real-time monitoring, incident management and reporting. With PSIM, businesses can respond faster to security threats, optimize resource allocation and improve overall situational awareness across their premises.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Turnstile, Barrier Gates and Swing Gates & Car Park Management</h5>
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit offers Turnstile, Barrier Gates and Swing Gates & Car Park Management solutions that provide businesses with secure, efficient access control and parking management systems. Our solutions help control the flow of people and vehicles, ensuring smooth operations while enhancing security. With features like automatic access, real-time monitoring and detailed reporting, businesses can improve safety, manage visitor traffic, and optimize parking space utilization.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 8 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Building Management System (BMS)</h5>
                        </button>
                    </h2>
                    <div id="collapse-8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Building Management System (BMS) integrates and automates the management of various building systems such as HVAC, lighting, energy, security and more. Our BMS solutions provide businesses with centralized control over their facilities, enabling real-time monitoring, optimization of energy use, and enhanced operational efficiency. With a BMS in place, businesses can reduce energy consumption, improve comfort, and ensure the safe and efficient operation of their buildings.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 9 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Guest Room Management Services (GRMS)</h5>
                        </button>
                    </h2>
                    <div id="collapse-9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Guest Room Management Services (GRMS) offer hospitality businesses advanced control and automation of guest room systems. Our GRMS solutions integrate lighting, climate control, entertainment, security and communication systems, providing guests with a seamless experience. Businesses can improve guest satisfaction, reduce energy consumption and enhance operational efficiency by automating and centralizing room management functions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 10 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Electrical Systems Design and Build</h5>
                        </button>
                    </h2>
                    <div id="collapse-10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Electrical Systems Design and Build services provide businesses with tailored electrical infrastructure solutions to meet the specific requirements of their facilities. From design to implementation, we deliver high-quality, reliable electrical systems that ensure optimal performance, energy efficiency and safety. Whether you need to upgrade existing infrastructure or build new systems from the ground up, N-able’s expertise ensures that your electrical systems are scalable, safe and aligned with industry standards.
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
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
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

export default {
    name: "VoltageSolutions",
    layout: Layout,
}
</script>

<style scoped>

</style>
