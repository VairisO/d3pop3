<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace d3yii2\d3pop3\models\base;

use Yii;

/**
 * This is the base-model class for table "d3pop3_email_error".
 *
 * @property string $id
 * @property string $email_id
 * @property string $message
 *
 * @property \d3yii2\d3pop3\models\D3pop3Email $email
 * @property string $aliasModel
 */
abstract class D3pop3EmailError extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd3pop3_email_error';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_id', 'message'], 'required'],
            [['email_id'], 'integer'],
            [['message'], 'string'],
            [['email_id'], 'exist', 'skipOnError' => true, 'targetClass' => \d3yii2\d3pop3\models\D3pop3Email::className(), 'targetAttribute' => ['email_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('d3pop3', 'ID'),
            'email_id' => Yii::t('d3pop3', 'Email'),
            'message' => Yii::t('d3pop3', 'Message'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'email_id' => Yii::t('d3pop3', 'Email'),
            'message' => Yii::t('d3pop3', 'Message'),
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmail()
    {
        return $this->hasOne(\d3yii2\d3pop3\models\D3pop3Email::className(), ['id' => 'email_id']);
    }




}