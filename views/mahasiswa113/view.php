<?php
    use yii\widgets\DetailView;
?>
<?=
    DetailView::widget([
        'model' => $mahasiswa113,
        'attributes' => [
            'id113',
            'no_induk_mahasiswa113',
            'nama_mahasiswa113',
            'kelas113',
            'status113',
        ],
    ]);
?>
