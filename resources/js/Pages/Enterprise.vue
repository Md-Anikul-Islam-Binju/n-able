<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">ENTERPRISE & DATA CENTER NETWORKS </h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-3.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Enterprise & Data Center Networks</h1>
                    <p class="section-description text-muted">
                        Our Enterprise & Data Center Networks solutions provide businesses with the robust, scalable,and high-performance networking infrastructure needed to support modern operations. Our offerings enable businesses to optimize their network performance, ensure seamless connectivity and maintain secure, reliable communication across all levels of their IT ecosystem. Whether you need to enhance your data center’s efficiency or improve your enterprise network’s flexibility and security, N-able’s solutions offer tailored support for businesses to meet their unique demands and challenges.
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
                            <h5>Software Defined Data Center Networks</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Software Defined Data Center (SDDC) Networks deliver enhanced flexibility, scalability and centralized management of your data center’s infrastructure. By decoupling the network from hardware, our SDDC solutions allow businesses to automate, optimize and dynamically adjust their data center networks according to evolving business needs. This software-driven approach ensures better resource utilization, reduced operational costs and improved agility for businesses looking to stay competitive in today’s fast-paced digital landscape.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Enterprise Networks - LAN / WLAN / WAN / SDWAN</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit provides end-to-end solutions for Enterprise Networks, including LAN, WLAN, WAN and SDWAN. Our network solutions help businesses optimize connectivity within their local networks (LAN), enable seamless wireless communications (WLAN), and establish robust wide-area network (WAN) architectures. Through SDWAN, we offer intelligent, cloud-delivered network management that enhances application performance, reduces costs and improves connectivity across multiple locations. With N-able’s enterprise network solutions, businesses can achieve reliable, secure and high-performance connectivity to support growth and operational efficiency.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Networks Behavioral Analytics</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Network Behavioral Analytics provides businesses with the ability to gain deeper insights into network performance and security by analyzing user and application behavior. Our analytics tools detect abnormal network activity, identify potential security threats and optimize overall network performance. By understanding usage patterns, businesses can improve network reliability, troubleshoot issues more effectively and mitigate risks before they become problems.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Link Optimization Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Link Optimization Solutions are designed to enhance the efficiency and performance of your network links, reducing latency and ensuring consistent data flow. Our solutions prioritize traffic, optimize bandwidth usage and improve the performance of critical applications. Whether you’re managing voice, video or data traffic, N-able’s link optimization solutions ensure that your business’s network runs smoothly and supports demanding applications with minimal disruption.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Network Automation</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Network Automation solutions streamline network management by automating routine tasks such as configuration, monitoring, and troubleshooting. By reducing manual intervention, our solutions help businesses improve network efficiency, minimize human error and accelerate response times. Automation ensures that your network remains consistent, secure and scalable as your business evolves, allowing IT teams to focus on strategic initiatives rather than day-to-day network maintenance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Policy Optimization For Network</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Policy Optimization for Network ensures that your network is configured to deliver the best possible performance and security based on your business’s specific needs. Our experts review and fine-tune network policies to ensure they align with business goals, regulatory requirements and security best practices. Through continuous monitoring and adjustments, we help businesses enforce optimal policy settings across their networks, improving operational efficiency, security and compliance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Collaboration</h5>
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Technocare Orbit Collaboration Solutions empower businesses with seamless communication tools. Our solutions provide businesses with reliable, scalable communication platforms that enhance collaboration, improve customer service and reduce operational costs. By offering a unified approach to voice, video and data communication, we help businesses enhance productivity, optimize customer interactions and streamline their communication processes across teams and customers.
                            </p>
                            <h5 class="fw-bold">Our Offerings include :</h5>
                            <ul class="mb-4">
                                <li>IP Telephony</li>
                                <li>IP Contact Center</li>
                                <li>Video Conferencing</li>
                                <li>Billing and Call Recording</li>
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
    name: "Enterprise",
    layout: Layout,
}
</script>

<style scoped>

</style>
