<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <Link class="navbar-brand fw-bold" :href="route('home')" style="min-width: 10vw;">Messages</Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 w-100 justify-content-center">
                    <li class="nav-item">
                        <Link class="nav-link" aria-current="page" :href="route('home')">Main</Link>
                    </li>
                </ul>
                <div class="d-flex">
                    <a target="_blank" href="https://github.com/tony-starikov" class="btn btn-link text-end" style="min-width: 10vw;">
                        <i class="bi bi-github text-dark" style="font-size: 2rem"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3'

export default {
    name: 'Navigation',
    components: {
        Link,
    }
};
</script>
