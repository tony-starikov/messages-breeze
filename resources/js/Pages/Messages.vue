<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
    <section class="p-5 pb-0">
        <div class="row px-5">
            <div class="col-3">
                <h5 class="fw-normal">
                    <span>Name</span>
                    <a class="px-1" href="/">
                        <i class="bi bi-arrow-down"></i>
                    </a>
                    <a class="px-1" href="/">
                        <i class="bi bi-arrow-up"></i>
                    </a>
                </h5>
            </div>
            <div class="col-3">
                <h5 class="fw-normal">
                    <span>Email</span>
                    <a class="px-1" href="/">
                        <i class="bi bi-arrow-down"></i>
                    </a>
                    <a class="px-1" href="/">
                        <i class="bi bi-arrow-up"></i>
                    </a>
                </h5>
            </div>
            <div class="col-3">
                <h5 class="fw-normal">
                    <span>Date</span>
                    <a class="px-1" href="/">
                        <i class="bi bi-arrow-down"></i>
                    </a>
                    <a class="px-1" href="/">
                        <i class="bi bi-arrow-up"></i>
                    </a>
                </h5>
            </div>
        </div>

        <div v-for="parent_message in messages.data" class="row px-5 py-2 mb-3">
            <Message :message="parent_message" />
        </div>
    </section>

    <Pagination :data="messages.meta" />
</template>

<script>
import {Head} from "@inertiajs/vue3";
import Message from "@/Layouts/Message.vue";
import Pagination from "@/Layouts/Pagination.vue";
import { Link } from '@inertiajs/vue3'

export default {
    name: 'Messages',
    props: [
        'messages',
        'title',
    ],
    components: {
        Head,
        Message,
        Pagination,
        Link
    },
    mounted() {
        console.log('LINKS!!!!!!!!!!!!!!!!!!!!!!!!!!!!');
        // console.log(this.data.meta);
    }
}
</script>
