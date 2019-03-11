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

    /**
     * TODO 页面
     * @return \yii\web\Response
     * 新增
     */
    public function actionAdd()
    {
        $form_data = \Yii::$app->request->post('CateForm');
        $request   = \Yii::$app->getRequest();
        $model     = new CateForm();

        $model->catename = $form_data['catename'];
        $model->status   = $form_data['status'];
        //post 提交
        if ($model->load(\Yii::$app->request->post())) {
            $res = $model->save();
            if ($res){
                return $this->goBack(\Yii::$app->request->referrer);
//                return $this->goBack(['freeze/index']);
//                $this->redirect(['freeze/welcome']);
            }else{
                die('提交失败');
            }
        }
        //TODO 列表页渲染
    }





}
