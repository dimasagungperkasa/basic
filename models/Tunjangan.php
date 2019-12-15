<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tunjangan".
 *
 * @property string $nip
 * @property string $nama
 * @property string $makan
 * @property string $transport
 * @property string $total_tunjangan
 *
 * @property Karyawan $nip0
 */
class Tunjangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tunjangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'makan', 'transport', 'total_tunjangan'], 'required'],
            [['nip', 'makan', 'transport'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 30],
            [['total_tunjangan'], 'string', 'max' => 15],
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
            'makan' => 'Makan',
            'transport' => 'Transport',
            'total_tunjangan' => 'Total Tunjangan',
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
