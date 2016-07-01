<?php

use yii\helpers\Html;
//use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
//$this->title = 'ERROR';
?>
<!-- Main content -->
<section class="content">

    <div class="error-page">
        <h2 class="headline text-info"><i class="fa fa-warning text-red"></i></h2>

        

            <p>
                <?php //echo nl2br(Html::encode($message)) ?>
            </p>

            <div class="jumbotron">
                <h2><?php //echo Html::img(Url::base() . '/uploads/icons/accessdenied_xlarge.gif') ?><?= Html::encode($this->title) ?></h2>
                <p class="text-danger"><?php //echo nl2br(Html::encode($message)) ?></p>
                <p class="text-danger">คุณไม่มีสิทธิ์เข้าใช้งานส่วนนี้ กรุณาติดต่อผู้ดูแลระบบ</p>
                <p><a class="btn btn-danger btn-lg" href="../../contact/contact/index" role="button">ติดต่อผู้ดูแลระบบ</a></p>
            </div>

    
    </div>

</section>
