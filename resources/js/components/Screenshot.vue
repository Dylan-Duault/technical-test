<template>
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Website Screenshot Request</h1>
            <div class="input-group mb-3">
                <input v-model="websiteUrl" name="url" class="form-control" placeholder="Enter URL" aria-label="Enter URL" required>
                <button @click="requestScreenshot" class="btn btn-primary" type="submit">
                    <span v-if="!loading">
                        Request Screenshot
                    </span>
                    <div v-else>
                        <span class="spinner-border spinner-border-sm me-1" aria-hidden="true"></span>
                        <span role="status">Loading...</span>
                    </div>
                </button>
            </div>
            <div v-if="loading" class="d-flex justify-content-center">
                <div class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <img v-if="websiteImage" :src="websiteImage" class="img-fluid mt-3" alt="Website Screenshot">
            <div v-if="websiteImage" class="d-flex justify-content-end">
                <a :href="websiteImage" download="screenshot.png" class="btn btn-primary mt-3" role="button">Download</a>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const props = defineProps({
    screenshotRoute: String
});

const websiteUrl = ref();
const websiteImage = ref();
const loading = ref(false);

const requestScreenshot = () => {
    loading.value = true;

    if (!checkUrl(websiteUrl.value)) {
        loading.value = false;
        return;
    }

    axios.post(props.screenshotRoute, { url: websiteUrl.value })
        .then(response => {
            websiteImage.value = response.data.image_url;
        })
        .catch(error => {
            // Afficher un message via toastr ou autre, solution à voir avec Pierre-Yves
        });
    loading.value = false;
}

const checkUrl = (url) => {
    return url.match(/^http(s)?:\/\/.+\.[\w]{2,5}[a-zA-Z/-_\.]$/);
}
</script>
