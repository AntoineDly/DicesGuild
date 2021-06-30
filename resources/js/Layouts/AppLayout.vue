<template>
    <div>
        <div class="header">
            <!-- Logo -->
            <div class="logo">
                <inertia-link :href="route('accueil')">
                    <img :src="'/storage/images/Logopageaccueil.png'"/>
                </inertia-link>
            </div>

            <!-- Navigation Links -->
            <div class="nav">

                <!-- <jet-nav-link :href="route('createArticle')">
                    Create Article
                </jet-nav-link> -->
                <jet-nav-link :href="route('accueil')" class="text">
                    Personnages
                </jet-nav-link>

                <jet-nav-link :href="route('accueil')" class="text">
                    Taverne
                </jet-nav-link>

                <jet-nav-link :href="route('accueil')" class="text">
                    Tableau de quêtes
                </jet-nav-link>

                <jet-nav-link :href="route('articles')" class="text">
                    Actualités
                </jet-nav-link>

                <jet-nav-link :href="route('accueil')" class="text">
                    Nouveautés
                </jet-nav-link>

                <jet-nav-link :href="route('accueil')" class="text">
                    Boutique
                </jet-nav-link>

            </div>
        </div>

        <!-- Page Content -->
        <main>
            <slot></slot>
        </main>

        <div class="footer">
            <div class="plan">
                <div class="titre_footer">
                    Plan du site
                </div>
                <div>
                    Personnages<br />
                    Taverne<br />
                    Tableau de quêtes<br />
                    Carte de membre<br />
                    Boutique<br />
                </div>
            </div>
            <div class="traitgauche"></div>
            <div class="centrer titre_footer">
                A propos
            </div>
            <div class="traitgauche"></div>
            <div class="centrer">
                <div class="titre_footer">
                    Newsletter
                </div>
                <div>
                    formulaire
                </div>
            </div>
            <div class="traitgauche"></div>
            <div class="centrer">
                | Mentions Légales |<br />
                | Paramètres de confidentialité |<br />
                | Conditions générales d’utilisation |
            </div>
        </div>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetBanner from '@/Jetstream/Banner'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        components: {
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>

<style>
.header {
    display: flex;
    flex-direction: column;
    text-align: center;
}
.logo {
    order: 1;
    margin-top: 2%;
    width: 15%;
    min-width: 100px;
    margin-left: auto;
    margin-right: auto;
}

.nav {
    order: 2;
    margin-top: 2%;
}
.text {
    color: #B25F1F;
    font-family: "Trirong";
    font-size: 16px;
    margin-right: 1%;
    margin-left: 1%;
}
.footer {
    display:flex;
    flex-flow: row;
    font-family: "AvaraBold";
    font-size: 20px;
    margin-top: auto;
    margin-bottom: auto;
    justify-content: space-evenly;
    color: #482C1E;
    background-color: #F0E2DB;
    margin-top: 5%;
    padding-top: 3%;
}
.plan {
    text-align: center;
    display: flex;
    flex-flow: column;
}
.titre_footer{
    font-size: 30px;
}
.centrer {
    margin-top: auto;
    margin-bottom: auto;
    text-align: center;
}
.traitgauche {
    border-left: 1px solid #482C1E;
    padding-left: 5px;
    margin-top: 4%;
    margin-bottom: 4%;
}
@import "@fontsource/trirong/400.css"
</style>
