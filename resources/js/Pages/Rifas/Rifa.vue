<template>
    <LayoutAuth backgroundFooter="background-color: #F3F2D2; " backgroundDrawer="background: rgb(243, 224, 190);" backgroundBar="background: rgb(214, 192, 153);" backgroundMain="background-image: linear-gradient(1deg, rgb(203 194 169), rgb(214 192 153 / 75%));" >
        <v-responsive class="overflow-y-auto h-100vh">

            <v-card class="card mx-auto mt-8 rounded-xl d-flex flex-wrap" style="background-color: #FFF5E2;">
                <div class="mx-3">
                <v-avatar class="mt-2 mx-auto" v-for="num in 500 " :key="num" color="grey-darken-1">
                    {{ num }}
                </v-avatar>
            </div>
            </v-card>
            <v-card class="card-2 mx-auto mt-8 rounded-lg" style="background-color: #FFF5E2;">

            </v-card>
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
import LayoutAuth from '../../Layouts/LayoutAuth.vue';

export default {
    components: {
        LayoutAuth
    }
}
</script>