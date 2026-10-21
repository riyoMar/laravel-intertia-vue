<template>
    <Head title= "Admin" />

    <header style="height: 1rem;">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark py-0" style="height: 3.5rem;">
            <div class="container-fluid">
                <p class="fs-3 text-white mt-2">Coffee Shop Admin</p>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <Link href="logout" method="post" class="bg-secondary text-white rounded px-4 py-1" as="button" type="button">Logout</Link>
                </ul>
            </div>
          </nav>
    </header>

    <div id="parentGroup">
        <div class="passHeader mt-5">
            <div class="card border border-secondary mx-2 pt-4" id="header">
                <div class="d-flex container card-body row-cols-3 my-3 justify-content-center">
                    <!-- <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#product" aria-expanded="false" @click="goProduct">Product</button> -->
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#product" aria-expanded="true">Product</button>

                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#contact" aria-expanded="false">Contact</button>
                </div>
            </div>
        </div>


        <!-- !show for collapse product -->

        <!-- <div id="product"> -->

        <!-- <div id="product"  ref="targetProduct" aria-hidden="true" style="display: none" class="modal modal-dialog" > -->
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->


        <!-- <div id="product" class="collapse" ref="targetProduct" data-bs-parent="#parentGroup"> -->
        <div id="product" class="collapse show" data-bs-parent="#parentGroup">
            <h3 class="display-6 text-center">List of Products</h3>

            <table class="table table-dark container" id="parentTable">
                <thead>
                    <tr>
                        <th class="text-center fs-4" style="width: 3vw;">ID</th>
                    <!-- changed -->
                        <th class="text-center fs-4" style="width: 45vw;">Name</th>
                        <th class="text-center fs-4">Action</th>
                        <!-- <th class="text-center fs-4" style="padding-left: 15rem;">Action</th> -->
                    </tr>
                </thead>

                <!-- "collapse [attr.data-target]="'#collapseExample'+{{i}}" -->

                <tbody v-for="data in datas.data" :key="data.id">
                    <tr>
                        <td class="table-active text-center fs-5">{{ data.id }}</td>
                        <td style="padding-left: 1em;" class="fs-5">{{ data.product_name }}</td>
                        <td class="text-end">
                            <button class="btn btn-secondary mx-5 px-5 fs-5" data-bs-toggle="modal" :data-bs-target="`#productEdit-${data.id}`">View</button>
                        </td>
                    </tr>
                    <!-- <div  :id="`productEdit-${data.id}`" class="modal fade modal-lg position-absolute top-50 start-50 translate-middle mt-5 rounded-3"> -->
                    <div  :id="`productEdit-${data.id}`" class="modal fade modal-lg offset-3 mt-5 rounded-3"  tabindex="-1" aria-labelledby="productEditLabel" aria-hidden="true">
                    <!-- <div  :id="`productEdit-${data.id}`" class="modal fade modal-lg position-absolute translate-middle-x translate-middle-y mt-5 rounded-3"> -->
                    <div class="modal-content">
                        <tr>
                            <td class="text-center" colspan="3">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                                <!-- <span class="fs-5 d-flex justify-content-center text-center">{{ data.product_name }}<button type="button" class="btn-close bg-light" style="margin-left: 28em;" data-bs-dismiss="modal" aria-label="Close"></button></span> -->
                                                <!-- <span class="fs-5 justify-content-start">{{ data.product_name }}</span> -->
                                                <span class="text-start fs-5" style="display: inline-block; min-width: 95%">{{ data.product_name }}</span>
                                                <button class="btn btn-close bg-light p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-active fs-5" style="width: 20vw">ID Product</td>
                                            <td class="fs-5 text-start">{{ data.id }}</td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fs-5" style="height: 150px;">Short Describes</td>
                                            <td class="fs-5 text-start">{{ data.short_describe}}</td>
                                        </tr>
                                        <tr class="fs-5">
                                            <td class="table-active" style="height: 150px;">Product Describes</td>
                                            <td class="text-start">{{ data.product_describe}}</td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fs-5 py-3">Picture Name</td>
                                            <td>
                                                <div v-if="data.image_path">
                                                    <tr class="fs-5 text-start">
                                                        <td>{{ data.image_path }}</td>
                                                    </tr>
                                                    <!-- <tr class="fs-5">
                                                        <td class="text-end px-3 col-6">
                                                            <button @click="deleteProduct(data.id)" class="btn btn-secondary px-3 fs-5">Delete</button>
                                                            <a :href="'storage/product/' + data.image_path" target="_blank">
                                                                <button class="btn btn-secondary px-3 fs-5 ms-3">View</button>
                                                            </a>
                                                        </td>
                                                    </tr> -->
                                                </div>
                                            <!-- !changed -->
                                                <div v-else>
                                                    <tr class="fs-5 text-start text-warning">!!!don't have image inside here, please input an image!!!</tr>
                                                </div>
                                            <!-- changed! -->
                                                <tr>
                                                    <td>
                                                        <!-- !show pictures review -->

                                                        <div class="container">
                                                            <div class="modal fade" id="viewPicture" role="dialog" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body" style="min-height: 30vh">
                                                                            <h3 class="text-center">Index now: {{ index }}</h3>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <h3>This footer of the modal</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- show pictures review! -->


                                                    </td>
                                                </tr>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="text-end" colspan="2">
                                            <!-- changed -->
                                                <button @click.prevent="editProduct(data.id)" type="button" class="btn btn-secondary px-4 fs-5 mx-3" data-bs-dismiss="modal">Edit</button>
                                                <button @click.prevent="deleteProduct(data.id)" data-bs-dismiss="modal" type="button" class="btn btn-secondary px-4 fs-5">Delete</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </td>
                        </tr>
                    </div>
                    </div>
                </tbody>

                <tfoot>
                    <tr>
                        <td class="text-center" colspan="3">
                            <button @click="createProduct()" class="btn btn-secondary px-5 fs-5">Add</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div class="container d-flex justify-content-center mb-5">
                <template v-for="link in datas.links" :key="link.label">
                    <Link :href="link.url ?? ' '" v-html="link.label" class="flex items-center justify-center px-3 py-2 mx-1 text-sm rounded  text-light bg-secondary" :class="{'bg-dark': link.active}"/>
                </template>
            </div>

        </div>

        <!-- show for collapse product! -->

        <!-- !show for collapse contact -->
        <div id="contact" class="collapse" data-bs-parent="#parentGroup">
            <!-- <h3 class="container display-6 text-start">Contacts</h3> -->
            <h3 class="display-6 text-center">Contacts</h3>

            <table class="table table-dark container">
                <thead class="fs-4">
                    <tr>
                    <!-- changed -->
                        <th class="text-center" style="width: 15vw;">Name</th>
                    <!-- changed -->
                        <th class="text-center">Link</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody v-for="contact in contacts" :key="contact.id" class="fs-5">
                    <tr>
                        <td class="table-active text-center">{{ contact.contact_name }}</td>
                        <td style="padding-left: 1em;">{{ contact.contact_link }}</td>
                        <td class="table-active text-center">
                            <button @click="editContact(contact.id)" class="btn btn-secondary mx-4 px-4 fs-5">Edit</button>
                            <!-- <button class="btn btn-secondary mx-4 px-4 fs-5" data-bs-toggle="modal" :data-bs-target="`#contactEdit-${contact.id}`">Edit</button> -->
                        </td>
                    </tr>

                    <!-- <div  :id="`contactEdit-${contact.id}`" class="modal fade rounded-3 offset-4 mt-5" style="width: 40%;" tabindex="-1" aria-labelledby="contactEditLabel" aria-hidden="true">
                        <div class="modal-dialog modal-content">
                            <td class="text-center" colspan="3">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="text-start fs-5" style="display: inline-block; min-width: 90%">{{ contact.contact_name }}</span>
                                                <button class="btn btn-close bg-light p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fs-5 text-start py-5">
                                                <input v-model="form.contact_link" :key="contact.id" class="form-control" type="text" placeholder="Input Contact Link here" aria-label="default input example">
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="mt-1 text-center">
                                                <button type="button" class="btn btn-secondary px-4 fs-5 mx-3">Submit</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </td>
                        </div>
                    </div> -->

                    <!-- <tr>
                        <td class="table-active text-center">Instagram</td>
                        <td style="padding-left: 1em;">https://instagram.com</td>
                        <td class="table-active text-center">
                            <button class="btn btn-secondary mx-4 px-4 fs-5">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-active text-center">Twitter</td>
                        <td style="padding-left: 1em;">https://twitter.com</td>
                        <td class="table-active text-center">
                            <button class="btn btn-secondary mx-4 px-4 fs-5">Edit</button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <!-- show for collapse contact! -->

    </div>

    <div>
        <!-- {{ products }} -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                ref: null,
                desc: [
                    "Coffee coffee coffee coffee coffee coffee",
                    "Coffee coffee coffee coffee",
                    "Coffee",
                ],
            }
        },
        methods: {
            goProduct() {
                this.$refs.targetProduct.scrollIntoView({ behavior: 'smooth' });
            },
            uploadImage(event) {
                const file = event.target.files[0];
                // this.uploadFile(file);
                this.storeImageProduct();
            },
        }
    };
</script>

<script setup>
import { Head, Link, router, useForm } from '@inertiajs/vue3'


const admin = defineProps({
    datas: Object,
    contacts: Object
})

const form = useForm ({
    contact_link: admin.contacts.contact_link
})

// console.log(form)

function createProduct() {

    router.get('/create-product')
}

function editContact(id) {
    router.get('/edit-contact/' + id)
}

function deleteProduct(id) {
    return router.delete('/deleteProduct/' + id)
}

const imageProduct = useForm({
    id: '',
    image_path: null,
})

function storeImageProduct() {
    imageProduct.post('/submit-image-product')
}

function editProduct(id) {
    router.get('/editProduct/'+ id)
}

</script>

<style scoped>
    .inputButton {
        background-color: #6c757d;
        color: white;
        padding: 0.5rem;
        height: 2.75rem;
        font-family: sans-serif;
        border-radius: 0.25rem;
        cursor: pointer;
        margin-top: 1rem;
    }
</style>