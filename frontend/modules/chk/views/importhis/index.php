<?php
/* @var $this yii\web\View */

use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\helpers\Html;
use kartik\export\ExportMenu;
use yii\bootstrap\Dropdown;

$model = '';
?>
<h1>นำเข้าข้อมูลจากระบบ HIS</h1>
<br>
<div class="content-box mrg25B">
    <h3 class="content-box-header bg-blue text-left">
        <i class="glyph-icon icon-comments"></i>
        ค้นหา
    </h3>
    <div class="content-box-wrapper">
        <?= Html::beginForm(); ?>
        <div class="example-box-wrapper">
            <div class="form-group">
                <div class="col-sm-2">
                    <label>เลือกวันที่ : </label>
                    <div class="input-prepend input-group">
                        <span class="add-on input-group-addon">
                            <i class="glyph-icon icon-calendar"></i>
                        </span>

                        <input type="text" name="date1" class="bootstrap-datepicker form-control" value="<?= $date1; ?>" data-date-format="yyyy-mm-dd">
                    </div>
                </div>


                <div class="col-md-2">
                    <label>ประเภทผู้ป่วย : </label>
                    <div class="form-group">
                        <select class="form-control" name="type" >
                            <option value="0">--- select ---</option>
                            <option value="opd" style="background-color: #0099ff">OPD</option>
                            <option value="ipd" style="background-color: #99e600">IPD</option>

                        </select>
                    </div>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <button class='btn btn-danger'>ตกลง</button>

            </div>
        </div>




        <?= Html::endForm(); ?>

    </div>
</div>
<div class="content-box mrg25B">
    <h3 class="content-box-header bg-green text-left">
        <i class="glyph-icon icon-comments"></i>
        ผู้ป่วยที่มารับบริการ วันที่ <?= $date1 ?>
    </h3>
    <div class="content-box-wrapper">


        <?php
        $gridColumns = [
                ['class' => 'kartik\grid\SerialColumn'],
                [
                'attribute' => 'hn',
                'label' => 'HN'
            ],
                [
                'attribute' => 'cid',
                'label' => 'CID'
            ],
                [
                'attribute' => 'tname',
                'label' => 'ชื่อ-สกุล'
            ],
                ['attribute' => 'pdx',
                'label' => 'Pdx',
                'value' => function ($model, $key, $index, $widget) {
                    if ($model['pdx'] == null) {
                        return "<span class='bs-label bg-orange tooltip-button' style='background-color: #EF5350' > ว่าง </span>";
                    } else {
                        return "<span class='bs-label bg-orange tooltip-button' style='background-color: #4CAF50' >" . $model['pdx'] . " </span>";
                    }
                },
                'filterType' => GridView::FILTER_COLOR,
                'hAlign' => 'middle',
                'format' => 'raw',
            //'width' => '150px',
            //'noWrap' => true
            ],
                [
                'attribute' => 'yname',
                'label' => 'สิทธิติดตัว'
            ],
                [
                'attribute' => 'hospmain',
                'label' => 'Hospmain'
            ],
                [
                'attribute' => 'department',
                'label' => 'แผนก'
            ],
                /*
                  [
                  'attribute' => 'an',
                  'label' => '#',
                  'value' => function($model, $key) {
                  $an ='';
                  $bed ='';
                  $ward = '';
                  return Html::a("<span class='bs-label bg-orange tooltip-button' style='background-color: #0099ff' ><i class='glyph-icon  icon-bell' ></i></span>", ['/food/foodadd/create', 'an' => $an, 'bed' => $bed, 'ward' => $ward], [
                  'class' => 'activity-add-link',
                  'title' => 'สั่งอาหาร',
                  'data-toggle' => 'modal',
                  'data-target' => '#modalvote',
                  //'data-whatever'=>$model['an'],
                  //'data-id' => $model['an'],
                  ]);
                  },
                  'filterType' => GridView::FILTER_COLOR,
                  'hAlign' => 'middle',
                  'format' => 'raw',
                  ], */
        ];

        echo '<div class="col-md-12" align="right" >';
        echo ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns
        ]);
        echo '</div>';
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'autoXlFormat' => true,
            'export' => [
                'fontAwesome' => true,
                'showConfirmAlert' => false,
                'target' => GridView::TARGET_BLANK
            ],
            'columns' => $gridColumns,
            'resizableColumns' => true,
            'resizeStorageKey' => Yii::$app->user->id . '-' . date("m"),
            //'floatHeader' => true,
            //'floatHeaderOptions' => ['scrollingTop' => '100'],
            'pjax' => true,
            'pjaxSettings' => [
                'neverTimeout' => true,
            //'beforeGrid' => 'My fancy content before.',
            //'afterGrid' => 'My fancy content after.',
            ],
        ]);
        ?>



    </div>
</div>



