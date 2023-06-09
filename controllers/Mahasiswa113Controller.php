<?php

namespace app\controllers;

use app\models\Mahasiswa113;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa113Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa113::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa113 = new Mahasiswa113;
        $mahasiswa113->no_induk_mahasiswa113 = '60200121113-'.rand(100,999);
        $mahasiswa113->nama_mahasiswa113 = 'Zilfi';
        $mahasiswa113->kelas113 = 'D';
        $mahasiswa113->status113 = 'Baru';
        if ($mahasiswa113->save()){
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa113 = mahasiswa113::findOne($id);
        if ($mahasiswa113 !== null) {
            $mahasiswa113->kelas113 = 'C';
            $mahasiswa113->status113 = 'Update';
            $mahasiswa113->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');

        } 
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa113 = mahasiswa113::findOne($id);
        if ($mahasiswa113->delete()) {
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mahasiswa113 = mahasiswa113::findOne($id);
        return $this->render('view', ['mahasiswa113' => $mahasiswa113]);
    }
}
