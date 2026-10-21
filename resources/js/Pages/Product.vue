<template>
    <Head title= "Product" />

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <Link class="navbar-brand" href="home">
                    <img src="image/Logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Coffee Shop
                </Link>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <li class="navbar-nav me-3 me-md-auto mb-2 mb-md-0">
                        <Link class="nav-link active" aria-current="page" href="home">Home</Link>
                    </li>
                    <li class="navbar-nav me-1 me-md-auto mb-2 mb-md-0">
                        <Link class="nav-link active" aria-current="page" href="about-us">About Us</Link>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <main>
        <div class="container overflow-hidden" style="min-height: 100vh;; display: flex; flex-direction: column; text-align: center; padding-top: 70px;">
            <div class="row gy-5 row-cols-1 row-cols-md-2 row-cols-lg-3 card-group" style="padding-bottom: 30px">
                <div  v-for="product in products" :key="product.id">
                    <div class="col">
                        <div class="position-relative" style="min-height: 100%">
                            <div class="text-center card-body" style="padding: 30px">
                                <!-- <img src="image/productImage.jpg" class="rounded" alt="" style="width: 275px; height: 250px;"> -->
                            <!-- !changed -->
                                <img v-if="product.image_path" :src="'storage/' + product.image_path" class="rounded" alt="" style="width: 275px; height: 250px;">
                                <img v-else src="image/Logo.jpg" class="rounded" alt="" style="width: 275px; height: 250px;">
                            <!-- changed! -->
                                <div class="p-3 border-0 bg-ligt">
                                    <p class="fw-bolder fs-5">{{ product.product_name }}</p>
                                    <figcaption class="figure-caption text-center fs-6">{{ product.short_describe }}</figcaption>
                                </div>
                                    <!-- <p class="fw-bold">Rp. {{ $i }},-</p> -->
                            </div>
                            <div class="bd-example position-absolute top-100 start-50 translate-middle">
                                <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="modal" :data-bs-target="`#viewDetails-${product.id}`" style="border-radius: 36px;">View Details</button> -->
                                <button type="button" class="btn btn-secondary py-1 px-5" data-bs-toggle="modal" :data-bs-target="`#viewDetails-${product.id}`" style="border-radius: 36px;">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- {{-- pop up build --}} -->

                    <div class="modal fade" :id="`viewDetails-${product.id}`" tabindex="-1" aria-labelledby="viewDetailsLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="viewDetailsLabel">{{ product.product_name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="text-start lead">{{ product.product_describe }}</p>

                            <!-- <changed> -->
                                <p class="d-inline-block mt-3 mt-xl-5 text-start fs-5">Want more informations about that's product, just contact us</p>
                                <a :href="'https://wa.me/62' + contacts[3].contact_link + '?text=Hi%2C%20I%20intrested%20with%20your%20product%20with%20name%20%22' + product.product_name + '%22%2C%20can%20you%20explain%20to%20me%20more%3F'">
                                    <!-- <img src="image/whatsAppButton.png" class="ms-3" style="width: 120px; height: 50px;" alt=""> -->

                                    <svg width="205px" height="70px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <image href="image/whatsAppButton.png" x="5" y="10" width="200px"/>

                                    <!-- <svg width="205px" height="90px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <image href="image/whatsAppButton.png" x="5" y="0" width="150px" height="85px"/> -->

                                    </svg>
                                </a>
                            <!-- </changed> -->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- {{ contacts }} -->



    <!-- <footer>
        <div class="bg-dark" style="min-height: 30%">
            <p class="text-white fs-5">Testing</p>
        </div>
    </footer> -->

<!-- changed -->
    <footer class="bg-dark mt-3 pt-5">
        <div>
            <div class="wrap-social-links">
            <!-- changed -->
                <!-- <div class="container" style="padding-top: 50px; padding-bottom: 20px;">
                    <h5 class="fw-bold text-light">Follow Us</h5>
                </div> -->
                <div class="navbar navbar-expand-md container">
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


        <!-- <footer class= "container">
            <p class="text-start">© 2023–2024 Riyo & Calvin.</p>
        </footer> -->
            <!-- <p class="float-end"><a href="#">Back to top</a></p> -->


</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'

defineProps({
    products: Object,
    contacts: Object
})

</script>


<style scoped>

</style>
