<template>
    <LayoutAuthRifa backgroundFooter="background-color: #F3F2D2;" backgroundDrawer="background: rgb(243, 224, 190);"
        :backgroundBar="colorBar" :imglogo="Logo"
        backgroundMain="background-image: linear-gradient(1deg, rgb(203 194 169), rgb(214 192 153 / 75%));">
        <v-responsive class=" h-100vh">
            <PageMobile />
            <PageDesktop />
        </v-responsive>
    </LayoutAuthRifa>
</template>
<style>
.rifasCard {
    max-width: 18% !important;
}

.card {
    z-index: 1;
    width: 90%;
    height: 500px;
}

.PageM {
    display: none;
}

.card-2 {
    z-index: 1;
    width: 95%;
    height: 300px;
}

@media only screen and (max-width: 500px) {
    .rifasCard {
        max-width: 44% !important;
    }

    .PageM {
        display: flex;
    }

    .PageD {
        display: none;
    }
}
</style>
<script>
import LayoutAuthRifa from '../../Layouts/LayoutAuthRifa.vue';
import PageMobile from './PageMobile.vue';
import PageDesktop from './PageDesktop.vue';
export default {
    components: {
        LayoutAuthRifa,
        PageMobile,
        PageDesktop
    },
    data() {
        return {
            model: null,
            colorBar: 'Background: transparent;',
            Logo: 'LogoRifa.png',
            larguraHome: '',
        }
    },
    mounted() {
        this.larguraHome = window.screen.width;
        if(this.larguraHome > 501){
        window.addEventListener('scroll', this.scrollHandler);
    }else{
            
            this.colorBar = 'background: rgb(214, 192, 153);'
        }
        console.log(this.larguraHome)
    },
    methods: {
        scrollHandler() {
            
            if (window.scrollY > 0) {
                this.colorBar = 'background: rgb(214, 192, 153); z-index: 2;     box-shadow: 0px 2px 4px -1px var(--v-shadow-key-umbra-opacity, rgba(0, 0, 0, 0.2)), 0px 4px 5px 0px var(--v-shadow-key-penumbra-opacity, rgba(0, 0, 0, 0.14)), 0px 1px 10px 0px var(--v-shadow-key-penumbra-opacity, rgba(0, 0, 0, 0.12));'; // Defina a cor desejada quando o scroll for maior que 0
                this.Logo = 'MACAPÁ.png'
            } else {
                this.colorBar = 'Background: transparent;'; // Defina a cor inicial quando o scroll for igual a 0
                this.Logo = 'LogoRifa.png'
            }
        }
    },
    beforeDestroy() {
        window.removeEventListener('scroll', this.scrollHandler);
    }
}
</script>