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
                <h1 class="fw-bold text-center">BFSI Applications</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-11.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">BFSI Applications</h1>
                    <p class="section-description text-muted">
                        Our BFSI (Banking, Financial Services & Insurance) applications and core banking solutions are designed to help financial institutions streamline their operations, enhance customer experiences, and ensure compliance in an increasingly digital world. We provide scalable, secure, and integrated platforms that enable banks and financial institutions to manage a wide range of services, from account management and transactions to risk analysis and regulatory reporting.
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
                            <h5>Core Banking Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Core Banking Solutions empower financial institutions to streamline their operations and enhance customer experiences by integrating key banking functions into a unified, secure platform. These solutions enable real-time processing, seamless transaction management, and easy access to critical banking services.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Corporate Banking Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Corporate Banking solutions are designed to address the diverse financial needs of businesses, helping you streamline operations, optimize cash flow, and manage financial risks. Whether you need efficient ways to handle payments, access working capital, or ensure smooth day-to-day financial operations, our tailored services support your business objectives. Key offerings include solutions for :
                            </p>
                            <ul class="mb-4">
                                <li>Trade Finance</li>
                                <li>Corporate Loans</li>
                                <li>Cash Management</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Compliance & Risk Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Compliance and Risk solutions are designed to help businesses meet regulatory requirements and protect against financial crimes. With tools to manage risk and ensure adherence to key regulations, we support your efforts to maintain transparency and safeguard your organization. Key offerings include :
                            </p>
                            <ul class="mb-4">
                                <li>Anti-Money Laundering (AML)</li>
                                <li>Fraud Detection and Prevention</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Digital Banking Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Digital Banking solutions are designed to enhance the banking experience for both businesses and customers by offering convenient, secure, and innovative financial services. With a focus on accessibility and user-friendliness, we provide a range of solutions that streamline banking operations and improve customer engagement. Key offerings include :
                            </p>
                            <ul class="mb-4">
                                <li>Internet and Mobile Banking</li>
                                <li>Digital Wallet</li>
                                <li>Personal Financial Management</li>
                                <li>VKYC & EKYC</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Credit and Loan solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Credit and Loan solutions are designed to help businesses access the financial resources they need to fuel growth, manage cash flow, and capitalize on new opportunities. Whether you’re looking for short-term working capital or long-term financing, we offer flexible and scalable loan products to meet your specific needs.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Treasury Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Treasury Solutions are designed to help businesses manage their cash flow, optimize liquidity and reduce financial risk. With advanced tools for cash management, forecasting, and strategic liquidity planning, we enable organizations to streamline their treasury operations and make informed financial decisions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5> Collection & Recovery Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Collection & Recovery solutions are designed to help businesses efficiently manage overdue payments and recover outstanding debts. By leveraging advanced technology and industry best practices, we provide a comprehensive approach to debt collection that improves cash flow and minimizes risk.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 8 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Customer Relationship Management (CRM) Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our CRM solutions are designed to help businesses build stronger, more meaningful relationships with their customers. By centralizing customer data and automating key interactions, we enable you to deliver personalized experiences, improve customer satisfaction and drive loyalty.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 9 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Switching Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Switching Solutions enable seamless, secure, and efficient transaction processing for both ATMs and payment systems. These solutions help businesses manage high volumes of transactions across multiple channels, ensuring quick and reliable processing. Key offerings include:
                            </p>
                            <ul class="mb-4">
                                <li>ATM Switching</li>
                                <li>Payment Switching</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 10 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Anti-Money Laundering (AML) Solutions</h5>
                        </button>
                    </h2>
                    <div id="collapse-10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Our Anti-Money Laundering (AML) Solutions help businesses and financial institutions detect, prevent, and report suspicious activities, ensuring compliance with global regulatory standards. By leveraging advanced AI, machine learning, and real-time data analytics, our solutions provide automated monitoring, risk assessment and reporting capabilities.
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
    name: "BfsiApplications",
    layout: Layout,
}
</script>

<style scoped>

</style>
