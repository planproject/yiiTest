# Yii2 增删改查 #

//普通update
\Yii::$app->db->createCommand()->update('{{%client_order}}', ['class' => '10课时1对1qqqqq'], 'id=2')->execute();

由于执行失败时execute()会抛出异常，因此无需判断

//updateAll
$re = Follow::updateAll(['userId' => $userId,'areaId' => $em->area,'depId' => $em->depId,'groupId' => $em->groupId],"id=$followId");

//普通删除1
$user = User::find()->where(['name'=>'test'])->one(); 
$user->delete();

//普通删除2
Yii::$app->db->createCommand()->delete('user', 'age=30')->execute();


//删除部分
$result = User::deleteAll(['age'=>'30']);

//根据主键删除
$result = User::deleteByPk(1);
