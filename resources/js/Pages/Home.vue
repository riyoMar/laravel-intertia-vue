<template>
    <Head title="Home" />

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <Link class="navbar-brand" href="home">
                    <img src="image/Logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Coffee Shop
                </Link>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <li class="navbar-nav me-3 me-md-auto mb-2 mb-md-0">
                        <Link class="nav-link active" aria-current="page" href="product">Product</Link>
                    </li>
                    <li class="navbar-nav me-1 me-md-auto mb-2 mb-md-0">
                        <Link class="nav-link active" aria-current="page" href="about-us">About Us</Link>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <main>
        <!-- <post-header> -->
        <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel" style="top: -25px; bottom: 0;">
            <div class="carousel-inner">
                <div class="carousel-item active background-image">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="104%" xlink:href="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                        <image href="image/backgroundHeader.jpg" width="100%" height="142%" />
                    </svg> -->

                    <div class="container">
                        <div class="mb-5 mb-lg-auto carousel-caption text-start">
                            <h1>Introlude</h1>
                            <h3>Our coffee product is the best in the country, and going to international. Check our product details with click 'Here'</h3>
                            <p><a class="btn btn-lg btn-secondary" href="product">Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </post-header> -->


        <!-- START THE FEATURETTES -->
        <div class="container marketing">
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Introductions
                        <!-- <span class="text-muted">See for yourself.</span> -->
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="rounded bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <!-- <title>Placeholder</title> -->
                        <!-- <rect width="100%" height="100%" fill="#eee"></rect> -->
                        <!-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> -->
                        <image xlink:href="image/productImage.jpg" width="735" height="500" />
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Product Introductions
                        <!-- <span class="text-muted">See for yourself.</span> -->
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5">
                    <svg class="rounded bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <!-- <title>Placeholder</title> -->
                        <rect width="100%" height="100%" fill="#777"></rect>
                        <!-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> -->
                        <image xlink:href="image/productImage.jpg" width="735" height="500"/>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Introductions
                        <!-- <span class="text-muted">See for yourself.</span> -->
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="rounded bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <!-- <title>Placeholder</title> -->
                        <!-- <rect width="100%" height="100%" fill="#eee"></rect> -->
                        <!-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> -->
                        <image xlink:href="image/productImage.jpg" width="735" height="500" />
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

        </div>
    </main>

<!-- changed -->
    <footer class="bg-dark mt-3 pt-5">
        <div>
            <div class="wrap-social-links">
            <!-- changed -->
                <!-- <div class="container" style="padding-top: 50px; padding-bottom: 20px;">
                    <h5 class="fw-bold text-light">Follow Us</h5>
                </div> -->
            <!-- choice -->
                <div class="navbar navbar-expand-md container">
                <!-- <div class="pt-5 pb-4 navbar navbar-expand-md container"> -->
                <!-- <changed> -->
                    <div v-for="(contact, index) in contacts" :key="contact.id" class="px-2">
                        <a v-if="index != 3" :href="contact.contact_link" target="_blank">
                            <!-- <img :src="contact.contact_icon" style="width: 40px; height: 50px; padding: 3px;" /> -->
                            <i :class="'bi ' + contact.contact_icon" class="fs-2 text-white rounded"></i>
                            <!-- <img :src="contact.contact_icon" style="width: 3em; height: 3em; padding: 3px;" /> -->
                        </a>
                        <a v-else :href="'https://wa.me/62' + contact.contact_link + '?text=Hi%2C%20after%20looks%20your%20website%20I%20interested%20with%20your%20products%20can%20you%20explain%20more%3F'" target="_blank">
                            <i :class="'bi ' + contact.contact_icon" class="fs-2 text-white rounded"></i>
                        </a>
                    </div>
                <!-- </changed> -->
                </div>
            </div>
            <div class="navbar navbar-expand-md container" style="">
                <p class="navbar-link text-light">© 2023–2024 Riyo & Calvin.</p>
            </div>
        </div>
    </footer>


</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'

defineProps({
    contacts: Object
})

</script>

<style scoped>
.background-image {
/* changed */
    background-image: url('../../../public/image/backgroundHeader.jpg');
    /* background-image: url('image/backgroundHeader.jpg'); */
    background-size: cover;
    background-repeat: no-repeat;
    height: 105vh;
}
</style>
