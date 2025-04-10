<template>
    <!-- header -->
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold">CONTACT US</h1>
            <p class="lead fw-bold fs-5">Connect. Collaborate. Converse.</p>
        </div>
    </header>


    <!-- contact page -->
    <div class="container py-5">
        <div class="row">
            <!-- Left Side: Contact Info -->
            <div class="col-md-6">
                <h1 class="fw-bold">Get in Touch</h1>
                <p>Should you have any questions or need further assistance, we are here to help. Feel free to reach out to us through the contact details below.</p>

                <div class="card-body d-flex align-items-center border-1 p-4">
                    <div class="me-3 d-flex justify-content-center align-items-center bg-info rounded-pill"
                         style="width: 50px; height: 50px;">
                        <i class='bx bxs-map fs-4 text-white'></i>
                    </div>
                    <div>
                        <p class="mb-1"><strong>Head Office</strong></p>
                        <p class="mb-0">36 Sir Razik Fareed Mawatha, Colombo 00100</p>
                    </div>
                </div>


                <div class="card-body d-flex align-items-center  border-1  p-4">
                    <div class="me-3 d-flex justify-content-center align-items-center bg-info rounded-pill"
                         style="width: 50px; height: 50px;">
                        <i class='bx bxs-envelope fs-4 text-white' ></i>
                    </div>
                    <div>
                        <p class="mb-2"><strong>Email us</strong></p>
                        <p><a href="support@technocareorbit.io" class="text-decoration-none">support@technocareorbit.io</a></p>
                    </div>
                </div>

                <div class="card-body d-flex align-items-center  border-1  p-4">
                    <div class="me-3 d-flex justify-content-center align-items-center bg-info rounded-pill"
                         style="width: 50px; height: 50px;">
                        <i class='bx bxs-phone fs-4 text-white' ></i>
                    </div>
                    <div>
                        <p class="mb-2"><strong>Call us</strong></p>
                        <p><a href="tel:0114625000" class="text-decoration-none">+88 01710-507935</a></p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title mb-3 fw-bold">Let's Talk</h1>
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
    </div>

    <!-- Tech Support Portal -->
    <section class=" text-center bg-light" style="height: 17rem">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 mt-5">
                    <h1 class="text-dark fw-bold">
                        24x7 Tech Support Portal
                        </h1>
                        <p class="section-description text-muted">
                            For any tech support-related queries, you may reach us on our 24x7 tech support portal.
                        </p>
                        <a href="https://ntac.n-able.biz/" target="_blank" class=" fs-5 btn btn-outline-info rounded-pill mt-3"> Click Here </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Locations -->
    <section class="section-location text-center  bg-info py-5">
        <div class="container">
            <h1 class="section-heading fw-bold text-light">Our Locations</h1>
            <p class="section-description text-light">Explore Our Offices Worldwide</p>
            <div class="row justify-content-center">

                <!-- Corporate Office -->
                <div class="col-md-4 d-flex">
                    <div class="contact-box text-start p-3  rounded d-flex flex-column h-50">
                        <div class="cb-country fw-bold mb-2 text-light fs-5">Corporate Office</div>
                        <p class="cb-address mb-1 flex-grow-1 text-light">
                            111 North Bridge Road, #23-05,<br>
                            Peninsula Plaza, Singapore, 179098, SG
                        </p>
                        <p class="cb-phone fw-bold mt-2">
                            <a href="tel:+65 31 38 38 48" class="text-decoration-none text-light">+65 31 38 38 48</a>
                        </p>
                    </div>
                </div>

                <!-- Engineering Office -->
                <div class="col-md-4 d-flex">
                    <div class="contact-box text-start p-3  rounded d-flex flex-column h-50">
                        <div class="cb-country fw-bold mb-2 text-light fs-5">Engineering Office</div>
                        <p class="cb-address mb-1 flex-grow-1 text-light">
                            No. 36, Bristol Street, Colombo 01,<br>
                            Western 001, LK Sri Lanka.
                        </p>
                        <p class="cb-phone fw-bold mt-2">
                            <a href="tel:+94 114 625 000" class="text-decoration-none text-light">+94 114 625 000</a>
                        </p>
                    </div>
                </div>

                <!-- Bangladesh Country Office -->
                <div class="col-md-4 d-flex">
                    <div class="contact-box text-start p-3  rounded d-flex flex-column h-0">
                        <div class="cb-country fw-bold mb-2 text-light fs-5">Bangladesh Country Office</div>
                        <p class="cb-address flex-grow-1 text-light">
                            Wakil Tower, Ta-131 (08th Floor), <br>
                            Gulshan Badda Link Road, Badda, <br>
                            Dhaka -1212, Bangladesh
                        </p>
                        <p class="cb-phone fw-bold mt-2">
                            <a href="tel:+880 1777 113 110" class="text-decoration-none text-light">+88 01710-507935</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "Contact",
    layout: Layout,
}
</script>

<style scoped>

</style>
