<template>
    <div class="PageD w-100 h-100 mx-auto">
        <v-carousel height="400" style="box-shadow: 1px 3px 10px 0px;" hide-delimiters :show-arrows="false">
            <v-carousel-item v-for="(slide, i) in slides" :key="i">
                <v-sheet style="background-image: linear-gradient( 98deg, #fff459, #FF914D);" height="100%">
                    <div class="d-flex fill-height justify-space-around align-center">
                        <div class="text-h2 d-flex flex-row">
                            <div class="d-flex w-25 h-100" style="    position: relative;
    left: -72px;
    top: 95px;
    height: 100% !important;
    width: 20% !important;
">
                                <v-img src="/img/dinF.png" class="w-75 h-50"></v-img>
                            </div>
                            <div class="d-flex flex-column justify-center w-25">
                                <div class="w-25 h-25 d-flex  align-end mb-4">
                                    <v-img src="/img/pix.png" class="w-75 h-75"></v-img>
                                    <div style="font-family: 'Montserrat'; color:#209383; font-size: 80px;">PIX</div>
                                </div>
                                <div class="pl-8 w-50 d-grid">
                                    <div
                                        style="font-family: 'Oswald'; color: white; font-weight: bold; letter-spacing: 1px;">
                                        PREMIADO</div>
                                    <div class="text-center w-75 h-100 d-flex flex-column align-center pl-3 mt-5">
                                        <v-btn block rounded="xl" class="mb-4" elevation="8" color="white" min-width="30"
                                            @click="handleLinkClick"
                                            style="text-transform: lowercase; width: 128px !important; min-width: 30px !important; font-family: 'TT Norms'; font-size: 13px; font-weight: 800;">Compre
                                            Agora</v-btn>
                                        <v-btn block rounded="xl" class="mb-4" elavation="0" min-width="30"
                                            @click="handleLinkClick"
                                            style="min-width: 30px !important; width: 180px !important; background: rgb(255 255 255 / 50%); color: black !important; text-transform: uppercase; letter-spacing: 0; font-family: 'TT Norms'; font-size: 13px; font-weight: bold;">venha
                                            concorrer</v-btn>
                                    </div>

                                </div>
                            </div>
                            <div class=" d-flex align-center " style="position: relative;">
                                <v-img src="/img/dinheiro.png" class=" h-75"></v-img>
                                <div class="dinF" style="">
                                    <v-img src="/img/dinF.png" class="w-100 h-100"></v-img>
                                </div>
                            </div>
                            <div class="h-100" style="position: relative">
                                <div class="DinCaindo">
                                    <v-img src="/img/dinF.png" class="w-100 h-100"></v-img>
                                </div>
                            </div>
                        </div>


                    </div>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>
        <v-progress-linear color="deep-purple-accent-4" indeterminate rounded height="6"></v-progress-linear>
        <div class="w-100 h-screen d-flex " v-if="Carregando" @click="Carregando = false"
            style="z-index: 2000; position: fixed; top: 0; color: black; background: #0000009c; border-radius: 1px;">
            <div class="w-50 mx-auto d-flex flex-column justify-center">
                <div>
                    <v-img src="/img/logo.png" class=" mx-auto mb-5 logoLoad"></v-img>
                </div>
                <v-progress-linear color="white" indeterminate rounded height="10"
                    style="width: 15vw !important; position: absolute; top: 64%;"></v-progress-linear>
            </div>

        </div>

        <div class="w-100 d-flex mt-4">
            <v-sheet class="mx-auto my-5 w-100 d-flex justify-center" elevation="0" :max-width="largura"
                style="background-image: linear-gradient(1deg, rgb(206 196 171), rgb(214 201 174));">
                <v-slide-group prev-icon="mdi-chevron-left-circle" next-icon="mdi-chevron-right-circle"
                    class="pa-4 text-center" center-active show-arrows>

                    <v-slide-group-item v-for="n in sorteios" :key="n" class="mx-auto d-flex justify-center">
                        <v-card @click="handleLinkClick" :href="link" class="ma-4" elevation="8" height="310"
                            style=" background-color: rgb(154 206 209) !important; border-top-left-radius: 16px; border-top-right-radius: 16px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;"
                            width="200">

                            <div class="d-flex fill-height flex-column align-center justify-center">
                                <v-img :src="`/img/slides/${n.slides}`" style="height: 14vh; border: 3px solid rgb(191 236 240);  border-radius: 16px 16px 0px 0px;  border-bottom: none;" cover></v-img>

                                <v-card-title
                                    style="font-family: 'Lato' !important; font-weight: bold; color: white; letter-spacing: 0.155em; line-height: 30px; font-size: 18px;">
                                    SORTEIO
                                </v-card-title>

                                <v-card-subtitle
                                    style="font-family: 'Oswald' !important; font-weight: 700; color: white; letter-spacing: 0;  line-height: 60px; font-size: 61px; opacity: 1;">
                                    {{ n.premio }}
                                </v-card-subtitle>
                                <v-card-title
                                    :style="`font-family: system-ui !important; font-weight: 900; color: white;  line-height: 30px; font-size: 18px; background: ${n.color}; width: 100%; margin-top: 10px;`">
                                    {{ n.status }}
                                </v-card-title>
                            </div>

                        </v-card>
                    </v-slide-group-item>
                </v-slide-group>
            </v-sheet>
        </div>
        <div class="w-100 px-3 pr-4">
            <v-alert style="background: linear-gradient(45deg, #06ffc7, #8812ff) !important; z-index: 2;" theme="light"
                elevation="8" prepend-icon="/img/logo.png" prominent>
                <v-card-title style="font-family: 'Oswald' !important; color: white; font-size: 30px"
                    class="w-100 text-center">
                    DESCRIÇÂO
                </v-card-title>

            </v-alert>
            <v-alert color="white" theme="light" prepend-icon="/img/logo.png" elevation="0" rounded="0"
                style="width: calc(100% - 10px); margin: 0 auto" prominent>
                <v-card-title style="font-family: 'Oswald' !important; color: white; font-size: 30px"
                    class="w-100 text-center">
                    DESCRIÇÂO
                </v-card-title>

            </v-alert>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            largura: '',
            Carregando: false,
            link: null,
            slides: [
                'PIX DE 1000 REAIS',
                'Second',
                'Third',
                'Fourth',
                'Fifth',
                'Sixth',
                'Seventh',
                'Eighth'
            ],
            sorteios: [
                { slides: '1.png', premio: '1.000', status: 'PREVISTO P/ JUL', color: '#ff5c00' },

            ],
        }
    },
    mounted() {
        this.largura = window.screen.width
        // Adiciona o manipulador de eventos antes de descarregar a página
        window.addEventListener('beforeunload', this.handleUnload);
    },
    methods: {
        handleLinkClick() {
            this.Carregando = true;
            setTimeout(function () {
                window.location.href = '/rifa/1';
            }, 1500)
        },
        handleUnload() {
            this.Carregando = false;
        }
    }

}
</script>
<style>
.dinF {
    position: absolute;
    left: 94px;
    top: 59px;
    width: 336px !important;
    transform: rotate(27deg);
    animation: transicao 8s infinite;
}

