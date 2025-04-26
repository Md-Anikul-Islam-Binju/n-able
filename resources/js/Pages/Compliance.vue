<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">COMPLIANCE</h1>
            </div>
        </div>
    </header>

    <section class="section-contact-1 section-gap py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Our Commitment to Compliance -->

                    <h4 class="fw-bold">Our Commitment to Compliance</h4>
                    <p class="mb-4">
                        At N-able, we are dedicated to maintaining the highest standards of compliance and ethical practices. We ensure that our operations align with relevant laws, regulations, and industry standards to protect the interests of our customers, partners, and stakeholders.
                    </p>

                    <!-- Regulatory Compliance -->

                    <h4 class="fw-bold">Regulatory Compliance</h4>
                    <p class="mb-4">
                        We adhere to all applicable legal and regulatory requirements, including but not limited to :
                    <p class="mb-4">
                        <span class="fw-bold">Data Protection Laws :</span> Compliance with data protection and privacy laws such as the General Data Protection Regulation (GDPR) and other regional
                    </p>
                    <p class="mb-4">
                        <span class="fw-bold">Cybersecurity Standards :</span> Implementation of security frameworks such as ISO 27001 and NIST to safeguard data and systems.
                    </p>
                    <p class="mb-4">
                        <span class="fw-bold">Industry Standards :</span> Adherence to industry-specific guidelines, including ITIL and PCI DSS, where applicable.
                    </p>
                    </p>

                    <!-- Certifications and Accreditations -->

                    <h4 class="fw-bold">Certifications and Accreditations</h4>
                    <p class="mb-4">
                        To demonstrate our commitment to excellence, we maintain certifications such as :
                    <ul class="mb-4">
                        <li><span class="fw-bold">ISO 27001 :</span> Information Security Management</li>
                        <li><span class="fw-bold">ISO 9001 :</span> Quality Management</li>
                    </ul>
                    Other relevant certifications specific to IT solutions
                    </p>

                    <!-- Ethical Practices -->

                    <h4 class="fw-bold">Ethical Practices</h4>
                    <p class="mb-4">
                        Our code of conduct emphasizes ethical behavior and accountability. We :
                    <ul class="mb-4">
                        <li>Conduct fair and transparent business practices</li>
                        <li>Ensure anti-bribery and anti-corruption measures</li>
                        <li>Promote a culture of compliance across all levels of our organization</li>
                    </ul>
                    </p>

                    <!-- Employee Training -->

                    <h4 class="fw-bold">Employee Training</h4>
                    <p class="mb-4">
                        We provide regular training for our employees to ensure awareness and understanding of :
                    <ul class="mb-4">
                        <li>Data protection policies</li>
                        <li>Security protocols</li>
                        <li>Regulatory updates</li>
                        <li>Best practices in compliance and ethical behavior</li>
                    </ul>
                    </p>

                    <!-- Third-Party Vendor Compliance -->

                    <h4 class="fw-bold">Third-Party Vendor Compliance</h4>
                    <p class="mb-4">
                        We require our third-party vendors and partners to meet our compliance standards. Our due diligence processes include :
                    <ul class="mb-4">
                        <li>Vetting vendor policies and practices</li>
                        <li>Ensuring contractual obligations align with compliance requirements</li>
                        <li>Monitoring vendor activities for ongoing compliance</li>
                    </ul>
                    </p>

                    <!-- Reporting and Transparency -->

                    <h4 class="fw-bold">Reporting and Transparency</h4>
                    <p class="mb-4">
                        We are committed to transparency in our compliance efforts. If you have any concerns or require additional information, please reach out to our compliance team.
                    </p>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";


export default {
    name: "Compliance",
    layout: Layout,
}
</script>

<style scoped>

</style>
