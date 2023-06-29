<template>
    <LayoutAuth backgroundFooter="background-color: #d6d6d6;" imglogo="MACAPÁ.png" backgroundDrawer="background: #2c2c2c; color: white;" backgroundBar="background: #ffffff;" background-main="background: background-image: linear-gradient(1deg, rgb(201 216 226 / 68%), rgb(233 242 255 / 75%));">
        <v-responsive class="overflow-y-auto h-100vh">

          
        </v-responsive>
    </LayoutAuth>
</template>
<style>
.card {
    z-index: 1;
    width: 90%;
    height: 500px;
}

.card-2 {
    z-index: 1;
    width: 95%;
    height: 300px;
}
</style>
<script>
import LayoutAuth from '../Layouts/LayoutAuth.vue';

export default {
    components: {
        LayoutAuth
    }
}
</script>