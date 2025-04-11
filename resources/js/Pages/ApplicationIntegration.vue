<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">APPLICATION MODERNIZATION & INTEGRATION</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-10.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Application modernization & integration</h1>
                    <p class="section-description text-muted">
                        To deliver growth-centric business outcomes in today’s dynamic and competitive business landscape, innovation becomes a survival skill. For your business to innovate, your channels of customer interaction and the supporting back-office must be agile, adaptive and provide space for rapid innovation. <br><br>
                        To realize these ends, you need to modernize and modernize your applications and the way they integrate with each other in unison. To realize the full benefits of modernization, you must also transform your application delivery pipelines through automation and bring increased observability to your modernized applications.
                    </p>
                    <ol type="1" class="section-description text-muted">
                        <li>Cannot keep up with the demands of your business to deliver new features?</li>
                        <li>High volume customer engagement applications needing vertical scaling and driving up your licensing and infrastructure costs?</li>
                        <li>Struggling to find the right candidates to modernize? Found already, but struggling to find the right approach to modernize?</li>
                        <li>Decided on moving to the cloud, identified which candidates should become cloud natives, but need an experienced partner to take you through the migration?</li>
                        <li>Already in the cloud, not being able unleash the benefits of cloud consumption models to drive down cost and increase agility?</li>
                        <li>Struggling to securely expose business capabilities as they are stuck behind complex domain-specific application interfaces?</li>
                    </ol>
                    <p class="section-description text-muted">
                        Our application & integration modernization practice has its roots in realizing Service Oriented Integration as a catalyst for enabling legacy application backends to meet the needs of modern-day customer engagement applications. The practice has since developed into one that progressively helps customers to modernize their applications, integrations, and business API exposure. Our expertise developed through these real-life engagements will help you address the above challenges with confidence and predictability.
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
                            <h5>Application modernization</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Innovation is the new fuel for business growth. To innovate faster, your applications must be agile, adaptive and extensible. This requires a holistic approach to aligning your applications into fine grained, independently manageable units of business logic that can evolve and scale on their own rapidly and resiliently.
                            </p>
                            <h6 class="fw-bold">Our modernization architects and engineers can help you to</h6>
                            <ul class="mb-4">
                                <li>Plan your application modernization journey starting with low hanging fruits to more challenges monoliths.</li>
                                <li>Guide you through establishing automation pipelines, monitoring and governance capabilities and security architecture to succeed in your modernization efforts.</li>
                                <li>Using several modern techniques, break and migrate your monolithic application architectures into business specific functional micro-apps.</li>
                                <li>Ensure your modernized application landscape utilizes the full benefits of modern consumption-based cloud delivery models.
                                    icon</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Integration modernization</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Traditional patterns of application integration such as centralized ESB (Enterprise Service Bus) pattern have had their limitations exposed in modern microservice-driven agile enterprise application landscapes. Most often, bottlenecks emerge in projects due to the emphasis on re-use, synchronous communication styles and lack of decentralized administration. <br><br>
                                In contrast, modern integration architectures tend to align more with your containerized microservice applications providing dynamic scalability and resilience while ensuring adaptability.
                            </p>
                            <h6 class="fw-bold">Our integration architects, powered with years of experience in designing futurist integration architecture for banking-grade/carrier-grade application landscapes, can help you to,</h6>
                            <ul class="mb-4">
                                <li>Design fine-grained micro-integrations aligned to your application modernization goals.</li>
                                <li>Deploy and support such integrations in cloud native runtimes that your different teams and own and independently evolve.</li>
                                <li>Boosting your ability to respond to rapidly changing business demands.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>API-centric innovation</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Business APIs fuel innovation by providing you with avenues to complement and enhance your business capabilities by collaborating with your partners and suppliers in ways that were never possible before. To accelerate progress in your business aligned API journey, you must securely expose business APIs that are partner or supplier centric. To achieve this, you need to build capacity to orchestrate complex, domain specific System APIs from your backend applications.
                            </p>
                            <h6 class="fw-bold">Whether your goal is to monetize your business capabilities through API’s or to build new business models through innovative vertical or horizonal business integrations, our API architects and API builders can help you to,</h6>
                            <ul class="mb-4">
                                <li>Plan and design your API journey to drive new business models you discover with your partners and suppliers.</li>
                                <li>Design, develop and support business API’s and build security and governance around them to help you realize the API-centric business models.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Software Delivery Modernization</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit  Software Delivery Modernization services empower businesses to adopt modern software development practices. By optimizing development pipelines and leveraging automation, we help organizations deliver software faster, with higher quality, and greater alignment with business objectives.
                            </p>
                            <h6 class="fw-bold">Our team will help you to :</h6>
                            <ul class="mb-4">
                                <li>Optimize and automate your development pipelines to accelerate software delivery while maintaining high quality.</li>
                                <li>Implement DevOps methodologies that foster collaboration across teams, improving efficiency and enabling faster releases.</li>
                                <li>Enhance alignment between software development and business objectives, ensuring that technology supports growth and innovation.</li>
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
    name: "ApplicationIntegration",
    layout: Layout,

}
</script>

<style scoped>

</style>
