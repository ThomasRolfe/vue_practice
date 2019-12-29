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

    <?php

    $messages = [
        'hello world' => 'lorem ipsum',
        'hello world 2' => 'lorem ipsum',
        'hello world 3' => 'lorem ipsum'
    ];

    foreach ($messages as $title => $body) {
        ?>
        <message title="<?php echo $title; ?>" body="<?php echo $body; ?>"></message>
        <?php
    }

    ?>


</div>
<script src="main.js"></script>

</body>
</html>