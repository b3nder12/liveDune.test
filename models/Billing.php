<?php

    namespace app\models;

    use Yii;
    use yii\data\Pagination;

    /**
     * This is the model class for table "billing".
     *
     * @property int $id
     * @property int|null $user_id
     * @property int|null $payment_sum
     *
     * @property Users $user
     */
    class Billing extends \yii\db\ActiveRecord
    {
        /**
         * {@inheritdoc}
         */
        public static function tableName()
        {
            return 'billing';
        }

        /**
         * {@inheritdoc}
         */
        public function rules()
        {
            return [
                [['user_id', 'payment_sum'], 'integer'],
                [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
            ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels()
        {
            return [
                'id' => 'ID',
                'user_id' => 'User ID',
                'payment_sum' => 'Payment Sum',
            ];
        }

        /**
         * Gets query for [[User]].
         *
         * @return \yii\db\ActiveQuery
         */
        public function getUser()
        {
            return $this->hasOne(Users::className(), ['id' => 'user_id']);
        }

        public static function getAll()
        {
            return Billing::findBySql('SELECT user_id, SUM(payment_sum) AS payment_sum FROM `billing` GROUP BY user_id ORDER BY payment_sum DESC')->all();
        }
    }
