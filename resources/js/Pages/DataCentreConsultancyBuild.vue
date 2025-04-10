<template>

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">DATA CENTRE CONSULTANCY & BUILD</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-5.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Data Centre Consultancy & Build</h1>
                    <p class="section-description text-muted">
                        Technocare Orbit Data Center Consultancy & Build services empower businesses to design, build and optimize their data centers to support evolving business needs. With extensive experience in constructing some of the largest and most advanced data centers in the region, we provide end-to-end solutions that ensure your infrastructure is scalable, efficient, secure and future-proof. Our expert team delivers strategic consulting, cutting-edge designs and seamless execution to build data centers that meet the highest industry standards, including Tier 3 and Tier 4 certifications.
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
                            <h5>Micro Data Centers ( Tier 3 / Tier 4)</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Micro Data Centers and Edge Centers are designed to support businesses with localized, scalable solutions that meet the demands of modern, distributed environments. Whether it’s a Tier 3 or Tier 4 facility, our micro and edge centers ensure high availability, low latency and robust security. These solutions are ideal for businesses that require proximity to end users, increased processing power and improved network reliability in remote or hard-to-reach locations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Large Data Centers ( Tier 3 / Tier 4)</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit specializes in the design and build of Large Data Centers that meet the most demanding operational and security standards. With a focus on Tier 3 and Tier 4 facilities, we ensure high uptime, redundant systems and enterprise-grade security for mission-critical operations. Our solutions offer businesses the scalability, reliability and flexibility required to support large-scale data operations, cloud computing, and high-performance applications.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>UPS Systems</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit UPS Systems (Uninterruptible Power Supply) are crucial for ensuring continuous power supply in data center environments. We design and implement custom UPS solutions to safeguard critical infrastructure from power disruptions. Our UPS systems help businesses maintain consistent operations during power failures, protect sensitive equipment from damage and avoid costly downtime
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Center Cooling Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Efficient cooling is essential for maintaining optimal performance and longevity of data center equipment. Technocare Orbit Data Center Cooling Solutions are designed to manage temperature, humidity and airflow effectively to reduce energy consumption while preventing overheating. Our cooling solutions include precision air conditioning, liquid cooling and other cutting-edge technologies to ensure that your data center runs at peak efficiency.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Center Infrastructure Management (DCIM)</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Data Center Infrastructure Management (DCIM) solutions offer businesses centralized control over all aspects of data center operations, from power and cooling to security and space utilization. By implementing DCIM, we help businesses gain real-time visibility into their infrastructure, enabling proactive monitoring, predictive maintenance and data-driven decision-making to optimize performance and reduce costs.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Power Metering Monitoring & Management</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Power Metering Monitoring & Management solutions enable businesses to track and control power consumption within their data centers. Our systems provide real-time monitoring of power usage, identify inefficiencies and offer insights to reduce energy consumption and lower operational costs. By optimizing power use, businesses can improve sustainability, reduce their carbon footprint and ensure cost-effective operations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Center Co-Location Evaluation</h5>
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Data Center Co-location Evaluation services help businesses assess the viability of hosting their IT infrastructure in third-party data centers. We assist in evaluating the location, security, power, cooling and network capabilities of potential co-location providers, ensuring businesses make informed decisions that align with their operational needs and budget. This service supports businesses looking for flexible and scalable data center solutions without the complexity of building and managing their own facilities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 8 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Center Consulting</h5>
                        </button>
                    </h2>
                    <div id="collapse-8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit offers comprehensive Data Center Consulting services to guide businesses through the complex process of building, managing and optimizing their data centers. Our team of experts helps identify the best strategies for scaling, securing and maintaining your data infrastructure. From initial design and planning to ongoing optimization, our consulting services ensure that your data center meets industry standards and is aligned with your business goals.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 9 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Center Testing and Commissioning Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit DC Testing and Commissioning Services ensure that your data center’s systems are thoroughly tested and fully operational before going live. Our testing processes include evaluating electrical systems, cooling efficiency, security protocols and overall infrastructure performance. By commissioning your data center with our expert team, businesses can be confident that their infrastructure is ready to support mission-critical operations from day one.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 10 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Center Managed Operation Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Data Center Managed Operations Services provide businesses with ongoing support and management to ensure that their data centers run smoothly and efficiently. Our team offers continuous monitoring, troubleshooting, performance optimization and maintenance to reduce downtime, enhance reliability and ensure operational excellence. With our managed services, businesses can focus on their core activities while we handle the complexities of day-to-day data center operations.
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
    name: "DataCentreConsultancyBuild",
    layout: Layout,
}
</script>

<style scoped>

</style>
