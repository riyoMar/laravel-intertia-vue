<template>
    <Head title="Edit Contact" />

            <div class="card col-6 offset-3 mt-1">
                <div class="card-header display-6 text-muted">Edit Contact Link</div>
            <!-- !changed -->
            <form>
                <div class="card-body">
            <!-- changed! -->
                        <div class="mb-3">
                            <label for="product_name" class="form-label fs-3">{{ contact.contact_name }}</label>
                            <input v-model="form.contact_link" class="form-control fs-5" type="text" id="contact_link">
                        <!-- changed -->
                            <div class="text-danger" v-if="errors.contact_link">{{ errors.contact_link }}</div>
                        </div>
            <!-- !changed -->
                        <div class="card-footer text-center">
                            <button @click="submit(contact.id)" type="button" class="btn btn-secondary"
                                style="min-width: 95%;">Submit</button>
                        </div>
                    </div>
                </form>
            <!-- changed! -->
            </div>

</template>

<script setup>
import { Head, router, useForm } from '@inertiajs/vue3'

const props = defineProps({
    contact: Object,
// changed 
    errors: Object
})

const form = useForm ({
    contact_link: props.contact.contact_link
})

function submit(id) {
    form.post('/update-contact/' + id, form)
}

</script>

<style lang="scss" scoped></style>