<template>
    <body>
        <div class="thank-you-container">
            <h1>Thank You!</h1>
            <p>Your submission has been received.</p>
            <Link href="/">Back to Home</Link>
        </div>
    </body>
</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "ThankYou",
    layout: Layout,

}
</script>

<style scoped>
body {
    margin: 0;
    padding: 0;
    background: #f0f4f8;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
    color: #333;
}

.thank-you-container {
    text-align: center;
    background: #fff;
    padding: 50px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.thank-you-container h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
    color: #2ecc71;
}

.thank-you-container p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.thank-you-container a {
    text-decoration: none;
    background: #2ecc71;
    color: white;
    padding: 12px 24px;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s;
}

.thank-you-container a:hover {
    background: #27ae60;
}
</style>
