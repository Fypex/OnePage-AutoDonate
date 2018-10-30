<?php Flight::render('layouts/header'); ?>

    <div class="container">
        <div class="uk-card uk-card-default uk-card-body main-card">
            <h2 class="uk-text-left uk-inline-clip">Привилегии</h2>
            <div class="row">
            <? foreach ($prodcuts as $product): ?>
                <div class="col-md-4">
                    <div class="uk-card uk-card-default uk-card-body card-products uk-margin-small-top">
                        <form id="buy-product" method="post">
                            <div class="row">
                                <div class="col-md-12 uk-text-left title-product-wrapper">
                                    <p class="uk-margin-remove title-product"><?= $product['name']?></p>
                                    <p class="uk-margin-remove price-product"><?= $product['price']?>руб</p>
                                </div>
                                <div class="col-md-12">
                                    <input class="uk-input" type="text" placeholder="Ваш ник">
                                </div>
                                <div class="col-md-12 uk-margin-small-top">
                                    <a id="<?= $product['id']?>" class="uk-button uk-button-default uk-width-2-2" onclick="buyProduct(this)">Купить</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <? endforeach ?>
<!--                <div class="col-md-12">-->
<!--                    <div class="uk-margin-small-top">-->
<!--                        <blockquote cite="#" class="uk-margin-remove">-->
<!--                            <p class="blockquote-products">* При неверно введенном нике средства не возвращаются и валюта не начисляется. Будьте осторожны!</p>-->
<!--                        </blockquote>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>

        <div class="uk-card uk-card-default uk-card-body uk-margin-medium-top uk-padding-remove">
            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>

            <!-- VK Widget -->
            <div id="vk_groups"></div>
            <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {mode: 4,width: 'auto',height: '350px'}, <?= $widget['id'] ?>);
            </script>
        </div>
    </div>

<?php Flight::render('layouts/footer'); ?>