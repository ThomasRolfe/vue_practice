<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.css">


    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="padding-top: 20px;">

<div id="root" class="container">

    <modal v-if="showModal" @close="showModal = false">
        lorem ipsum
    </modal>

    <button @click="showModal = true">Show modal</button>


</div>
<script src="main.js"></script>

</body>
</html>