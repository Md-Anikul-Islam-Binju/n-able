<template>

    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="http://127.0.0.1:8000/frontend/images/slide.jpg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold">{{ blog.title }}</h1>
            </div>
        </div>
    </header>

    <section class="py-5 position-relative bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <!-- News Content -->
                <div class="col-lg-8">
                    <div class="mb-3 text-muted">
                        <i class='bx bxs-calendar'></i> 1 April 2025
                    </div>

                    <div class="mb-4 ">
                        <img
                            :src="baseUrl + '/images/blog/' + blog.image"
                            class="img-fluid mb-3 rounded-3"
                            alt="Corporate Business Presentation"
                        >
                        <p  v-html="getTruncatedText(blog.details)"></p>
                    </div>
                </div>

                <!-- Latest News Sidebar -->
                <div class="col-lg-4 bg-white shadow p-3 mb-5 bg-body-tertiary rounded-3" style="height: 40rem">
                    <h4 class="mb-4">Latest News</h4>

                    <!-- News Item -->
                    <div  v-for="(blog, index) in blogs" :key="index" class="mb-3 d-flex">
                        <div class="me-3">
                            <img :src="baseUrl + '/images/blog/' + blog.image" alt="Cyber Summit" class="img-thumbnail" style="width: 150px; height: 90px; object-fit: cover;">
                        </div>
                        <div>
                            <h6 class="mb-1"><Link :href="'/blogDetails/' + blog.id" class="text-decoration-none text-dark">{{ blog.title }}</Link></h6>
                            <small class="text-muted"><i class='bx bxs-calendar'></i> {{ blog.date }}</small>
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
    name: "BlogDetails",
    layout: Layout,
    props: {
        blogs: Array,
        blog:Object,
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
