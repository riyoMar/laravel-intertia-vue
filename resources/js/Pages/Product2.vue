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
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <Link class="nav-link active" aria-current="page" href="home">Home</Link>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <Link class="nav-link active" aria-current="page" href="about-us">About Us</Link>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <div class="container overflow-hidden" style="min-height: 100vh;; display: flex; flex-direction: column; text-align: center; padding-top: 70px;">
        <div class="row gy-5 row-cols-3 card-group" style="padding-bottom: 30px">
            <div  v-for="i in 10000">
                <div class="col">
                    <div class="position-relative">
                        <div class="text-center card-body" style="padding: 30px">
                            <img src="image/productImage.jpg" class="rounded" alt="" style="width: 275px; height: 250px;">
                            <div class="p-3 border-0 bg-ligt">
                                <p class="fw-bolder fs-5">Product Name</p>
                            </div>
                                <!-- <p class="fw-bold">Rp. {{ $i }},-</p> -->
                        </div>
                        <div class="bd-example position-absolute top-100 start-50 translate-middle">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#view_details" style="border-radius: 36px;">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- {{-- pop up build --}} -->

    <div class="modal fade" id="view_details" tabindex="-1" aria-labelledby="viewDetailsLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title h4" id="viewDetailsLabel">View Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
            </div>
          </div>
        </div>
    </div>


    <footer class="bg-dark mt-3">
        <div>
            <div class="wrap-social-links">
                <div class="container" style="padding-top: 50px; padding-bottom: 20px;">
                    <h5 class="fw-bold text-light">Follow Us</h5>
                </div>
                <div class="navbar navbar-expand-md container">
                    <div v-for="contact in contacts" :key="contact.id" class="px-2">
                        <a :href="contact.contact_link">
                            <!-- <img :src="contact.contact_icon" style="width: 40px; height: 50px; padding: 3px;" /> -->
                            <i :class="'bi ' + contact.contact_icon" class="fs-2 text-white rounded"></i>
                            <!-- <img :src="contact.contact_icon" style="width: 3em; height: 3em; padding: 3px;" /> -->
                        </a>
                    </div>
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

</style>