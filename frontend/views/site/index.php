<?php
use yii\widgets\ActiveForm;
use miloschuman\highcharts\Highcharts;
use kartik\file\FileInput;

/* @var $this yii\web\View */

$this->title = 'Test Job';
?>
<div class="site-index">
    <div class="body-content">
        <div class="upload" style="width:50%">

            <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data']
            ]);
            ?>
            <?php echo $form->field($model, 'file')->widget(FileInput::classname(), [
                'options' => ['accept' => 'html/*','multiple' => false],
                'pluginOptions' => [
                    'showPreview' => false,
                    'showCaption' => true,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]);
            ?>
            <button class="btn btn-success">Submit</button>
            <?php ActiveForm::end(); ?>
        </div>
        <?php
        echo Highcharts::widget([
            'options' => [
                'title' => ['text' => 'RoboForex (CY) Ltd.'],
                'xAxis' => [
                    'type' => 'datetime',
                    'categories' => $data['x']
                ],
                'yAxis' => [
                    'title' => ['text' => 'Profit']
                ],
                'series' => [
                    ['name' => 'Баланс', 'data' => array_map(function($val){
                        return (float) $val;
                    },array_values($data['y']))],
                ]
            ]

        ]);


        ?>
    </div>
</div>
