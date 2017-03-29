<?php

namespace app\modules\chk\controllers;

class ImporthisController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $sql ="SELECT o.hn,p.cid,CONCAT(p.pname,p.fname,' ',p.lname) AS tname,
			 v.pdx,CONCAT(o.pttype,' ',y.name) AS yname,o.hospmain,o.hospsub,
			 s.name AS sname,k.department,main_dep
                FROM ovst  o
                LEFT JOIN patient p ON p.hn =o.hn
                LEFT JOIN pttype y ON y.pttype = o.pttype
                LEFT JOIN vn_stat v ON v.vn = o.vn
                LEFT JOIN spclty s ON s.spclty = o.spclty
                LEFT JOIN kskdepartment k ON k.depcode = o.main_dep
                WHERE o.vstdate ='2017-03-28' 
                                        AND o.an IS NULL 
                ORDER BY o.hn  ";
        
        try {
            $rawData = \Yii::$app->db2->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            //'key' => 'hoscode',
            'allModels' => $rawData,
            'pagination' => [
                'pageSize' => 50
            ],
        ]);
        
        
        return $this->render('index',['dataProvider' => $dataProvider]);
    }

}
