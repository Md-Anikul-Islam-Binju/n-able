<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">PRIVACY POLICY</h1>
            </div>
        </div>
    </header>

    <section class="section-contact-1 section-gap py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <h4 class="fw-bold">Introduction</h4>
                    <p class="mb-4">
                        At N-able, we prioritize your privacy. This Privacy Policy explains how we collect, use, and protect your information when you interact with our website, products, and services. By using our services, you consent to the practices outlined in this policy.
                    </p>

                    <h4 class="fw-bold">Information We Collect</h4>
                    <p class="mb-4">
                        1. Personal Information
                    <p>We may collect personal information such as :</p>
                    <ul class="mb-4">
                        <li>Name</li>
                        <li>Email address</li>
                        <li>Phone number</li>
                    </ul>
                    2. Non-Personal Information
                    <p>This includes :</p>
                    <ul class="mb-4">
                        <li>IP address</li>
                        <li>Browser type</li>
                        <li>Operating system</li>
                        <li>Website usage statistics</li>
                    </ul>
                    </p>

                    <h4 class="fw-bold">How We Use Your Information</h4>
                    <p class="mb-4">
                        We use the information collected to :
                    <ul class="mb-4">
                        <li>Provide and improve our services</li>
                        <li>Process transactions</li>
                        <li>Respond to customer support inquiries</li>
                        <li>Send promotional communications (with your consent)</li>
                        <li>Ensure website security and prevent fraud</li>
                    </ul>
                    </p>

                    <h4 class="fw-bold">Sharing Your Information</h4>
                    <p class="mb-4">
                        We do not sell or rent your personal information to third parties. However, we may share your information with :
                    <ul class="mb-4">
                        <li>Service providers assisting in delivering our services</li>
                        <li>Legal authorities if required by law</li>
                        <li>Business partners with your consent</li>
                    </ul>
                    </p>

                    <h4 class="fw-bold">Data Security</h4>
                    <p class="mb-4">
                        We implement advanced security measures to protect your personal information. Despite our efforts, no system can guarantee complete security. If you suspect a breach, please contact us immediately.
                    </p>

                    <h4 class="fw-bold">Your Choices</h4>
                    <p class="mb-4">
                        <span class="fw-bold">Access and Update :</span> You can access and update your personal information by contacting us.
                    </p>
                    <p class="mb-4">
                        <span class="fw-bold">Opt-Out :</span> You can opt out of receiving promotional emails by following the unsubscribe link.
                    </p>

                    <h4 class="fw-bold">Cookies</h4>
                    <p class="mb-4">
                        Our website uses cookies to enhance user experience. You can control cookie settings in your browser. Disabling cookies may affect website functionality.
                    </p>
                    <h4 class="fw-bold">Third-Party Links</h4>
                    <p class="mb-4">
                        Our website may contain links to external sites. We are not responsible for the privacy practices of these sites. We recommend reviewing their privacy policies.
                    </p>

                    <h4 class="fw-bold">Changes to This Policy</h4>
                    <p class="mb-4">
                        We may update this Privacy Policy periodically. Changes will be posted on this page with the updated revision date. We encourage you to review the policy regularly.
                    </p>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "PrivacyPolicy",
    layout: Layout,
}
</script>

<style scoped>

</style>
