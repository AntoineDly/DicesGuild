<template>
    <div class="construction">
        <img class="alerte" :src="'/storage/images/alerte.svg'"/>
        Dices’guild est en cours de construction.<br />Suivez notre développement sur la page Nouveautés<br />ou sur les réseaux sociaux: Facebook, Twitter ou Discord
    </div>
</template>

<script>
    export default {
    }
</script>

<style scoped>
.construction {
    text-align: center;
    margin-left: 10%;
    margin-right: 10%;
    margin-top: 5%;
    color: #482C1E;
    font-family: "Trirong";
    font-size: 15px;
    background-color: #BFCAD9;
    padding-top: 2%;
    padding-bottom: 2%;
    line-height: 1.8;
}
.alerte {
    width: 2%;
    margin-left: auto;
    margin-right: auto;
}
@import "@fontsource/trirong/400.css"
</style>