<template>
    <layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Article
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                {{article.title}}
                {{article.user_name}}
                {{article.section_name}}
                <img :src="article.image_url" :alt="article.name" class="rounded-full h-20 w-20 object-cover"/>
                <div v-html="article.text"></div>
            </div>
        </div>
    </layout>
</template>

<script>
    import layout from '@/Layouts/Layout'

    export default {
        props: ['article'],

        components: {
            layout,
        },
    }
</script>
