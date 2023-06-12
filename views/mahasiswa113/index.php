<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
?>

<?=
    Html::a('Tambah Mahasiswa',['create'],['class' => 'btn btn-primary']);
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id113',
            'no_induk_mahasiswa113',
            'nama_mahasiswa113',
            'kelas113',
            'status113',
            ['class' => ActionColumn::className()]
        ]
        ]);

        
?>


