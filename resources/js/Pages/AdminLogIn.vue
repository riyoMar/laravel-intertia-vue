<template>
    <Head title="Login Admin" />
<!-- changed -->
    <div class="card navbar bg-dark border-3 col-10 offset-1 col-md-6 offset-md-3 mt-5" style="padding-top: 40px">
        <div class="card-header text-white fs-3">Admin Log In</div>

    <!-- changed -->
        <div class="card-body col-md-6">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>

        <!-- changed -> don't forget to add flash inside handleInertia middleware file -->
            <div v-if="$page.props.flash.message" class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    {{ $page.props.flash.message }}
                </div>
            </div>

            <form @submit.prevent="submit">
                <div class="mb-3 text-start">
                <!-- changed -->
                    <label for="username" class="form-label text-white fs-5">Username</label>
                    <input type="text" v-model="form.username" class="form-control fs-5" id="username" placeholder="Input Username" name="username" autofocus>
                    <div class="text-danger text-xs" v-if="errors.username">{{ errors.username }}</div>
                </div>
                <div class="mb-3 text-start">
                <!-- changed -->
                    <label for="password" class="form-label text-white fs-5">Password</label>
                    <input type="password" v-model="form.password" class="form-control fs-5" id="password" placeholder="Input Password" name="password">
                    <div class="text-danger text-xs" v-if="errors.password">{{ errors.password }}</div>
                </div>

                <!-- button type 1 -->
            <!-- !changed -->
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary px-4 fs-5">Submit</button>
            <!-- changed! -->
                </div>

                <!-- button type 2 -->
                <!-- <button type="submit" class="btn btn-secondary fs-5 mt-4" style="width: 100%">Submit</button> -->
            </form>
        </div>

    </div>
</template>

<script setup>
    import { Head, useForm } from '@inertiajs/vue3'

    defineProps({
        errors: Object
    });

    const form= useForm({
        username: null,
        password: null
    })

    function submit() {
        form.post('login')
    }

</script>

<style scoped>
</style>