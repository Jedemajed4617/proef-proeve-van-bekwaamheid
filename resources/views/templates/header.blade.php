<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Het curriculum voor (toekomstige) studenten van het Mediacollege Amsterdam</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/cookies.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/contact.css">
    <?
        if(request()->segment(1) == 'login'){
            ?>
                <link rel="stylesheet" href="css/login.css">
            <?
        }
    ?>
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/main.js" defer></script>
</head>
<body>
