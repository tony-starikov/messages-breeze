<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
    <section class="p-5">
        <h1 class="h4 px-5">
            All topics
        </h1>

        <div class="row px-5">
            <div class="col-4">
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
            <div class="col-4">
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
            <div class="col-4">
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

        <div class="row px-5 py-2 mb-3 border border-2 rounded-4">
            <div class="col-4">
                <h5 class="fw-normal">
                    <span>Name</span>
                </h5>
            </div>
            <div class="col-4">
                <h5 class="fw-normal">
                    <span>Email</span>
                </h5>
            </div>
            <div class="col-4">
                <h5 class="fw-normal">
                    <span>Date</span>
                </h5>
            </div>
            <div class="col-12 mt-2">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid animi deleniti dicta, dignissimos dolorem et facilis fugiat incidunt ipsum labore libero, molestiae nam nemo nisi nulla numquam omnis optio porro, quidem quo rem repellat saepe suscipit temporibus veniam voluptatibus.
                </p>
            </div>
        </div>
    </section>
</template>

<script>

import {Head} from "@inertiajs/vue3";

export default {
    name: 'Messages',
    props: {
        message: String,
        title: String,
    },
    components: {
        Head,
    }
}
</script>