.DinCaindo {
    position: absolute;

    left: 0;
    width: 229px;
    height: 199px;
    transform: rotate(26deg);

}

.logoLoad {
    width: 25%;
    animation: loading 3s infinite linear;
    -webkit-filter: drop-shadow(0px 0px 2px #999);
}

@keyframes loading {
    50% {
        width: 30%;
        -webkit-filter: drop-shadow(0px 0px 5px #999);
    }
}

@keyframes transicao {
    50% {
        position: absolute;
        left: 132px;
        top: -10px;
        /* height: 317px; */
        width: 500px;
        transform: rotate(37deg);
    }

    100% {
        position: absolute;
        left: 94px;
        top: 59px;
        width: 336px !important;
        transform: rotate(27deg);
    }

}

@keyframes caindo {
    10% {
        position: absolute;
        top: 0;
        width: 229px;
        height: 199px;
        transform: rotate(21deg);
    }

    20% {
        position: absolute;
        top: 0;
        width: 229px;
        height: 199px;
        transform: rotate(10deg);
    }

    40% {
        position: absolute;
        top: 45px;
        left: -30px;
        width: 229px;
        height: 199px;
        transform: rotate(3deg);
    }

    50% {
        position: absolute;
        top: 100px;
        left: -7px;
        width: 229px;
        height: 199px;
        transform: rotate(15deg);
    }

    60% {
        position: absolute;
        top: 152px;
        left: 2px;
        width: 229px;
        height: 199px;
        transform: rotate(30deg);
    }

    70% {
        position: absolute;
        top: 210px;
        left: 2px;
        width: 229px;
        height: 199px;
        transform: rotate(60deg);
    }

    80% {
        position: absolute;
        top: 232px;
        left: -15px;
        width: 229px;
        height: 199px;
        transform: rotate(20deg);
    }

    90% {
        position: absolute;
        top: 286px;
        left: -40px;
        width: 229px;
        height: 199px;
        transform: rotate(1deg);
    }

    100% {
        position: absolute;
        top: 427px;
        left: -40px;
        width: 229px;
        height: 199px;
        transform: rotate(26deg);
    }
}</style>