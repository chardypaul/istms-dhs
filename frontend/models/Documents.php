<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "documents".
 *
 * @property integer $reference_no
 * @property string $doc_subject
 * @property string $doc_date
 * @property string $doc_receiver
 * @property string $doc_location
 * @property string $doc_file
 */
class Documents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $upload_file;
    public static function tableName()
    {
        return 'documents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_no', 'subject', 'doc_date', 'doc_for', 'drawer_id','doc_from', 'doc_file'], 'required'],
            [['reference_no'], 'integer'],
            [['doc_date'], 'safe'],
            [['subject', 'doc_for', 'drawer_id','doc_from'], 'string', 'max' => 250],
            [['doc_file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'docx, docs',],
      
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reference_no' => 'Reference No',
            'subject' => 'Doccument Subject',
            'doc_date' => 'Document Entry Date',
            'doc_for' => 'Document Receiver',
            'doc_from' => 'Document',
            'drawer_id' => 'Document Location',
            'doc_file' => 'Document File',
        ];
    }
      public function uploadFile() {
        // get the uploaded file instance
        $model = UploadedFile::getInstance($this, 'doc_file');
 
        // if no image was uploaded abort the upload
        if (empty($model)) {
            return false;
        }
 
        // generate random name for the file
        $this->doc_file = $model->baseName. '.' . $model->extension;

        // the uploaded image instance
        return $model;
    }
 
    public function getUploadedFile() {
        // return a default image placeholder if your source avatar is not found
        $file = isset($this->doc_file) ? $this->doc_file : 'default.docx';
        return Yii::$app->params['fileUploadUrl'] . $file;
    }
}
