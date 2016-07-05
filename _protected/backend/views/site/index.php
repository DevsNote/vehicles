<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii2fullcalendar\yii2fullcalendar;
use yii\widgets\Pjax;
use yii\helpers\Html;

Yii::setAlias('@icon', '../uploads/');
$this->title = 'ระบบบริหารงานยานพาหนะ';
?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Dashboard</h3>
    </div>

    <div class="panel-body">
        <div class="box-body">
            <?php
            $script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click(); }, 3000);
});
JS;
            $this->registerJs($script);
            ?>

            <?php Pjax::begin(); ?>
            <?= Html::a("Refresh", ['site/index'], ['class' => 'btn btn-lg btn-primary', 'id' => 'refreshButton']) ?>
            <h1>Current time: <?= $time ?></h1>
            <?php Pjax::end(); ?>
            <div class="row">
                <div class="col-md-6">
                    <p class="text-center">
                        <strong>ปฏิทินการใช้รถ: 1 July 2016 - 31 July 2016</strong>
                    </p>

                    <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <?php
                        echo yii2fullcalendar::widget([
                            'options' => [
                                'lang' => 'TH',
                            //... more options to be defined here!
                            ],
                            'ajaxEvents' => Url::to(['/mission/default/jsoncalendar'])
                        ]);
                        ?>
                    </div>
                    <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <p class="text-center">
                        <strong>ตารางการใช้รถ</strong>
                    </p>

                    <div class="progress-group">
                        <table class="table table-responsive table-striped table-hover table-bordered">
                            <tr>
                                <td class="danger">#</td>
                                <td class="danger">วันที่</td>
                                <td class="danger">เวลา</td>
                                <td class="danger">สถานที่</td>
                                <td class="danger">งาน/ฝ่าย</td>
                                <td class="danger">พขร</td>

                            </tr>
                            <tr>
                                <td class="info">1</td>
                                <td class="warning">05/07/2016</td>
                                <td class="warning">07:00</td>
                                <td class="warning">สสจ.ตาก</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">ธีรวัฒิ</td>

                            </tr>
                            <tr>
                                <td class="info">2</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">3</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">4</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">5</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="success">โรงพยาบาลแม่สอด</td>
                                <td class="danger">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">6</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">7</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">8</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">9</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">10</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">11</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">12</td>
                                <td class="warning">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                            <tr>
                                <td class="info">13</td>
                                <td class="active">06/07/2016</td>
                                <td class="warning">07:30</td>
                                <td class="warning">โรงพยาบาลแม่สอด</td>
                                <td class="warning">งาน IT</td>
                                <td class="warning">จารึก</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>

