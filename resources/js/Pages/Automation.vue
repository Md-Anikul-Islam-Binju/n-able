<template>
    <!-- header -->

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">AUTOMATION</h1>
            </div>
        </div>
    </header>

    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-9.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Automation</h1>
                    <p class="section-description text-muted">
                        Digital Business Automation is transforming how businesses operate by leveraging technologies like Robotic Process Automation (RPA), Workflow Automation, Process Mining & Low-Code Apps. Our solutions help organizations break down complex processes into scalable, functional modules, enabling the shift to more dynamic, distributed business models. <br><br>
                        By combining RPA, AI and Content Services, we go beyond traditional workflow automation to deliver end-to-end automation. Our hyper-automation approach integrates bots, human collaboration, and core business applications through Straight Through Processing (STP), allowing businesses to automate seamlessly across on-premises and cloud environments. With our expertise, we create agile, future-proof solutions tailored to meet your evolving business needs.
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
                            <h5>Workflow Automation</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our workflow automation solutions streamline manual tasks and decision-making, freeing up resources for more strategic work. They enhance accuracy, speed, and scalability while providing greater visibility into business functions. Automation helps organizations meet customer needs, adapt to market changes, and improve compliance, all while reducing errors and mitigating risks to protect your reputation.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Robotic Process Automation</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                As businesses strive to improve efficiency and reduce costs, automating routine tasks has become essential. Our Robotic Process Automation (RPA) solutions help address these challenges by enhancing efficiency, reducing errors and lowering labor costs. With RPA++, combining RPA, workflow automation, and low-code apps, we offer greater flexibility and scalability. Our solutions seamlessly integrate into existing systems, providing a cost-effective way to automate business processes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Content Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Many organizations struggle with inefficient content management, wasting time and hindering productivity. Our content services solutions optimize digital asset management, enabling employees to quickly access relevant content. This improves efficiency, reduces costs and frees up resources to focus on utilizing content rather than searching for it. Our solutions also enhance customer satisfaction, improve compliance and mitigate risks, protecting the organization’s reputation.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Low Code Apps</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our low-code platform provides a powerful, cost-effective way to build cloud-based applications without the need for coding expertise. With an intuitive, drag-and-drop interface, even non-technical users can quickly create and customize apps to streamline processes and meet specific business needs. Our platform simplifies the entire lifecycle— from building and deploying to updating custom applications— offering the flexibility to adapt quickly to changing requirements. This approach not only accelerates development but also reduces costs, making it easier for organizations to innovate and scale efficiently.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Process Mining</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                At N-able, we leverage Process Mining to help businesses unlock the full potential of its operations. By analyzing data from your existing systems, our solutions provide deep insights into your processes, pinpoint inefficiencies, and identify hidden bottlenecks. With this visibility, you can make data-driven decisions to optimize workflows, boost productivity, and reduce operational costs. Our tools not only highlight areas for improvement but also offer actionable recommendations for continuous process enhancement, enabling organizations to stay agile and competitive in an ever-evolving market.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Intelligent Automation</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Intelligent Automation solutions harness the power of RPA, AI, and machine learning to transform how businesses operate. By automating both routine tasks and complex decision-making processes, we help organizations accelerate workflows, improve accuracy, and boost adaptability. Our solutions reduce manual effort, freeing up valuable resources and allowing teams to focus on higher-value activities. With a focus on operational efficiency and enhanced customer satisfaction, we enable businesses to lower costs, improve service delivery, and drive sustainable growth— all with minimal human intervention.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Enterprise Apps </h5>
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our enterprise application solutions support critical business functions – CRM, ERP, supply chain management and more, helping organizations streamline and integrate core processes. Our scalable tools ensure seamless collaboration across departments, improve data accuracy, and provide real-time insights that empower informed decision-making. By enabling a unified approach to operations, we help businesses drive greater efficiency, enhance productivity, and adapt quickly to changing market demands, all while fostering a more connected and agile organization.
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
    name: "Automation",
    layout: Layout,
}
</script>

<style scoped>

</style>
