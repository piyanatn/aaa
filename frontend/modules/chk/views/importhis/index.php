<?php
/* @var $this yii\web\View */

use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<h1>นำเข้าข้อมูลจากระบบ HIS</h1>
<br>
<div class="content-box mrg25B">
    <h3 class="content-box-header bg-google text-left">
        <i class="glyph-icon icon-comments"></i>
        Sortable checklist
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
                [
                'attribute' => 'pdx',
                'label' => 'Pdx'
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
                [
                'attribute' => 'pdx',
                'label' => 'dd',
                'value' => function ($model, $key, $index, $widget) {
                    if ($model['pdx'] == '') {
                        return "<font class='text-red'>" . $model['pdx'] . "</font>";
                    } else {
                        return "<font class='text-green'>" . $model['pdx'] . "</font>";
                    }
                },
                'filterType' => GridView::FILTER_COLOR,
                'hAlign' => 'middle',
                'format' => 'raw',
            //'width' => '150px',
            //'noWrap' => true
            ],
                [
                'attribute' => 'an',
                'label' => '#',
                'value' => function($model, $key) {
                    $an ='';
                    $bed ='';
                    $ward = '';
                    return Html::a("<span class='badge' style='background-color: #0099ff' ><i class='fa fa-cart-plus'></i></span>", ['/food/foodadd/create', 'an' => $an, 'bed' => $bed, 'ward' => $ward], [
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
            ],
        ];
        /*
          echo '<div class="col-md-12" align="right" >';
          echo ExportMenu::widget([
          'dataProvider' => $dataProvider,
          'columns' => $gridColumns
          ]);
          echo '</div>'; */
        Pjax::begin(['id' => 'tfood']);
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
            'responsive' => true,
            'hover' => true,
            'resizableColumns' => true,
                // 'resizeStorageKey' => Yii::$app->user->id . '-' . date("m"),
                //'floatHeader' => true,
                //'floatHeaderOptions' => ['scrollingTop' => '100'],
                // 'pjax' => true,
                //'pjaxSettings' => [
                //    'neverTimeout' => true,
                //'beforeGrid' => 'My fancy content before.',
                //'afterGrid' => 'My fancy content after.',
                //],
        ]);
        Pjax::end();
        ?>



    </div>
</div>



