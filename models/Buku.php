<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id_buku
 * @property string $judul_buku
 * @property int $id_pengarang
 * @property int $id_penerbit
 * @property int $id_pembeli
 * @property int $id_order
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_buku', 'id_pengarang', 'id_penerbit', 'id_pembeli', 'id_order'], 'required'],
            [['id_pengarang', 'id_penerbit', 'id_pembeli', 'id_order'], 'integer'],
            [['judul_buku'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_buku' => 'Id Buku',
            'judul_buku' => 'Judul Buku',
            'id_pengarang' => 'Id Pengarang',
            'id_penerbit' => 'Id Penerbit',
            'id_pembeli' => 'Id Pembeli',
            'id_order' => 'Id Order',
        ];
    }

    public function getPengarang()
    {
        return $this->hasOne(Pengarang::className(),['id_pengarang'=>'id_pengarang']);
    }

    public function getPenerbit()
    {
        return $this->hasOne(Penerbit::className(),['id_penerbit'=>'id_penerbit']);
    }

    public function getPembeli()
    {
        return $this->hasOne(Pembeli::className(),['id_pembeli'=>'id_pembeli']);
    }

    public function getOrder()
    {
        return $this->hasOne(Order::className(),['id_order'=>'id_order']);
    }
}
