<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bangunan".
 *
 * @property integer $id
 * @property string $nama
 * @property string $luas_bgn
 * @property string $luas_tnh
 * @property string $fasilitas
 * @property string $lokasi
 * @property integer $pengembang
 * @property integer $kategori
 * @property string $file_image
 *
 * @property User $pengembang0
 * @property Kategori $kategori0
 */
class Bangunan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bangunan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'luas_bgn', 'luas_tnh', 'fasilitas', 'lokasi', 'pengembang', 'kategori', 'file_image'], 'required'],
            [['pengembang', 'kategori'], 'integer'],
            [['nama', 'luas_bgn', 'luas_tnh', 'fasilitas', 'lokasi', 'file_image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'luas_bgn' => 'Luas Bgn',
            'luas_tnh' => 'Luas Tnh',
            'fasilitas' => 'Fasilitas',
            'lokasi' => 'Lokasi',
            'pengembang' => 'Pengembang',
            'kategori' => 'Kategori',
            'file_image' => 'File Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengembang()
    {
        return $this->hasOne(User::className(), ['id' => 'pengembang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id' => 'kategori']);
    }
}
