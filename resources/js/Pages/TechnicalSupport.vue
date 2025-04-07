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
                <h1 class="fw-bold text-center">Technical Support</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-14.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Technical Support</h1>
                    <p class="section-description text-muted">
                        N-able’s Tech Support services are designed to provide businesses with comprehensive, reliable and responsive assistance to ensure the smooth operation of their IT environments. Our support offerings are tailored to meet the needs of organizations looking to minimize downtime, optimize performance and quickly address any IT issues that may arise. Whether it’s proactive maintenance or rapid incident response, N-able’s tech support ensures your business is always supported by experienced professionals who are committed to resolving issues efficiently and effectively.
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
                            <h5>24×7 Technical Assistance Center (nTAC)</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                N-able’s 24×7 Technical Assistance Center (nTAC) offers continuous incident response and support for IT issue management. Available around the clock, our nTAC team is ready to assist with any IT challenges that may arise, providing quick and effective solutions to minimize downtime. Whether it’s a critical system failure or a routine technical query, our dedicated support team ensures that your business stays operational and that issues are resolved promptly.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Multi-Vendor & Multi-Technology Technical Support</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                N-able’s Multi-Vendor & Multi-Technology Technical Support provides businesses with comprehensive assistance across diverse IT vendors and technologies. We support a wide range of platforms, devices and software, ensuring seamless integration and troubleshooting no matter the complexity of your environment. Our expert team offers tailored solutions and guidance to ensure that all your technology solutions are fully supported, helping you maintain a consistent, high-performance IT ecosystem.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Preventive Service Planning</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                N-able’s Preventive Service Planning helps businesses avoid potential IT disruptions by strategically identifying and addressing areas of concern before they become issues. By proactively planning for system updates, hardware maintenance and potential vulnerabilities, we help businesses minimize the risk of unplanned downtime and costly repairs. Our preventive approach ensures that your IT systems remain resilient, secure and optimized for ongoing success
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Proactive Health Checks</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                N-able’s Proactive Health Checks involve routine system assessments to maintain the optimized performance of your IT infrastructure. Regular health checks allow us to identify any potential issues before they impact operations, providing the insights needed to keep your systems running smoothly. These proactive assessments help businesses improve system efficiency, prevent failures and ensure the reliability of their IT environment.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>IT Infrastructure Gap Analysis</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                N-able’s IT Infrastructure Gap Analysis focuses on identifying and addressing gaps in your current IT infrastructure. Our expert team evaluates your existing systems, processes and technologies to uncover areas where improvements are needed. By addressing these gaps, we help businesses enhance efficiency, reduce costs and optimize their IT environment for better performance and scalability. This analysis provides actionable recommendations that align with your business goals and ensure that your infrastructure is capable of supporting future growth.
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
    name: "TechnicalSupport",
    layout: Layout,

}
</script>

<style scoped>

</style>
