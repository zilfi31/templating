<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa113".
 *
 * @property int $id113
 * @property string $no_induk_mahasiswa113
 * @property string $nama_mahasiswa113
 * @property string $kelas113
 * @property string $status113
 */
class Mahasiswa113 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa113';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa113', 'nama_mahasiswa113', 'kelas113', 'status113'], 'required'],
            [['no_induk_mahasiswa113'], 'string', 'max' => 15],
            [['nama_mahasiswa113'], 'string', 'max' => 100],
            [['kelas113'], 'string', 'max' => 1],
            [['status113'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id113' => 'Id113',
            'no_induk_mahasiswa113' => 'No Induk Mahasiswa113',
            'nama_mahasiswa113' => 'Nama Mahasiswa113',
            'kelas113' => 'Kelas113',
            'status113' => 'Status113',
        ];
    }
}
