<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
    <section class="p-5">
        <h1 class="h4 px-5">
            All topics
        </h1>

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

        <div v-for="parent_message in messages" class="row px-5 py-2 mb-3 border border-2 rounded-4">
            <Message :message="parent_message" />
        </div>
    </section>
</template>

<script>
import {Head} from "@inertiajs/vue3";
import Message from "@/Layouts/Message.vue";

export default {
    name: 'Messages',
    props: [
        'messages',
        'title',
    ],
    components: {
        Head,
        Message,
    },
    mounted() {
        console.log(this.messages);
    }
}
</script>
