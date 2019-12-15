<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penggajian".
 *
 * @property string $nip
 * @property string $nama
 * @property string $departemen
 * @property string $gaji_pokok
 * @property string $total_insentif
 * @property string $total_tunjangan
 * @property string $total_potongan
 * @property string $total_gaji
 *
 * @property Karyawan $nip0
 */
class Penggajian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penggajian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'departemen', 'gaji_pokok', 'total_insentif', 'total_tunjangan', 'total_potongan', 'total_gaji'], 'required'],
            [['nip'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 30],
            [['departemen'], 'string', 'max' => 20],
            [['gaji_pokok', 'total_insentif', 'total_tunjangan', 'total_potongan', 'total_gaji'], 'string', 'max' => 15],
            [['nip'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['nip' => 'nip']],
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
            'departemen' => 'Departemen',
            'gaji_pokok' => 'Gaji Pokok',
            'total_insentif' => 'Total Insentif',
            'total_tunjangan' => 'Total Tunjangan',
            'total_potongan' => 'Total Potongan',
            'total_gaji' => 'Total Gaji',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Karyawan::className(), ['nip' => 'nip']);
    }
}
