<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "insentif".
 *
 * @property string $nip
 * @property string $nama
 * @property string $lembur
 * @property string $bonus
 * @property string $total_insentif
 *
 * @property Karyawan $nip0
 */
class Insentif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'insentif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'lembur', 'bonus', 'total_insentif'], 'required'],
            [['nip', 'lembur', 'bonus'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 30],
            [['total_insentif'], 'string', 'max' => 15],
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
            'lembur' => 'Lembur',
            'bonus' => 'Bonus',
            'total_insentif' => 'Total Insentif',
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
