<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">VIRTUALIZATION & CLOUD</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-2.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Virtualization & Cloud</h1>
                    <p class="section-description text-muted">
                        Our Virtualization and Cloud practice has evolved to address the growing complexity of modern infrastructure needs. With a cloud-first, software-centric approach, we design and implement scalable solutions tailored to your unique requirements. From virtualized servers, storage, and networks to serverless cloud platforms, our consultants leverage years of experience across various industries to help you build an agile, future-proof infrastructure. We ensure that your dynamic workloads are supported by flexible, high-performance architectures that can adapt to your business’s evolving demands, driving both efficiency and innovation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-gap grey-sec single-service-sec py-5">
        <div class="container">
            <h2 class="section-heading-2 text-center text-color mb-5 fw-bold">
                Our Solutions
            </h2>

            <div class="accordion" id="accordionExample">

                <!-- Accordion Item 1 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Agile infrastructure</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Agile Infrastructure services provides you with the expertise and experience required to architect, design, and deploy your own Software Defined Data Centre aligned to provide true agility demanded by your own workloads. Our architects and engineers will provide right expertise and skill set required to build your smart on-prem IT infrastructure from building virtual server, storage and network designs to delivering disaster tolerant containerization platforms.
                            </p>
                            <ul class="mb-4">
                                <li>Virtualization driven workload consolidation</li>
                                <li>Data Centre Network Virtualization</li>
                                <li>Software Defined Storage (SDS) implementation</li>
                                <li>Container based platform implementation</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Middleware resilience</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Middleware Resilience services ensure that your critical applications remain highly available and disaster-tolerant. By designing robust middleware architectures, we support the seamless operation of services that modern applications depend on. Whether it’s for real-time data processing, transaction management, or communication between disparate systems, our solutions help you maintain business continuity, minimize downtime and safeguard against service disruptions. With a focus on scalability and fault tolerance, we provide the resilience needed to keep your services running smoothly, even in the face of failures or unexpected challenges.
                            </p>
                            <ul class="mb-4">
                                <li>Application platform resilience</li>
                                <li>Message Oriented Middleware resilience</li>
                                <li>Integration platform resilience</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Disaster resilience and recovery</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our disaster resilience and recovery services help you architect and design your application landscape to be resilient to disruptions and disasters. We analyse your application landscape across on-premises and cloud, understand the application lifecycle and their complex interdependencies and develop a living disaster resilience plan and strategy depending on resilience and recovery needs for each business services delivered by your applications. <br><br>
                                We evolve this strategy into an executable plan and help you implement, validate, evolve, and maintain it.
                            </p>
                            <ul class="mb-4">
                                <li>Storage based disaster tolerance</li>
                                <li>Database level disaster tolerance</li>
                                <li>Cloud based disaster tolerance</li>
                                <li>IT Disaster Recovery planning services</li>
                                <li>Centralized backup & recovery</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Cloud readiness and migration</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Irrespective of where you are in your cloud journey, our cloud readiness and migration services will help you decide how and when your on-prem workloads shall be migrated to the cloud so that you realize the anticipated benefits, while delivering much improved experiences to the users. <br> <br>
                                We deep-dive into your on-prem workloads, analyse your existing operational and security policies in the alongside with your desired business outcomes of migrating into the cloud. Then, we help you map a strategy to achieve those outcomes depending on the capabilities of the major public cloud providers or local providers of cloud services and execute the migration for you.
                            </p>
                            <ul class="mb-4">
                                <li>Private cloud build</li>
                                <li>Public cloud migration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Big Data infrastructure</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Our big data infrastructure services will help build the data lake architecture that best suits your data strategy from ingestion to curation to processing and delivering the expected business outcomes. Using an innovative combination of Hadoop technologies with the right mix of NoSQL databases, we can help you architect, design, deploy and maintain your big data infrastructure.
                            </p>
                            <ul class="mb-4">
                                <li>NoSQL database resilience</li>
                                <li>Hadoop ecosystem design and implementation</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data centre relocation</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Our data centre relocation services take out your headache of managing multiple project work streams across different disciplines. Our relocation engineers analyse your workloads, their internal and external connectivity requirements, interdependencies and the capabilities of the chosen Data Centre provider. They design and plan for verification tests and employs technical experts in different fields to carry out the relocation as part of a well thought out programme.
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
    name: "Virtualization",
    layout: Layout,
}
</script>

<style scoped>

</style>
