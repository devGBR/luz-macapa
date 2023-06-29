<template>
    <div class="PageD w-100 h-100 mx-auto">
        <v-carousel cycle height="400" hide-delimiter-background show-arrows="hover">
            <v-carousel-item v-for="(slide, i) in slides" :key="i">
                <v-sheet :color="colors[i]" height="100%">
                    <div class="d-flex fill-height justify-center align-center">
                        <div class="text-h2">
                            {{ slide }} Slide
                        </div>
                    </div>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>
        <div class="w-100 d-flex mt-4">
            <v-sheet class="mx-auto my-5 w-100" elevation="0" :max-width="largura"
                style="background-image: linear-gradient(1deg, rgb(206 196 171), rgb(214 201 174));">
                <v-slide-group v-model="model" prev-icon="mdi-chevron-left-circle" next-icon="mdi-chevron-right-circle"
                    class="pa-4 text-center" center-active show-arrows>

                    <v-slide-group-item v-for="n in sorteios" :key="n" v-slot="{ isSelected, toggle }">
                        <v-card :color="isSelected ? 'primary' : 'grey-lighten-1'" class="ma-4" elevation="8" height="310"
                            style=" background-color: #d1bb92 !important; border-top-left-radius: 16px; border-top-right-radius: 16px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;"
                            width="200" @click="toggle">
                            <div class="d-flex fill-height flex-column align-center justify-center">
                                <v-img :src="`/img/slides/${n.slides}`" style="height: 14vh; border: 3px solid #ad9a78;
    border-radius: 16px 16px 0px 0px;
    border-bottom: none;" cover></v-img>

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

    </div>
</template>
<script>
export default {
    data() {
        return {
            largura: '',
            colors: [
                'indigo',
                'warning',
                'pink darken-2',
                'red lighten-1',
                'deep-purple accent-4',
                'blue darken-1',
                'green accent-4',
                'orange darken-3'
            ],
            slides: [
                'First',
                'Second',
                'Third',
                'Fourth',
                'Fifth',
                'Sixth',
                'Seventh',
                'Eighth'
            ],
            sorteios: [
                { slides:'first.png', premio: '1.000', status: 'PREVISTO P/ JUL', color: '#e8e815' },
                { slides:'second.png', premio: 'PREMIO', status: 'VENHA ADQUIRIR', color: '#1ae563' },
                { slides:'thrid.png', premio: 'PREMIO', status: 'FINALIZADO', color: '#e80707' },
                { slides:'fourth.png', premio: 'PREMIO', status: 'FINALIZADO', color: '#e80707' },
                { slides:'fifth.png', premio: 'PREMIO', status: 'FINALIZADO', color: '#e80707' },
                { slides:'sixth.png', premio: 'PREMIO', status: 'FINALIZADO', color: '#e80707' },
                { slides:'seventh.png', premio: 'PREMIO', status: 'FINALIZADO', color: '#e80707' },
                { slides:'eighth.png', premio: 'PREMIO', status: 'FINALIZADO', color: '#e80707' },
            ],
        }
    },
    mounted() {
        this.largura = window.screen.width
    }
}
</script>