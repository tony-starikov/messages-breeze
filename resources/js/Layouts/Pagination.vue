<script>
import { Link } from '@inertiajs/vue3'

export default {
    props: {
        data: Object
    },
    components: {
        Link,
    }
}
</script>

<template>
    <div class="row p-5 pt-0">
        <div class="col-12 d-flex justify-content-center">
            <Link
                v-for="(link, k) in data.links"
                :key="k"
                class="btn btn-primary mx-2"
                :class="{'active': link.active}"
                :href="link.url"
                v-html="link.label"
            />
        </div>
    </div>
</template>
