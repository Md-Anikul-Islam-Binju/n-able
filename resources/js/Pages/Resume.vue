<template>
    <!-- header -->

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">Submit Resume</h1>
        </div>
    </header>


    <!-- Submit Resume -->

    <section class="container py-5">
        <div class="row">
            <!-- Left Side: Contact Info -->
            <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 60vh;">
                <div>
                    <h1 class="fw-bold">We're Hiring</h1>
                    <p>Ready to be part of something extraordinary? Explore our current openings and discover how you can contribute to our dynamic team. Join us on this exciting journey at N-able.</p>
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
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Upload your CV</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
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
    name: "Resume",
    layout: Layout,

}
</script>

<style scoped>

</style>
