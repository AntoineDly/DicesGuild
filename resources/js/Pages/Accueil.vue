<template>
    <accueilLayout>
        <div>
            <div v-if="$page.props.user">
                <div class="bonretour"> 
                    Bon retour parmis nous Compagnon !
                </div>
                <div class="texteretour">
                    Ce lieu a été créé pour vous permetre de partir à l’aventure dans une des histoires créés par nos membres Maitres de jeux,
                    <br />ou encore de rencontrer des personnes comme vous et moi, cherchant à rejoindre un groupe pour participer à ces aventures.
                    <br /><br />
                    Que voulez vous faire aujourd’hui ?
                </div>
                <div class="options">
                    <inertia-link :href="route('accueil')" class="option">
                        <img class="image_option" :src="'/storage/images/forgeron.png'"/>
                        Retrouvez vos personnages<br />ou créez en un nouveau
                    </inertia-link>
                    <inertia-link :href="route('accueil')" class="option">
                        <img class="image_option" :src="'/storage/images/tableau_de_quetes.png'"/>
                        Tableau des quêtes<br />Rejoindre une aventure
                    </inertia-link>
                    <inertia-link :href="route('accueil')" class="option">
                        <img class="image_option" :src="'/storage/images/serveuse.png'"/>
                        Taverne<br />Rencontrer des aventuriers
                    </inertia-link>
                    <inertia-link :href="route('accueil')" class="option">
                        <img class="image_option" :src="'/storage/images/carte_membre.png'"/>
                        Inspecter ma carte de membre
                    </inertia-link>
                    <inertia-link :href="route('accueil')" class="option">
                        <img class="image_option" :src="'/storage/images/boutique.png'"/>
                        Accédez à la boutique
                    </inertia-link>
                </div>
                <construction />
            </div>

            <template v-else>
                <div class="background">
                    <div class="entete">Entrez donc cher étranger,<br />bienvenue dans la guilde aux dés !  </div>
                </div>

                <div class="presentation">
                    <div class="texte"> 
                        Rejoignez nous donc en ce lieu pour rencontrer nos autres aventuriers, et pourquoi pas partir ensemble à l’aventure !<br />Mais avant cela, nous allons avoir besoin de savoir à qui nous nous adressons.
                    </div>
                    <div class="tavernier"> <img :src="'/storage/images/tavernier.png'"/></div>
                </div>
                <div v-if="canLogin" class="connexion">
                    <div class="categorie">
                        <div class="texte_connexion">
                            Alors retirez donc cette capuche que nous puissions vous reconnaitre, 
                        </div>
                        <inertia-link :href="route('login')" class="bouton">
                            Connexion
                        </inertia-link>
                    </div>
                    <div v-if="canRegister" class="categorie">
                        <div class="texte_connexion">
                            Ou peut-être est-ce la première fois que vous venez dans notre humble guilde?
                        </div>
                        <inertia-link :href="route('register')" class="bouton">
                            Inscription
                        </inertia-link>
                    </div>
                </div>

                <div class="texte_fin">
                    Ou peut-être souhaitez vous visiter les lieux et en apprendre plus à notre sujet avant de nous rejoindre,<br />Si c’est le cas, prenez votre temps, je vous retrouverai ici après votre visite ! 
                </div>

                <construction />
            </template>
        </div>
    </accueilLayout>
</template>

<script>

    import accueilLayout from '@/Layouts/AccueilLayout'
    import Welcome from '@/Jetstream/Welcome'
    import construction from '@/Components/MessageConstruction'

    export default {
        components: {
            accueilLayout,
            Welcome,
            construction
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>

<style scoped>
.entete {
    font-family: 'AvaraBold';
    font-size: 40px;
    text-align: center;
    margin-left: 20%;
    margin-right: 20%;
    color:#F7E3D4;
    margin-top: 10%;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
}
.bonretour {
    font-family: 'AvaraBold';
    font-size: 30px;
    text-align: center;
    margin-left: 20%;
    margin-right: 20%;
    color: #422B24;
    margin-top: 5%;
}
.texteretour {
    flex: 25%;
    font-family: 'Trirong';
    font-size: 18px;
    text-align: center;
    margin-top: auto;
    margin-bottom: auto;
    color: #482C1E;
    margin-right: 15%;
    margin-left: 15%;
    line-height: 2.2;
}
.background {
    margin-top: 5%;
    padding-top: 20%;
    padding-bottom: 20%;
    justify-content: center;
    background-image:url('/storage/images/accueil.png');
    background-size:100% 100%;
    width: 100%;
}

.presentation {
    display: flex;
    justify-content: space-evenly;
    flex-flow: row wrap;
    margin-top: 10%;
    margin-bottom: 10%;
    margin-right: 12%;
    margin-left: 12%;
}
.texte {
    flex: 25%;
    font-family: 'Trirong';
    font-size: 18px;
    text-align: center;
    margin-top: auto;
    margin-bottom: auto;
    color: #482C1E;
    margin-right: 10%;
    line-height: 2.2;
}
.tavernier {
    width: 50%;
    min-width: 150px;
}
.texte_connexion {
    font-family: 'Trirong';
    font-size: 18px;
    text-align: center;
    color: #6C422D;
    line-height: 1.8;
}
.connexion {
    display: flex;
    justify-content: space-between;
    flex-flow: row wrap;
    margin-right: 10%;
    margin-left: 10%;
}
.categorie {
    flex: 10%;
    display :flex;
    flex-flow: column;
    justify-content: center;
    text-align: center;
    margin-right: 11%;
    margin-left: 11%;
}
.bouton {
    flex: 1 25%;
    margin-top: 4%;
    color: #6C422D;
    font-family: "Avara";
    border-radius: 20px;
    background-color: #E8AC7D;
    padding-top: 3%;
    padding-bottom: 3%;
    min-width: 150px;
    width: fit-content;
    margin-right: auto;
    margin-left: auto;
}
.texte_fin {
    text-align: center;
    font-family: "Trirong";
    font-size: 18px;
    color: #482C1E;
    margin-top: 5%;
    line-height: 1.8;
}
.options {
    display: flex;
    flex-flow: row wrap;
    margin-right: 20%;
    margin-left: 20%;
    justify-content: center;
    margin-top: 3%;
}
.option {
    display: flex;
    flex-flow: column;
    text-align: center;
    margin-top: 2%;
    margin-right: 2%;
    margin-left: 2%;
    text-decoration: underline;
}
.image_option {
    min-width: 100px;
    max-width: 200px;
    width: 100%;
}
@import "@fontsource/trirong/400.css"
</style>