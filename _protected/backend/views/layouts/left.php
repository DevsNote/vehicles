<?php ?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar04.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php
if (!Yii::$app->user->isGuest) {
    echo Yii::$app->user->identity->username;
} else {
    echo "";
}
?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Main Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => ['/site/index']],
                        ['label' => 'ขอใช้รถไปราชการ', 'icon' => 'fa fa-edit', 'url' => ['/site/index']],
                        ['label' => 'ข้อมูลรถ', 'icon' => 'fa fa-car', 'url' => ['/car/car']],
                        ['label' => 'ข้อมูลพนักงานขับรถ', 'icon' => 'fa fa-users', 'url' => ['/site/index']],
                        ['label' => 'ข้อมูลการซ่อมบำรุงรักษา', 'icon' => 'fa fa-wrench', 'url' => ['/site/index']],
                        ['label' => 'ข้อมูลการเช็ครถประจำวัน', 'icon' => 'fa fa-check-square-o', 'url' => ['/site/index']],
                        ['label' => 'ข้อมูลการปฏิบัติงาน', 'icon' => 'fa fa-bars', 'url' => ['/site/index']],
                        ['label' => 'Report', 'icon' => 'fa fa-bar-chart', 'url' => ['/site/index']],
                        [
                            'label' => 'ตั้งค่าระบบ',
                            'icon' => 'fa fa-cogs',
                            'url' => '#',
                            'items' => [
                                ['label' => 'เพิ่มยี่ห้อรถ', 'icon' => 'fa fa-bold', 'url' => ['/car/carbrand'],],
                                ['label' => 'เพิ่มประเภทรถ', 'icon' => 'fa fa-truck', 'url' => ['/debug'],],
                                ['label' => 'อื่น ๆ', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            ],
                        ],
                        [
                            'label' => 'Same tools',
                            'icon' => 'fa fa-share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'fa fa-circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'fa fa-circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
        )
        ?>

    </section>

</aside>
