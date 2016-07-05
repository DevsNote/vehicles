<?php
$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click(); }, 3000);
});
JS;
$this->registerJs($script);
?>

<?php Pjax::begin(); ?>
<?= Html::a("Refresh", ['site/auto-refresh'], ['class' => 'btn btn-lg btn-primary', 'id' => 'refreshButton']) ?>
<h1>Current time: <?= $time ?></h1>
<?php Pjax::end(); ?>