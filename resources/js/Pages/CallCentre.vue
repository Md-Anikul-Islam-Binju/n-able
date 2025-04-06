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
                <h1 class="fw-bold">Call Centre Executive</h1>
            </div>
        </div>
    </header>

    <section class="section-contact-1 section-gap py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="section-description text-center text-muted mb-4">
                        As a Call Centre Executive you will be responsible for handling inbound and outbound calls to address inquiries, provide information and resolve issues.
                    </p>

                    <h4 class="fw-bold">Job Responsibilities</h4>
                    <ul class="mb-4">
                        <li>Handle inbound and outbound calls in a professional and customer friendly manner.</li>
                        <li>Ensure positive customer experience by delivering exceptional service.</li>
                        <li>Provide accurate and relevant information to customers.</li>
                        <li>Stay updated on product and service knowledge of the client to effectively address customer queries.</li>
                        <li>Adhere to call centre policies, procedures, and quality standards.</li>
                        <li>Communicate effectively with team members and tem leader.</li>
                        <li>Active participation in the regular team meetings and training sessions.</li>
                    </ul>

                    <h4 class="fw-bold">Requirements</h4>
                    <ul class="mb-4">
                        <li>Passed G.C.E advance level in commerce stream is better.</li>
                        <li>Better with more than one year experience in call centre.</li>
                        <li>Excellent communication in both Sinhala and English language. Ability to communicate in Tamil language (a plus).</li>
                        <li>Problem-solving and conflict resolution skills</li>
                        <li>Customer oriented & handling situations with empathy.</li>
                        <li>Possess a positive attitude and willingness to learn.</li>
                        <li>Communication skills (ability to explain clearly and politely)</li>
                        <li>Must possess exceptional organizational and multitasking skills.</li>
                    </ul>

                    <h4 class="fw-bold">About N-able</h4>
                    <p class="mb-4">
                        Since our inception in 2008, N-able has been at the forefront of delivering innovative and reliable IT solutions that empower businesses for success. With a foundation rooted in Sri Lanka, we have grown to encompass a global presence, operating in Singapore, Bangladesh and beyond. <br>
                        We driven by a team of over 250 experienced IT professionals & engineers who are backed by a wealth of expertise. We deliver cutting-edge projects that cater to a diverse portfolio of clients, ensuring that every service we provide is top-notch & dependable.
                    </p>

                    <p class="text-center fw-bold">
                        If you believe you can contribute to our success and wish to join our team,
                        please submit your CV to <a href="mailto:jobs@n-able.biz" class="text-decoration-none">jobs@n-able.biz</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "CallCentre",
    layout: Layout,
}
</script>

<style scoped>

</style>
