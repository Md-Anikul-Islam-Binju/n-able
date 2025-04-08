<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top fs-3">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 " href="/">
                <img src="frontend/images/nable-black.png" alt="Logo" width="160" height="60" class="d-inline-block align-text-top logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mx-auto fw-bold gap-5 fs-6">
                    <li class="nav-item">
                        <Link class="nav-link active" href="/">Home</Link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><Link class="dropdown-item" href="/company">The Company</Link></li>
                            <li><Link class="dropdown-item" href="/team">The Team</Link></li>
                            <li><Link class="dropdown-item" href="/awards">Awards & Accolades</Link></li>
                            <li><Link class="dropdown-item" href="/industries">Industries We Serve</Link></li>
                            <li><Link class="dropdown-item" href="/partners">Our Key Partners</Link></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Solutions
                        </a>
                        <ul class="dropdown-menu" style="min-width: 270px;">
                            <li class="dropdown-item p-2">
                                <Link class="d-flex align-items-center text-decoration-none text-dark" href="infrastructure" style="min-width: 250px;">
                                    <img src="frontend/images/service-1.png" alt="Action Icon" class="me-2 flex-shrink-0" width="30">
                                    <span class="fw-bold">Infrastructure</span>
                                </Link>
                                <small class="dropdown-text text-muted d-block mt-1 ps-4"
                                       style="max-width: 275px; white-space: normal; word-break: break-word; line-height: 1.4;">
                                    Robust & secure infrastructure solutions for modern business requirements.
                                </small>
                            </li>
                            <li class="dropdown-item p-2">
                                <Link class="d-flex align-items-center text-decoration-none text-dark" href="/applications" style="min-width: 250px;">
                                    <img src="frontend/images/service-2.png" alt="Action Icon" class="me-2 flex-shrink-0" width="30">
                                    <span class="fw-bold">Applications</span>
                                </Link>
                                <small class="dropdown-text text-muted d-block mt-1 ps-4"
                                       style="max-width: 275px; white-space: normal; word-break: break-word; line-height: 1.4;">
                                    Solutions for enhanced application performance & data management.
                                </small>
                            </li>
                            <li class="dropdown-item p-2">
                                <Link class="d-flex align-items-center text-decoration-none text-dark" href="/tech" style="min-width: 250px;">
                                    <img src="frontend/images/service-3.png" alt="Action Icon" class="me-2 flex-shrink-0" width="30">
                                    <span class="fw-bold">Tech Services</span>
                                </Link>
                                <small class="dropdown-text text-muted d-block mt-1 ps-4"
                                       style="max-width: 275px; white-space: normal; word-break: break-word; line-height: 1.4;">
                                    Dependable and expert IT support to help to manage your operations.
                                </small>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><Link class="dropdown-item" href="/newsEvent">News & Events</Link></li>
                            <li><Link class="dropdown-item" href="/blog">Blogs</Link></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Careers
                        </a>
                        <ul class="dropdown-menu">
                            <li><Link class="dropdown-item" href="/whyWork">Why Work With Us?</Link></li>
                            <li><Link class="dropdown-item" href="/vacancies">Vacancies</Link></li>
                            <li><Link class="dropdown-item" href="/resume">Submit Resume</Link></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link active" href="/contact-us">Contact us</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Navbar"
}
</script>

<style scoped>

</style>
