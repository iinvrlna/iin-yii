<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property int $harga_barang
 * @property int $id_penjualan
 * @property int $id_pembeli
 * @property int $id_transaksi
 * @property int $id_karyawan
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'harga_barang', 'id_penjualan', 'id_pembeli', 'id_transaksi', 'id_karyawan'], 'required'],
            [['harga_barang', 'id_penjualan', 'id_pembeli', 'id_transaksi', 'id_karyawan'], 'integer'],
            [['nama_barang'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'harga_barang' => 'Harga Barang',
            'id_penjualan' => 'Id Penjualan',
            'id_pembeli' => 'Id Pembeli',
            'id_transaksi' => 'Id Transaksi',
            'id_karyawan' => 'Id Karyawan',
        ];
    }

    public function getPenjualan()
    {
        return $this->hasOne(Penjualan::className(),['id_penjualan'=>'id_penjualan']);
    }

    public function getPembeli()
    {
        return $this->hasOne(Pembeli::className(),['id_pembeli'=>'id_pembeli']);
    }

    public function getTransaksi()
    {
        return $this->hasOne(Transaksi::className(),['id_transaksi'=>'id_transaksi']);
    }

    public function getKaryawan()
    {
        return $this->hasOne(Karyawan::className(),['id_karyawan'=>'id_karyawan']);
    }
}
