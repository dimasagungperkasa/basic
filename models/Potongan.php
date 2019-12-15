<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potongan".
 *
 * @property string $nip
 * @property string $nama
 * @property string $absen
 * @property string $telat
 * @property string $total_potongan
 *
 * @property Karyawan $nip0
 */
class Potongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'absen', 'telat', 'total_potongan'], 'required'],
            [['nip'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 30],
            [['absen', 'telat'], 'string', 'max' => 2],
            [['total_potongan'], 'string', 'max' => 15],
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
            'absen' => 'Absen',
            'telat' => 'Telat',
            'total_potongan' => 'Total Potongan',
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
