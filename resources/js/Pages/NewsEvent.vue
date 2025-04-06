<template>
    <!-- header -->

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">News & Events</h1>
            <p class="lead fw-bold fs-5">Our latest news</p>
        </div>
    </header>


    <!-- News & Events -->

    <section class="container">
        <!-- search box -->
        <div class="navbar p-3 m-4">
            <div class="container-fluid d-flex justify-content-center">
                <form class="d-flex" role="search" style="width: 25rem;">
                    <div class="input-group position-relative">
                        <input class="form-control rounded-pill pe-5" type="search" placeholder="Search" aria-label="Search">
                        <span class="position-absolute end-0 pe-3 pt-2">
                        <i class="bx bx-search-alt-2 fs-5 text-muted"></i>
                    </span>
                    </div>
                </form>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col">
                <div class="card">
                    <img src="frontend/images/slide.jpg" class="card-img-top" alt="card-1">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-start fs-6 fw-bold"><i class='bx bxs-calendar'></i> 27 Dec 2024</a>
                            <a href="#" class="text-decoration-none text-end fs-1 fw-bold text-danger"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="frontend/images/slide.jpg" class="card-img-top" alt="card-2">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-start fs-6 fw-bold"><i class='bx bxs-calendar'></i> 27 Dec 2024</a>
                            <a href="#" class="text-decoration-none text-end fs-1 fw-bold text-danger"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="frontend/images/slide.jpg" class="card-img-top" alt="card-3">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-start fs-6 fw-bold"><i class='bx bxs-calendar'></i> 27 Dec 2024</a>
                            <a href="#" class="text-decoration-none text-end fs-1 fw-bold text-danger"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="frontend/images/slide.jpg" class="card-img-top" alt="card-1">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-start fs-6 fw-bold"><i class='bx bxs-calendar'></i> 27 Dec 2024</a>
                            <a href="#" class="text-decoration-none text-end fs-1 fw-bold text-danger"><i class='bx bx-right-arrow-alt'></i></a>
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
    name: "NewsEvent",
    layout: Layout,
}
</script>

<style scoped>

</style>
