<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property string $nip
 * @property string $nama
 * @property string $gender
 * @property string $tempat_lahir
 * @property string $alamat
 * @property string $no_telp
 * @property string $departement
 * @property string $jabatan
 * @property string $foto
 * @property string $tanggal_lahir
 *
 * @property Insentif $insentif
 * @property Penggajian $penggajian
 * @property Potongan $potongan
 * @property Tunjangan $tunjangan
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'gender', 'tempat_lahir', 'alamat', 'no_telp', 'departement', 'jabatan', 'foto', 'tanggal_lahir'], 'required'],
            [['nip', 'gender', 'jabatan', 'tanggal_lahir'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 30],
            [['tempat_lahir', 'departement'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 40],
            [['no_telp'], 'string', 'max' => 15],
            [['foto'], 'string', 'max' => 100],
            [['nip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama' => 'Nama',
            'gender' => 'Gender',
            'tempat_lahir' => 'Tempat Lahir',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'departement' => 'Departement',
            'jabatan' => 'Jabatan',
            'foto' => 'Foto',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInsentif()
    {
        return $this->hasOne(Insentif::className(), ['nip' => 'nip']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenggajian()
    {
        return $this->hasOne(Penggajian::className(), ['nip' => 'nip']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPotongan()
    {
        return $this->hasOne(Potongan::className(), ['nip' => 'nip']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTunjangan()
    {
        return $this->hasOne(Tunjangan::className(), ['nip' => 'nip']);
    }
}
