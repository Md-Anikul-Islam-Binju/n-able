<template>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row justify-content-between align-items-start">

                <!-- Company Logo Section (Left) -->
                <div class="col-md-3 mb-4">
                    <img src="frontend/images/nable-black.png" alt="Company Logo" class="img-fluid mb-3">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                            <button type="submit" class="btn btn-primary ms-2">Subscribe</button>
                        </div>
                    </form>
                </div>

                <!-- Quick Links Section (Center) -->
                <div class="col-md-3 mb-4 d-flex flex-column align-items-md-center align-items-start mt-5">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled  text-start">
                        <li><Link href="/privacy-policy" class="text-white text-decoration-none btn-info">Privacy Policy</Link></li>
                        <li><Link href="/compliance" class="text-white text-decoration-none">compliance</Link></li>
                        <li><Link href="/partnerWithUs" class="text-white text-decoration-none">Partner with us</Link></li>
                    </ul>
                </div>

                <!-- Right Side: Solutions + Follow Us + Get in Touch -->
                <div class="col-md-5 mb-4">
                    <div class="row">

                        <!-- Solutions -->
                        <div class="col-md-6 mb-3 mt-5">
                            <h4>Solutions</h4>
                            <ul class="list-unstyled">
                                <li><Link href="/infrastructure" class="text-white text-decoration-none">Infrastructure</Link></li>
                                <li><Link href="/applications" class="text-white text-decoration-none">Applications</Link></li>
                                <li><Link href="/tech" class="text-white text-decoration-none">Tech Services</Link></li>
                            </ul>
                        </div>

                        <!-- Follow Us & Get in Touch -->
                        <div class="col-md-6 mt-5 w-50">
                            <h4>Follow Us</h4>
                            <ul class="list-unstyled d-flex mb-3">
                                <li>
                                    <a href="#" class="text-white me-3">

                                        <i class='bx bxl-facebook'></i>

                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="text-white me-3">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                            <h4>Get in Touch</h4>

                            <p class="md-6">
                                <a href="#" class="text-white text-decoration-none"></a>
                                <i class="bx bxs-envelope"></i> support@technocareorbit.net
                            </p>

                            <p class="md-6">
                                <a href="#" class="text-white text-decoration-none"></a>
                                <i class="bx bxs-envelope"></i> siqbal@technocareorbit.net
                            </p>

                            <p class="md-6">
                                <a href="#" class="text-white text-decoration-none"></a>
                                <i class="bx bxs-phone"></i> +88 09613-554400
                            </p>

                            <p class="md-6">
                                <a href="#" class="text-white text-decoration-none"></a>
                                <i class="bx bxs-phone"></i>  +88 01759-512412
                            </p>


                        </div>
                    </div>
                </div>

            </div>

            <hr class="border-secondary">

            <!-- Footer Bottom -->
            <div class="row">
                <div class="col-12 mt-3">
                    <p class="mb-0">&copy; 2025 Techno care orbit. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
