<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

Yii::setAlias('@icon', '../uploads/');
$this->title = 'My Yii Application';
?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">ข้อมูลแฟ้ม 43 แฟ้ม ปรับปรุงโครงสร้างเมื่อ 15-02-2016</h3>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="hosdata" class="thumbnail">
                    <img src="<?= Url::to('@icon'); ?>/icons/beforesend.png" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3" >
                <a href="#" class="thumbnail">
                    <img src="<?= Url::to('@icon'); ?>/icons/dataerror.png" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?= Url::to('@icon'); ?>/icons/takisdata.png" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?= Url::to('@icon'); ?>/icons/nopic.png" alt="...">
                </a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?= Url::to('@icon'); ?>/icons/nopic.png" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3" >
                <a href="#" class="thumbnail">
                    <img src="<?= Url::to('@icon'); ?>/icons/nopic.png" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?= Url::to('@icon'); ?>/icons/nopic.png" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?= Url::to('@icon'); ?>/icons/nopic.png" alt="...">
                </a>
            </div>
        </div>
    </div>
</div>

