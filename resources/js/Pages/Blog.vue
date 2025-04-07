<template>
    <!-- header -->

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover" alt="Background Image">
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-center text-white bg-dark bg-opacity-50">
            <h1 class="fw-bold fs-1">Blogs & Articles</h1>
            <p class="lead fw-bold fs-5 text-info">Our latest blogs</p>
        </div>
    </header>


    <!-- Blogs & Articles -->

    <section>
        <div class="container">
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

            <!-- Cards Section -->
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">

                <div class="col" v-for="(blog, index) in blogs" :key="index">
                    <div class="card">
                        <img :src="baseUrl + '/images/blog/' + blog.image" class="card-img-top" alt="card-1">
                        <div class="card-body">
                            <h5 class="card-title">{{ blog.title }}</h5>
                            <p class="card-text" v-html="getTruncatedText(blog.details)"></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none text-start fs-6 fw-bold"><i class='bx bxs-calendar'></i> {{ blog.date }}</a>
                                <Link :href="'/blogDetails/' + blog.id" class="text-decoration-none text-end fs-1 fw-bold text-danger"><i class='bx bx-right-arrow-alt'></i></Link>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <br>
        </div>
    </section>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "Blog",
    layout: Layout,
    props: {
        blogs: Array,
    },
    computed: {
        baseUrl() {
            return window.location.origin;
        },
    },
    methods: {
        // Method to truncate the content to 250 words
        getTruncatedText(text) {
            // Remove HTML tags
            let cleanText = text.replace(/<\/?[^>]+(>|$)/g, "");

            // Split the text into words
            const words = cleanText.split(/\s+/);

            // If the text has more than 250 words, truncate it
            if (words.length > 10) {
                return words.slice(0, 10).join(" ") + " ...";
            }

            return cleanText; // Return original text if it's less than 250 words
        },
    },

}
</script>

<style scoped>

</style>
