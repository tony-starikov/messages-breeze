<template>
    <div class="container-fluid">
        <Navigation />
        <slot />
    </div>
</template>

<script>
import Navigation from "@/Layouts/Navigation.vue";

export default {
    name: 'Layout',
    components: {
        Navigation,
    }
}
</script>
