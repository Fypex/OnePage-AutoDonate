<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.min.css">

<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.20/css/uikit.min.css">-->
    <link rel="stylesheet" href="/css/uikit.min.css">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&subset=cyrillic">
</head>
<body>
    <nav class="uk-navbar-container nav-full" uk-navbar>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li><a href="#modal-rules" uk-toggle>Правила</a></li>
                <li><a href="#modal-contacts" uk-toggle>Контакты</a></li>
                <li><a href="/"><h3 class="uk-text-lead title"><?= $title ?></h3></a></li>
                <li><a target="_blank" href="<?= $links['vk'] ?>">Группа ВК</a></li>
                <li><a target="_blank" href="<?= $links['support'] ?>">Поддержка</a></li>
            </ul>
        </div>
    </nav>


    <h3 id="menu" class="uk-text-lead title uk-margin-remove title-mobile"><?= $title ?></h3>
    <nav class="uk-navbar-container mobile-menu" uk-navbar>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav nav-mobile">
                <li><a href="#modal-rules" uk-toggle>Правила</a></li>
                <li><a href="#modal-contacts" uk-toggle>Контакты</a></li>
                <li><a target="_blank" href="<?= $links['vk'] ?>">Группа ВК</a></li>
                <li><a target="_blank" href="<?= $links['support'] ?>">Поддержка</a></li>
            </ul>
        </div>
    </nav>

<!--  Modal   -->
    <div id="modal-rules" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Правила</h2>

            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <li><a href="#">Основные</a></li>
                <li><a href="#">Правила поведения</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <li class="uk-text-left">
                    <p>Основные</p>
                </li>
                <li class="uk-text-left">
                    <p>Правила поведения</p>
                </li>
            </ul>

            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Закрыть</button>
            </p>
        </div>
    </div>
<!--  Modal   -->
<!--  Modal   -->
    <div id="modal-contacts" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Контакты</h2>
                <div class="container uk-text-center">
                    <p class="uk-text-bold uk-display-inline">Контактная почта: </p><span><?= $contacts['mail'] ?></span>
                    <br>
                    <p class="uk-text-bold uk-display-inline">Администратор: </p><span><a target="_black" href="<?= $contacts['admin'] ?>"><?= $contacts['admin'] ?></a></span>
                    <br>
                    <p class="uk-text-bold uk-display-inline">Группа сервера: </p><span><a target="_blank" href="<?= $contacts['group-server'] ?>"><?= $contacts['group-server'] ?></a></span>
                </div>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Закрыть</button>
            </p>
        </div>
    </div>
<!--  Modal   -->