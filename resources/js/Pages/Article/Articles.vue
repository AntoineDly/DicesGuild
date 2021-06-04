<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Articles
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div v-for="article in articles" v-bind:key="article.id">
                    <inertia-link :href="route('article', article.id)" class="text-sm text-gray-700 underline">

                    {{article.name}}
                    {{article.user_name}}
                    {{article.section_name}}
                    <img :src="article.image_url" :alt="article.name" class="rounded-full h-20 w-20 object-cover"/>
                    <div v-html="article.text"></div>

                    </inertia-link>
                    <jet-section-border />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetSectionBorder from '@/Jetstream/SectionBorder'

    export default {
        props: ['articles'],

        components: {
            AppLayout,
            JetSectionBorder,
        },
    }
</script>
