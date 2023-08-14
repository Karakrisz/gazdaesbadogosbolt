<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self' https: data:;
        img-src 'self' https: http: data:;
        font-src 'self' https: data:;
        style-src 'self' https: 'unsafe-inline';
        script-src 'self' https: 'unsafe-inline' 'unsafe-eval';
    ">

    <title><?php echo 'Gazda és Bádogos bolt' . $title;  ?></title>

    <meta property="og:title" content="gazdaesbadogosbolt" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="gazdaesbadogosbolt" />
    <meta property="og:description" content="" />

    <link rel="schema.dcterms" href="http://purl.org/dc/terms/">
    <meta name="DC.coverage" content="Hungary" />
    <meta name="DC.description" content="" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.publisher" content="gazdaesbadogosbolt" />
    <meta name="DC.title" content="" />

    <link rel="stylesheet" href="Boaz/css/style.css">
</head>

<body>
    <?php
    require_once "header.php";
    require_once "$view.php";
    require_once "footer.php";
    ?>
</body>

</html>