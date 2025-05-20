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
                        <p class="mb-0">The Eden House 37
                            Road #7 ,Sector #10,<br>
                            Uttara,Dhaka, Bangladesh</p>
                    </div>
                </div>


                <div class="card-body d-flex align-items-center  border-1  p-4">
                    <div class="me-3 d-flex justify-content-center align-items-center bg-info rounded-pill"
                         style="width: 50px; height: 50px;">
                        <i class='bx bxs-envelope fs-4 text-white' ></i>
                    </div>
                    <div>
                        <p class="mb-2"><strong>Email us</strong></p>
                        <p><a href="support@technocareorbit.io" class="text-decoration-none">support@technocareorbit.net</a></p>
                    </div>
                </div>

                <div class="card-body d-flex align-items-center  border-1  p-4">
                    <div class="me-3 d-flex justify-content-center align-items-center bg-info rounded-pill"
                         style="width: 50px; height: 50px;">
                        <i class='bx bxs-phone fs-4 text-white' ></i>
                    </div>
                    <div>
                        <p class="mb-2"><strong>Call us</strong></p>
                        <p><a href="tel:0114625000" class="text-decoration-none">+88 01759-512412</a></p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title mb-3 fw-bold">Let's Talk</h1>
                        <form @submit.prevent="submitForm">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" v-model="name" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" v-model="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" v-model="phone" class="form-control" placeholder="Enter your phone number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea v-model="message" class="form-control" rows="4" placeholder="Your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
<!--                        <a href="https://ntac.n-able.biz/" target="_blank" class=" fs-5 btn btn-outline-info rounded-pill mt-3"> Click Here </a>-->
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
                        <div class="cb-country fw-bold mb-2 text-light fs-5">Branch Office</div>
                        <p class="cb-address mb-1 flex-grow-1 text-light">
                            4th Floor, 827 East Shewrapara, Mirpur <br>
                            Dhaka-1216, Bangladesh
                        </p>
                        <p class="cb-phone fw-bold mt-2">
                            <a href="tel:+65 31 38 38 48" class="text-decoration-none text-light">+65 31 38 38 48</a>
                        </p>
                    </div>
                </div>

<!--                &lt;!&ndash; Engineering Office &ndash;&gt;-->
<!--                <div class="col-md-4 d-flex">-->
<!--                    <div class="contact-box text-start p-3  rounded d-flex flex-column h-50">-->
<!--                        <div class="cb-country fw-bold mb-2 text-light fs-5">Engineering Office</div>-->
<!--                        <p class="cb-address mb-1 flex-grow-1 text-light">-->
<!--                            No. 36, Bristol Street, Colombo 01,<br>-->
<!--                            Western 001, LK Sri Lanka.-->
<!--                        </p>-->
<!--                        <p class="cb-phone fw-bold mt-2">-->
<!--                            <a href="tel:+94 114 625 000" class="text-decoration-none text-light">+94 114 625 000</a>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->

                <!-- Bangladesh Country Office -->
                <div class="col-md-4 d-flex">
                    <div class="contact-box text-start p-3  rounded d-flex flex-column h-0">
                        <div class="cb-country fw-bold mb-2 text-light fs-5">Bangladesh Country Office</div>
                        <p class="cb-address flex-grow-1 text-light">
                            The Eden House 37 <br>
                            Road #7 ,Sector #10, <br>
                            Uttara,Dhaka, Bangladesh
                        </p>
                        <p class="cb-phone fw-bold mt-2">
                            <a href="tel:+880 1777 113 110" class="text-decoration-none text-light">+88 01759-512412</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";
import { router } from '@inertiajs/vue3';  // Updated import for Inertia v3

export default {
    name: "Contact",
    layout: Layout,

    data() {
        return {
            name: '',
            email: '',
            phone: '',
            message: ''
        }
    },

    methods: {
        submitForm() {
            router.post('/contact-store', {
                name: this.name,
                email: this.email,
                phone: this.phone,
                message: this.message,
            }, {
                onSuccess: () => {
                    // Reset form fields
                    this.name = '';
                    this.email = '';
                    this.phone = '';
                    this.message = '';
                },
                onError: (errors) => {
                    console.log(errors);
                }
            });
        }
    }
}
</script>




<style scoped>

</style>
