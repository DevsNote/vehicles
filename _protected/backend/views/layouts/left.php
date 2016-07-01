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
                        ['label' => 'HOS ข้อมูลก่อนส่ง', 'icon' => 'fa fa-modx', 'url' => ['/hosdata/index']],
                        //เมนูตรวจสอบคุณภาพข้อมูล HOS 43 แฟ้ม ก่อนส่ง
                        [
                            'label' => 'คุณภาพข้อมูลรายแฟ้ม',
                            'icon' => 'fa fa-trophy',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'แฟ้มสะสม',
                                    'icon' => 'fa fa-folder-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'PERSON', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'ADDRESS', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'DEATH', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'CHRONIC', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'CARD', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'WOMEN', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'NEWBORN', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'PRENATAL', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'PERSON', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'LABOR', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'HOME', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'PERSON', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'PROVIDER', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'VILLAGE', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'DISABILITY', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                        ['label' => 'DRUGALLERGY', 'icon' => 'fa fa-folder-o', 'url' => '#',],
                                    ],
                                ],
                                [
                                    'label' => 'แฟ้มกึ่งสำรวจ',
                                    'icon' => 'fa fa-circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ],
                                ],
                                [
                                    'label' => 'แฟ้มบริการ',
                                    'icon' => 'fa fa-circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ],
                                ],
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
                        ['label' => 'HOS ตรวจสอบข้อมูลก่อนส่ง', 'icon' => 'fa fa-modx', 'url' => ['/chk43beforesending/index']],
                        ['label' => 'TAKIS ข้อมูลที่ส่งแล้ว', 'icon' => 'fa fa-modx', 'url' => ['/takisdata/index']],
                        ['label' => 'TAKIS ข้อมูลที่ส่งแล้วผิดพลาด', 'icon' => 'fa fa-modx', 'url' => ['/takisdata/index']],
                        ['label' => 'ตัวชี้วัดจังหวัด', 'icon' => 'fa fa-trophy', 'url' => ['/indicators/index']],
                        [
                            'label' => 'คุณภาพข้อมูลตาม KPI',
                            'icon' => 'fa fa-trophy',
                            'url' => '#',
                            'items' => [
                                ['label' => 'ANC', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
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
                        //เมนูตรวจสอบคุณภาพข้อมูล HOS 43 แฟ้ม ก่อนส่ง
                        [

                            'label' => 'กลุ่มรายงานมาตรฐาน',
                            'icon' => 'fa fa-trophy',
                            'url' => '#',
                            'items' => [
                                ['label' => 'ประชากร', 'icon' => 'fa fa-file-code-o', 'url' => ['/streport/person'],],
                                ['label' => 'ป่วยด้วยโรคติดต่อที่สำคัญ', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'ป่วยด้วยโรคไม่ติดต่อที่สำคัญ', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'สาเหตุการป่วย/ตาย', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'อนามัยแม่และเด็ก', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'การสร้างเสริมภูมิคุ้มกันโรค', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'การคัดกรอง', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'การเฝ้าระวัง', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'หลักประกันสุขภาพโดยรัฐ', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'การใช้บริการสาธารณสุข', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'ระบบบริการสุขภาพจิต', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'บุคลากรสาธารณสุข', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'แพทย์แผนไทย', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'Service Plan สาขาไต', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'Service Plan 5 สาขาหลัก', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'Service Plan สาขาอื่น', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'ทันตกรรม', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'CMI', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'ต่างด้าว', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'งานโภชนาการ', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
                                ['label' => 'งานวัณโรค', 'icon' => 'fa fa-dashboard', 'url' => ['/streport/'],],
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
                        //สิ้นสุดเมนู HOS
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
