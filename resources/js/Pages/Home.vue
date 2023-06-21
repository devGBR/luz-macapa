<template>
    <LayoutAuth>
        <v-responsive class="overflow-y-auto h-100vh">
            
            <v-card class="card mx-auto mt-8 rounded-xl"  style="background-color: #FFF5E2;">

            </v-card>
            <v-card class="card-2 mx-auto mt-8 rounded-lg"  style="background-color: #FFF5E2;">

            </v-card>               
        </v-responsive>
    </LayoutAuth>
</template>
<style>
.card{
    z-index: 1;
    width: 90%;
    height: 500px;
}
.card-2{
    z-index: 1;
    width: 95%;
    height: 300px;
}
</style>
<script>
import LayoutAuth from '../Layouts/LayoutAuth.vue';

export default{
    components: {
        LayoutAuth
    }
}
</script>