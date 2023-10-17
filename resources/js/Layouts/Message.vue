<template>

    <div class="col-12">
        <div class="card p-3" style="background-color: #f5f6f7;">
            <div class="row align-items-center">
                <div class="col-1">
                    <h5 class="mb-0">
                        <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                    </h5>
                </div>
                <div class="col-6">
                    <h5 class="fw-normal mb-0">
                        {{ message.user_name }}
                    </h5>
                    <h6 class="fw-normal mb-0">
                        {{ message.email }}
                    </h6>
                    <h6 class="fw-normal mb-0">
                        {{ message.created_at }}
                    </h6>
                </div>
                <div v-if="message.child_messages.length > 0" class="col-5 d-flex justify-content-end">
                    <a class="btn btn-primary" data-bs-toggle="collapse" :href="`#multiCollapse${message.id}`" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Comments</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <p class="py-2 mb-0">
            {{ message.text }}
        </p>
    </div>



    <div class="collapse multi-collapse" :id="`multiCollapse${message.id}`">
        <div v-if="message.child_messages.length > 0" class="col-12">
            <div class="row">
                <div class="col-11 ms-auto mt-2">
                    <div v-for="child_message in message.child_messages" class="row py-2 mb-3">
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
    props: [
        'message',
    ],
};
</script>
