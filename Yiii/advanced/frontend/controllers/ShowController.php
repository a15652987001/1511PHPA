<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use app\models\User;
/**
 * Site controller
 */
class ShowController extends Controller
{

    //关闭CSRF攻击
	public $enableCsrfValidation = false;

	public function actionAdd(){
		return $this->render('add');
	}

	public function actionAdd_do(){
		
		$model = new User();
		$data = Yii::$app->request->post();
		$model->user = $data['user'];
		$model->pwd = $data['pwd'];
		$data = $model->save();
		if ($data) {
			$this->redirect(['show/show']);
		}else{
			echo "添加失败";
		}
		
	}

	public function actionShow(){
		$model = new User();
		$data=$model->find()->asArray()->all();	
		return $this->render('show',['data'=>$data]);
	}

	public function actionDel(){
		$id = Yii::$app->request->get('id');
		$model = new User();
		$data = $model->find()->where(['id'=>$id])->one()->delete();
		if ($data) {
			$this->redirect(['show/show']);
		}else{
			echo "删除失败";
		}
	}

	public function actionUpdate(){
		$id = Yii::$app->request->get('id');
		$model = new User();
		$data = $model->find()->where(['id'=>$id])->one();
		return $this->render('save',['data'=>$data]);
	}

	public function actionSave(){
		$data = Yii::$app->request->post();
		$model = new User();
		$res=$model->find()->where(['id'=>$data['id']])->one();
		$res->user = $data['user'];
		$res->pwd = $data['pwd'];

		if ($res->save()) {
			$this->redirect(['show/show']);
		}else{
			echo "1";
		}
	 


	} 

}