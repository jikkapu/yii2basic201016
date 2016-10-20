<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "com".
 *
 * @property integer $com_id
 * @property integer $com_type_id
 * @property string $brand
 * @property string $detail
 * @property string $accept_date
 * @property string $asset_code
 * @property string $machine_code
 * @property string $cpu_type
 * @property string $cpu_speed
 * @property string $ram
 * @property string $display
 * @property string $cd_type
 * @property string $harddisk
 * @property double $price
 * @property integer $depart_id
 * @property integer $com_status_id
 * @property string $com_date
 * @property string $insurance_date
 * @property string $create_date
 * @property string $update_date
 * @property string $staff
 * @property string $note
 * @property string $discharge_date
 * @property integer $buy_type_id
 * @property integer $budget_id
 */
class Com extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'com';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_type_id', 'depart_id', 'com_status_id', 'buy_type_id', 'budget_id'], 'integer'],
            [['detail'], 'string'],
            [['accept_date', 'com_date', 'insurance_date', 'create_date', 'update_date', 'discharge_date'], 'safe'],
            [['price'], 'number'],
            [['brand', 'asset_code', 'machine_code', 'cpu_type', 'cpu_speed', 'ram', 'display', 'cd_type', 'harddisk', 'staff', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'com_id' => 'รหัส',
            'com_type_id' => 'ยี่ห้อ',
            'brand' => 'รายละเอียด',
            'detail' => 'วันที่รับ',
            'accept_date' => 'รหัสคุรุภัณฑ์',
            'asset_code' => 'ระหัสเครื่อง',
            'machine_code' => 'ประเภท cpu',
            'cpu_type' => 'ครวมเร็ว cpu',
            'cpu_speed' => 'ความเร็ว Speed',
            'ram' => 'Ram',
            'display' => 'จอภาพ',
            'cd_type' => 'เครื่องอ่าน cd',
            'harddisk' => 'Harddisk',
            'price' => 'ราคา',
            'depart_id' => 'แผนกที่ใช้',
            'com_status_id' => 'สถานะคอม',
            'com_date' => 'วันที่ซื้อ',
            'insurance_date' => 'วันที่รับประกัน',
            'create_date' => 'วันที่ซื้อ',
            'update_date' => 'วันที่รับสินค้า',
            'staff' => 'Staff',
            'note' => 'Note',
            'discharge_date' => 'Discharge Date',
            'buy_type_id' => 'Buy Type ID',
            'budget_id' => 'Budget ID',
        ];
    }
}
