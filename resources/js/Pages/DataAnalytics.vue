<template>

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">DATA & ANALYTICS</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-12.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Data & Analytics</h1>
                    <p class="section-description text-muted">
                        Technocare Orbit  Data & Analytics Solutions enable organizations to harness the power of their data, transforming raw information into actionable insights. Our solutions help businesses optimize their data management processes, improve decision-making and drive operational efficiency. By ensuring data accuracy, consistency and accessibility, we empower organizations to unlock new opportunities and achieve sustainable growth in an increasingly data-driven world.
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
                            <h5>Data Architecture</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  provides robust Data Architecture solutions to design scalable, flexible and high-performance systems for managing and storing vast amounts of data. We create customized architectures that ensure seamless integration, optimize data flow and provide a strong foundation for future data operations. Our approach ensures that businesses can efficiently manage data at scale, enhancing accessibility and performance across all platforms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Modelling & Design</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  specializes in Data Modelling & Design to create structured data models that align with your business requirements. Our solutions help organize and define the relationships between different data sets, ensuring clarity, consistency and scalability. By leveraging industry best practices, we ensure that your data models reflect both current needs and future growth, enhancing system efficiency and supporting advanced analytics.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Integration</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Data Integration services enable smooth and seamless connectivity across disparate data sources and platforms. Technocare Orbit  ensures that data from various systems—whether on-premise or cloud-based—can be integrated, synchronized and made available in real time. This integration is crucial for organizations looking to unify data across multiple touchpoints, providing a single, accurate view for decision-making.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Master Data Management (MDM)</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  Master Data Management (MDM) solutions focus on ensuring that your business operates with a single, accurate and consistent version of key business data. By centralizing master data across various systems, we eliminate data silos and enhance data consistency across your organization. This results in improved data quality, enhanced decision-making and compliance with regulatory standards.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Governance</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Data Governance solutions provide organizations with a framework to manage their data securely and in compliance with industry regulations. We establish data policies and controls that govern data access, quality, security and privacy. By enforcing best practices and compliance standards, we ensure that your data is trustworthy, protected and used effectively across all departments
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Quality Management</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                With Technocare Orbit Data Quality Management solutions, businesses can ensure the accuracy, consistency, and reliability of their data. Our approach helps identify and resolve data quality issues, reduce errors and improve overall data integrity. We use advanced techniques to cleanse and enrich data, enabling organizations to trust the data they rely on for critical business decisions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Data Warehousing & Business Intelligence</h5>
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Data Warehousing & Business Intelligence solutions provide businesses with a centralized repository for storing vast amounts of structured data. Our data warehousing solutions enable seamless access to critical business insights, while our Business Intelligence tools allow organizations to run advanced analytics, generate reports, and visualize data. This empowers businesses to make data-driven decisions that drive growth and competitive advantage.
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
    name: "DataAnalytics",
    layout: Layout,
}
</script>

<style scoped>

</style>
