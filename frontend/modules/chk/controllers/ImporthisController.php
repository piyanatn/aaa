<?php

namespace app\modules\chk\controllers;
use Yii;

class ImporthisController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $date1 = date('Y-m-d');
        $sql="SELECT o.hn,p.cid,CONCAT(p.pname,p.fname,' ',p.lname) AS tname,
			 v.pdx,CONCAT(o.pttype,' ',y.name) AS yname,o.hospmain,o.hospsub,
			 s.name AS sname,k.department,main_dep
                FROM ovst  o
                LEFT JOIN patient p ON p.hn =o.hn
                LEFT JOIN pttype y ON y.pttype = o.pttype
                LEFT JOIN vn_stat v ON v.vn = o.vn
                LEFT JOIN spclty s ON s.spclty = o.spclty
                LEFT JOIN kskdepartment k ON k.depcode = o.main_dep
                WHERE o.vstdate ='$date1' 
                                        AND o.an IS NULL 
                ORDER BY o.hn ";
        if (isset($_GET['page'])) {
            $date1 = Yii::$app->session['date1'];
        }
        if (Yii::$app->request->isPost) {
            if (isset($_POST['date1']) == '') {
                $date1 = Yii::$app->session['date1'];
            } else {

                $date1 = $_POST['date1'];
                Yii::$app->session['date1'] = $date1;
            }
        }
        if (isset($_GET['date1'])) {
             $date1 = Yii::$app->session['date1'];
        }
        
        
        
        
         $connection = Yii::$app->db2;
        $sqlm = "SELECT i.an,a.bedno,CONCAT(p.pname,p.fname,' ',p.lname) AS tname,
			 w.name AS wname
                    FROM ipt i
                    LEFT JOIN iptadm a ON a.an = i.an
                    LEFT JOIN patient p ON p.hn = i.hn
                    LEFT JOIN ward w ON w.ward = i.ward
                    WHERE i.an='$an'";
        $datam = $connection->createCommand($sqlm)
                ->queryAll();
        for ($im = 0; $im < sizeof($datam); $im++) {
            $tname = $datam[$im]['tname'];
            $an = $datam[$im]['an'];
            $bedno = $datam[$im]['bedno'];
            $wname = $datam[$im]['wname'];
        }
        
        
        
        
        if (Yii::$app->request->isPost) {
             if (isset($_POST['date1']) == 'opd') {
               $sql ="SELECT o.hn,p.cid,CONCAT(p.pname,p.fname,' ',p.lname) AS tname,
			 v.pdx,CONCAT(o.pttype,' ',y.name) AS yname,o.hospmain,o.hospsub,
			 s.name AS sname,k.department,main_dep
                FROM ovst  o
                LEFT JOIN patient p ON p.hn =o.hn
                LEFT JOIN pttype y ON y.pttype = o.pttype
                LEFT JOIN vn_stat v ON v.vn = o.vn
                LEFT JOIN spclty s ON s.spclty = o.spclty
                LEFT JOIN kskdepartment k ON k.depcode = o.main_dep
                WHERE o.vstdate ='$date1' 
                                        AND o.an IS NULL 
                ORDER BY o.hn  "; 
            }elseif(isset($_POST['date1']) == 'ipd') {
                $sql="";
            }
        }
        
        
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
        
        
        return $this->render('index',['dataProvider' => $dataProvider,'date1'=>$date1]);
    }

}
