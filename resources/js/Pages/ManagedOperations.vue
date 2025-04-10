<template>
    <!-- header -->

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">MANAGED OPERATIONS</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-13.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Managed Operations</h1>
                    <p class="section-description text-muted">
                        Technocare Orbit  Managed Operations provide businesses with comprehensive, proactive IT support to ensure optimal performance, security and reliability of your technology infrastructure. Our managed services offer 24×7 monitoring, security management and ongoing optimization, ensuring that your IT systems run smoothly and securely while allowing you to focus on core business objectives. By leveraging N-able’s expertise, businesses can reduce downtime, minimize risks and improve operational efficiency.
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
                            <h5>24×7 Proactive Monitoring & Escalation</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  24×7 Proactive Monitoring & Escalation ensures that your IT infrastructure is constantly monitored to detect potential issues before they cause disruptions. Our team of experts works around the clock to monitor systems, networks and applications, providing real-time alerts for any anomalies or performance bottlenecks. With proactive escalation procedures in place, issues are addressed swiftly, minimizing downtime and ensuring business continuity.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Managed Security Operations</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  Managed Security Operations provide businesses with robust, around-the-clock protection against cyber threats. Our managed security services encompass threat monitoring, incident response, vulnerability management and continuous security assessments to safeguard your sensitive data and systems. By proactively identifying and mitigating risks, N-able helps protect your organization from evolving threats, ensuring compliance and reducing the likelihood of costly breaches or downtime.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>IT Infrastructure & Data Centre Infra Managed Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  IT Infrastructure & Data Centre Infra Managed Services ensure the stability and performance of your critical IT systems and data centers. From server management to storage, networking and beyond, we provide end-to-end monitoring, management and optimization of your infrastructure. Our team ensures that your IT assets are secure, scalable and aligned with your business needs, reducing the risk of unexpected outages and improving operational efficiency.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>DB, Middleware & Application Support</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  DB, Middleware & Application Support services provide businesses with comprehensive management of databases, middleware and applications critical to day-to-day operations. We ensure that your systems run efficiently, offering ongoing support, performance optimization and troubleshooting. With N-able’s expertise, businesses can reduce downtime, optimize system performance and ensure seamless operations across complex IT environments.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Cloud Resource Monitoring & Management</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  Cloud Resource Monitoring & Management services help businesses optimize their cloud environments, ensuring seamless performance and cost-effectiveness. Our team continuously monitors cloud resources to ensure they meet business requirements while optimizing costs. We provide ongoing management of cloud infrastructure, helping businesses scale resources efficiently and maintain optimal performance while avoiding unnecessary expenses.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Patch / Vulnerability Management</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  Patch / Vulnerability Management services ensure that your systems are always up to date with the latest security patches, minimizing the risk of vulnerabilities. We provide proactive management of patches and updates for operating systems, applications and network devices, reducing the window of exposure to cyber threats. This approach helps businesses maintain a strong security posture, protect sensitive data and stay compliant with industry regulations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Backup & Storage Management</h5>
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  Backup & Storage Management services ensure that your critical business data is securely backed up, easily recoverable and efficiently stored. We manage your backup processes, monitor data integrity and ensure that your storage infrastructure is optimized for both performance and cost. In the event of data loss, our reliable backup solutions enable quick recovery, minimizing downtime and protecting your organization from potential disruptions.
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
    name: "ManagedOperations",
    layout: Layout,
}
</script>

<style scoped>

</style>
