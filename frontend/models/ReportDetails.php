<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_details".
 *
 * @property string $reference_no
 * @property string $subject
 * @property integer $doc_for
 * @property integer $doc_from
 * @property string $doc_date
 * @property string $doc_file
 * @property string $doc_name
 * @property integer $drawer_id
 * @property integer $user_id
 */
class ReportDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'report_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_no', 'subject', 'doc_for', 'doc_from', 'doc_date', 'doc_file', 'doc_name', 'drawer_id', 'user_id'], 'required'],
            [['doc_for', 'doc_from', 'drawer_id', 'user_id'], 'integer'],
            [['doc_date'], 'safe'],
            [['reference_no'], 'string', 'max' => 15],
            [['subject'], 'string', 'max' => 255],
            [['doc_file', 'doc_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reference_no' => 'Reference No',
            'subject' => 'Subject',
            'doc_for' => 'Doc For',
            'doc_from' => 'Doc From',
            'doc_date' => 'Doc Date',
            'doc_file' => 'Doc File',
            'doc_name' => 'Doc Name',
            'drawer_id' => 'Drawer ID',
            'user_id' => 'User ID',
        ];
    }
}
