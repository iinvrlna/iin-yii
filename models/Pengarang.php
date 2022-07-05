<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengarang".
 *
 * @property int $id_pengarang
 * @property string $nama_pengarang
 */
class Pengarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pengarang'], 'required'],
            [['nama_pengarang'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengarang' => 'Id Pengarang',
            'nama_pengarang' => 'Nama Pengarang',
        ];
    }
}
