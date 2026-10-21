<template>
    <Head title="Edit Product" />

    <div class="card col-6 offset-3 mt-1">
        <div class="card-header display-6 text-muted">Edit Product</div>
    <!-- !changed -->
        <form>
            <div class="card-body">
    <!-- changed! -->
                <div class="mb-3">
                    <label for="product_name" class="form-label fs-5">Product Name</label>
                    <input type="text" v-model="form.product_name" class="form-control" id="product_name">
                <!-- changed -->
                    <div class="text-danger" v-if="errors.product_name">{{ errors.product_name }}</div>
                </div>

                <div class="mb-3">
                    <label for="short_describe" class="form-label fs-5">Short Describes</label>
                    <textarea class="form-control inputArea" v-model="form.short_describe" id="short_describe"></textarea>
                <!-- changed -->
                    <div class="text-danger" v-if="errors.short_describe">{{ errors.short_describe }}</div>
                </div>

                <div class="mb-3">
                    <label for="product_describe" class="form-label fs-5">Describes</label>
                    <textarea class="form-control inputArea" v-model="form.product_describe" id="product_describe"></textarea>
                <!-- changed -->
                    <div class="text-danger" v-if="errors.product_describe">{{ errors.product_describe }}</div>
                </div>

            <!-- changed -->
                <div>
                    <div class="mb-3 row border border-secondary rounded" style="min-height: 80px;">
                        <div class="mt-4 form-label col-3 fs-5">Image</div>
                        <div class="col-9 border-start border-secondary">
                            <p class="">{{  product.image_path }}</p>
                            <button @click="deleteImage(product.id)" :key="product.id" v-if="product.image_path" type="button" class="btn btn-secondary offset-4 px-5 mb-2">Delete</button>
                            <div v-else>
                                <div class="input-group">
                                    <input @input="form.image_path = $event.target.files[0]" type="file" class="form-control" id="image_product" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    <!-- <button class="btn btn-secondary px-3" type="button" id="image_product">Add</button> -->
                                </div>
                            </div>
                            <!-- <button v-else class="btn btn-secondary offset-4 px-5 mb-2">Add</button> -->
                        </div>
                    </div>

            <!-- !changed -->
                    <div class="text-danger" v-if="errors.image_path">{{ errors.image_path }}</div>
                </div>
            <!-- changed! -->

<!-- !changed -->
                <div class="card-footer text-center">
                    <button @click="submit(product.id)" type="button" class="btn btn-secondary" style="min-width: 95%;">Submit</button>
                </div>
            </div>
        </form>
    </div>
<!-- changed! -->

</template>


<script setup>
import { Head, router, useForm } from '@inertiajs/vue3'

const props = defineProps({
    product: Object,
// changed 
    errors: Object
})

const form = useForm({
    product_name: props.product.product_name,
    short_describe: props.product.product_describe,
    product_describe: props.product.product_describe,
    image_path: props.product.image_path
})

function submit(id) {
    form.post('/submit-edit-product/' + id, form)
}

function deleteImage(id) {
    return router.delete('/deleteImage/' + id)
}

/* changed
// (function()
// {
//   if( window.localStorage )
//   {
//     if( !localStorage.getItem('firstLoad') )
//     {
//       localStorage['firstLoad'] = true;
//       window.location.reload();
//     }
//     else
//       localStorage.removeItem('firstLoad');
//   }
// })();
*/

</script>

<style scoped>
.inputArea {
    min-height: 100px;
}

</style>