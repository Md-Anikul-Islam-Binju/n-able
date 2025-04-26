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
                <h1 class="fw-bold text-center">PARTNER WITH US</h1>
            </div>
        </div>
    </header>

    <!-- Why Choose Us? -->
    <section class="section-4 position-relative py-5 bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-5">
                    <h2 class="fs-1 fw-bold text-dark">Why Partner With Us?</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-3">
                        <h4 class="mt-3">Strengthen Your Cybersecurity Posture</h4>
                        <p class="text-muted">Protect your valuable assets with our robust cybersecurity services, including threat detection, incident response, and compliance.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3">
                        <h4 class="mt-3">Enhance Your Digital Transformation</h4>
                        <p class="text-muted">Accelerate your digital journey with our cutting-edge technologies and strategic guidance.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3">
                        <h4 class="mt-3">Optimize Your IT Infrastructure</h4>
                        <p class="text-muted">Streamline operations, improve efficiency, and reduce costs through our comprehensive IT infrastructure solutions.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3">
                        <h4 class="mt-3">Strengthen Your Cybersecurity Posture</h4>
                        <p class="text-muted">Protect your valuable assets with our robust cybersecurity services, including threat detection, incident response, and compliance.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3">
                        <h4 class="mt-3">Scale Your Business with Confidence</h4>
                        <p class="text-muted">Rely on our scalable solutions to support your growth and future expansion.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3">
                        <h4 class="mt-3">Experience Exceptional Customer Service</h4>
                        <p class="text-muted">Enjoy personalized support and dedicated account management from our committed team.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="p-3">
                            <h4 class="mt-3">Foster Innovation Together</h4>
                            <p class="text-muted">Collaborate with us to explore emerging technologies and drive digital innovation within your organization.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3">
                            <h4 class="mt-3">Achieve Measurable Results</h4>
                            <p class="text-muted">Track your progress and measure the impact of our solutions with our data-driven approach.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3">
                            <h4 class="mt-3">Benefit from Our Strategic Partnerships</h4>
                            <p class="text-muted">Access a wider range of resources and expertise through our network of trusted partners.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3">
                            <h4 class="mt-3">Simplify Your IT Operations</h4>
                            <p class="text-muted">Let us handle the complexities of IT management, freeing up your time and resources.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <!-- Left Side: Contact Info -->
            <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 60vh;">
                <div>
                    <h1 class="fw-bold">Partner With Us</h1>
                    <p>Ready to be part of something extraordinary? Join us on this exciting journey with N-able.</p>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title mb-3 fw-bold">Join Us</h1>
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
                            <button type="submit" class="btn btn-primary w-0">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "PartnerWithUs",
    layout: Layout,
}
</script>

<style scoped>

</style>
