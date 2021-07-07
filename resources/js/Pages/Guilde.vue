<template>
    <layout>
        <div id="LaGuilde">
            <div class="guilde">
                <h2>Notre Guilde</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisl velit, tempor a orci id, tincidunt tempus risus. Praesent ac lectus pellentesque, dapibus magna ut, ultrices ante. Curabitur sit amet lectus non diam ornare ultrices non sed turpis. In ac sodales enim. Sed tristique mollis nisi, vitae rutrum enim ultricies non. Sed quis erat sagittis, hendrerit nisl eu, congue enim. Quisque vel felis urna. Aliquam et ante a leo pellentesque rhoncus et vel odio. In eu accumsan neque.</p>
            </div>
            <hr>  
            <div class="projet">
                <h2>Notre projet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisl velit, tempor a orci id, tincidunt tempus risus. Praesent ac lectus pellentesque, dapibus magna ut, ultrices ante. Curabitur sit amet lectus non diam ornare ultrices non sed turpis. In ac sodales enim. Sed tristique mollis nisi, vitae rutrum enim ultricies non. Sed quis erat sagittis, hendrerit nisl eu, congue enim. Quisque vel felis urna. Aliquam et ante a leo pellentesque rhoncus et vel odio. In eu accumsan neque.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisl velit, tempor a orci id, tincidunt tempus risus. Praesent ac lectus pellentesque, dapibus magna ut, ultrices ante. Curabitur sit amet lectus non diam ornare ultrices non sed turpis. In ac sodales enim. Sed tristique mollis nisi, vitae rutrum enim ultricies non. Sed quis erat sagittis, hendrerit nisl eu, congue enim. Quisque vel felis urna. Aliquam et ante a leo pellentesque rhoncus et vel odio. In eu accumsan neque.</p>
            </div>
            <hr>  
            <div class="equipe">
                <h2>Notre équipe</h2>
                <div class="photos">
                    <img class="portrait" :src="'/storage/images/lida.jpg'"/>
                    <img class="portrait" :src="'/storage/images/saeid.png'"/>
                    <img class="portrait" :src="'/storage/images/talitha.png'"/>
                    <img class="portrait" :src="'/storage/images/quentin.png'"/>
                    <img class="portrait" :src="'/storage/images/antoine.png'"/>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisl velit, tempor a orci id, tincidunt tempus risus. Praesent ac lectus pellentesque, dapibus magna ut, ultrices ante. Curabitur sit amet lectus non diam ornare ultrices non sed turpis. In ac sodales enim. Sed tristique mollis nisi, vitae rutrum enim ultricies non. Sed quis erat sagittis, hendrerit nisl eu, congue enim. Quisque vel felis urna. Aliquam et ante a leo pellentesque rhoncus et vel odio. In eu accumsan neque.</p>
            </div>
        </div>
    </layout>
</template>

<script>

    import layout from '@/Layouts/Layout'
    import construction from '@/Components/MessageConstruction'

    export default {
        components: {
            layout,
            construction
        },
    }
</script>
<style scoped>
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}

html, body{
    height: 100%;
    width : 100%;
    background-color:white;
  }

hr{
    size :2;
    width: 50%;
    color :#482C1E;
    margin: auto;
    margin-top: 40px;
    margin-bottom: 40px;
}

p{
 margin-top: 40px;
}
#LaGuilde {
    margin-top: 5%;
}
#LaGuilde .guilde{
    background-color: #F0E2DB;
    width: 60%;
    border-radius: 20px;
    padding: 40px;
    margin: auto;
}
#LaGuilde .projet{
    background-color: #F0E2DB;
    width: 60%;
    border-radius: 20px;
    padding: 40px;
    margin: auto;
}
#LaGuilde .equipe{
    background-color: #F0E2DB;
    width: 60%;
    border-radius: 20px;
    padding: 40px;
    margin: auto;
}

#LaGuilde .equipe .photos{
    display: flex;
    justify-content: space-around;
    flex-flow: wrap row;
    margin-top: 40px;
}

#LaGuilde .equipe .portrait {
    height: 100px;
    width: 100px;
    margin: 1%;
    background-position:center center ;
    background-size: cover;
    background-repeat: no-repeat;

}
</style>