<template>
    <div class="col-3">
        <h5 class="fw-normal mb-0">
            {{ message.user_name }}
        </h5>
    </div>
    <div class="col-3">
        <h5 class="fw-normal mb-0">
            {{ message.email }}
        </h5>
    </div>
    <div class="col-3">
        <h5 class="fw-normal mb-0">
            {{ message.created_at }}
        </h5>
    </div>
    <div v-if="message.child_messages.length > 0" class="col-3">
        <a class="btn btn-primary" data-bs-toggle="collapse" :href="`#multiCollapse${message.id}`" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Comments</a>
    </div>
    <div class="col-12 mt-2">
        <p class="pt-2 mb-0 border-2 border-top">
            {{ message.text }}
        </p>
    </div>
    <div class="collapse multi-collapse" :id="`multiCollapse${message.id}`">
        <div v-if="message.child_messages.length > 0" class="col-12">
            <div class="row">
                <div class="col-10 ms-auto mt-2">
                    <div v-for="child_message in message.child_messages" class="row px-5 py-2 mb-3 border border-2 rounded-4">
                        <Message :message="child_message" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Message',
    props: {
        message: Array
    },
    data() {
        return {
            message: this.message
        }
    }
};
</script>
