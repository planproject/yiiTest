<?php

namespace app\controllers;

use app\models\CateForm;
use yii\web\Controller;


class FreezeController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    /**
     * cate模板渲染
     * @return string
     */
    public function actionCate()
    {
        $model = new CateForm();
        return $this->renderPartial('cate',[
            'model' => $model,
        ]);
    }

    public function actionAdd()
    {
        $model   = new CateForm();
        $attr=['catename'=>'西门子'];
        $model->setAttributes($attr);
        $model->save(false);
        die;
        $request = \Yii::$app->getRequest();
        //post 提交
        if ($request->isPost && $model->load(\Yii::$app->request->post())) {
            $data = (\Yii::$app->request->post());
            $model->catename = $data['CateForm']['catename'];
            $save = $model->save(false);
            $model->errors;
//            print_r($data['CateForm']['catename']);die;
//            $model->add();
        }
    }





}
