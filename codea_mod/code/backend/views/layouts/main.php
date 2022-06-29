<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= Yii::$app->params['frontEndBaseUrl'] ?>images/favicon.ico" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>        

    </head>
    <body>
        <?php $this->beginBody() ?>
        <div id="wrapper">
            <?php echo $this->render('nav'); ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                <?php echo $this->title; ?>
                            </h1>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?=
                            Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ])
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?= Alert::widget() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
