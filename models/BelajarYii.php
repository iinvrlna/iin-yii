<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "belajar_yii".
 *
 * @property int $id
 * @property string $nama
 * @property string $jurusan
 * @property string $alamat
 */
class BelajarYii extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'belajar_yii';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jurusan', 'alamat'], 'required'],
            [['nama', 'jurusan', 'alamat'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jurusan' => 'Jurusan',
            'alamat' => 'Alamat',
        ];
    }
}
