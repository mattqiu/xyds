<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\EctrainInfo;
use yii\data\Pagination;
use app\common\Common;

class EctrainInfoController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     * 显示培训详情管理页面
     * @return string
     */
    public function actionList()
    {
        return $this->render('list');
    }

    /**
     * @return string
     * 打开添加培训详情页面
     */
    public function actionAdd()
    {
        return $this->render('add');
    }

    /**
     * @return string
     * 添加一条培训详情
     */
    public function actionAddOne()
    {
        $ectrainInfo = new EctrainInfo();
        $ectrainInfo->id = Common::create40ID();
        $ectrainInfo->trainId = Yii::$app->request->post('trainId');
        $ectrainInfo->centralSupport = Yii::$app->request->post('centralSupport');
        $ectrainInfo->centralPaid = Yii::$app->request->post('centralPaid');
        $ectrainInfo->localSupport = Yii::$app->request->post('localSupport');
        $ectrainInfo->companyPaid = Yii::$app->request->post('companyPaid');
        $ectrainInfo->organizer = Yii::$app->request->post('organizer');
        $ectrainInfo->chargeName = Yii::$app->request->post('chargeName');
        $ectrainInfo->chargeMobile = Yii::$app->request->post('chargeMobile');
        $ectrainInfo->centralDecisionUnit = Yii::$app->request->post('centralDecisionUnit');
        $ectrainInfo->decisionFileUrl = Yii::$app->request->post('attachUrls');
        $ectrainInfo->decisionFileName = Yii::$app->request->post('attachName');
        $ectrainInfo->publicInfoUrl = Yii::$app->request->post('publicInfoUrl');
        $ectrainInfo->signSheetUrl = Yii::$app->request->post('signSheetUrl');
        $ectrainInfo->signSheetName = Yii::$app->request->post('signSheetName');
        $ectrainInfo->companyNum = Yii::$app->request->post('companyNum');
        $ectrainInfo->newCompanyThisM = Yii::$app->request->post('newCompanyThisM');
        $ectrainInfo->singleNum = Yii::$app->request->post('singleNum');
        $ectrainInfo->newSingleThisM = Yii::$app->request->post('newSingleThisM');
        $ectrainInfo->published = Yii::$app->request->post('published');

        if ($ectrainInfo->save()) {
            return "success";
        } else {
            return "fail";
        }
    }

    /**
     * @return string
     * 打开培训详情修改页面
     */
    public function actionUpdate(){
        $id = Yii::$app->request->get('id');
        $ectrainInfo = EctrainInfo::findOne($id);
        return $this->render('edit',[
            'ectrainInfo'=>$ectrainInfo,
        ]);
    }

    /**
     * @return string
     * 修改一条培训详情
     */
    public function actionUpdateOne(){
        $id = Yii::$app->request->post('id');
        $decisionFileUrl = Yii::$app->request->post('attachUrls');
        $signSheetUrl = Yii::$app->request->post('signSheetUrl');
        $ectrainInfo = EctrainInfo::findOne($id);
        if($ectrainInfo->decisionFileUrl != $decisionFileUrl&&$ectrainInfo->decisionFileUrl !=''&&$decisionFileUrl !=''&&file_exists($ectrainInfo->decisionFileUrl)){
            unlink($ectrainInfo->decisionFileUrl );
        }
        if($decisionFileUrl !=''){
            $ectrainInfo->decisionFileUrl = $decisionFileUrl;
            $ectrainInfo->decisionFileName = Yii::$app->request->post('attachName');
        }
        if($ectrainInfo->signSheetUrl != $signSheetUrl&&$ectrainInfo->signSheetUrl != ''&&$signSheetUrl !=''&&file_exists($ectrainInfo->signSheetUrl)){
            unlink($ectrainInfo->signSheetUrl );
        }
        if($signSheetUrl !=''){
            $ectrainInfo->signSheetUrl = $signSheetUrl;
            $ectrainInfo->signSheetName = Yii::$app->request->post('signSheetName');
        }
        $ectrainInfo->trainId = Yii::$app->request->post('trainId');
        $ectrainInfo->centralSupport = Yii::$app->request->post('centralSupport');
        $ectrainInfo->centralPaid = Yii::$app->request->post('centralPaid');
        $ectrainInfo->localSupport = Yii::$app->request->post('localSupport');
        $ectrainInfo->companyPaid = Yii::$app->request->post('companyPaid');
        $ectrainInfo->organizer = Yii::$app->request->post('organizer');
        $ectrainInfo->chargeName = Yii::$app->request->post('chargeName');
        $ectrainInfo->chargeMobile = Yii::$app->request->post('chargeMobile');
        $ectrainInfo->centralDecisionUnit = Yii::$app->request->post('centralDecisionUnit');
        $ectrainInfo->publicInfoUrl = Yii::$app->request->post('publicInfoUrl');
        $ectrainInfo->companyNum = Yii::$app->request->post('companyNum');
        $ectrainInfo->newCompanyThisM = Yii::$app->request->post('newCompanyThisM');
        $ectrainInfo->singleNum = Yii::$app->request->post('singleNum');
        $ectrainInfo->newSingleThisM = Yii::$app->request->post('newSingleThisM');
        $ectrainInfo->published = Yii::$app->request->post('published');

        if($ectrainInfo->save()) {
            return "success";
        }else{
            return "fail";
        }
    }

    /**
     * @return string
     * 删除一条培训详情
     */
    public function actionDeleteOne(){
        $id = Yii::$app->request->post('id');
        $ectrainInfo = EctrainInfo::findOne($id);
        if($ectrainInfo->decisionFileUrl !=''&&file_exists($ectrainInfo->decisionFileUrl)) {
            unlink($ectrainInfo->decisionFileUrl);
        }
        if($ectrainInfo->signSheetUrl !=''&&file_exists($ectrainInfo->signSheetUrl)) {
            unlink($ectrainInfo->signSheetUrl);
        }
        if($ectrainInfo->delete()) {
            return "success";
        }else{
            return "fail";
        }
    }

    /**
     * @return string
     * 根据id删除多条记录
     */
    public function actionDeleteMore(){
        $ids = Yii::$app->request->post('ids');
        $ids_array = explode('-',$ids);
        foreach($ids_array as $key=>$data){
            $ectrainInfo = EctrainInfo::findOne($data);
            if($ectrainInfo->decisionFileUrl !=''&&file_exists($ectrainInfo->decisionFileUrl)) {
                unlink($ectrainInfo->decisionFileUrl);
            }
            if($ectrainInfo->signSheetUrl !=''&&file_exists($ectrainInfo->signSheetUrl)) {
                unlink($ectrainInfo->signSheetUrl);
            }
            EctrainInfo::deleteall('id=:id',[':id'=>$data]);
        }
        return "success";
    }

    /**
     * @return string
     * 打开培训详情的详情页面
     */
    public function actionFindOne(){
        $id = Yii::$app->request->get('id');
        $ectrainInfo = EctrainInfo::findOne($id);
        return $this->render('detail',[
            'ectrainInfo'=>$ectrainInfo
        ]);
    }

    /**
     * 根据培训ID标题查询培训详情
     * @return string
     */
    public function actionFindByAttri(){
        $trainId = Yii::$app->request->get('trainId');

        $para = [];
        $para['trainId'] = $trainId;

        $whereStr = '1=1';
        if($trainId != ''){
            $whereStr = $whereStr . " and trainId like '%" . $trainId . "%'" ;
        }

        $ectrainInfo = EctrainInfo::find()->where($whereStr);
        $page = new Pagination(['totalCount' => $ectrainInfo->count(), 'pageSize' => Common::PAGESIZE]);
        $models = $ectrainInfo->offset($page->offset)->limit($page->limit)->orderBy(['published'=>SORT_DESC])->all();

        return $this->render('listall',[
            'ectrainInfo' => $models,
            'pages' => $page,
            'para' => $para,
        ]);
    }

    /**
     * 上传决策文件
     * @return string
     */
    public function actionUpload(){

        if (Yii::$app->request->isPost) {

            $fileArg = Common::upload($_FILES,false,false,false,50*1024000);
            return $this->render('upload',[
                "fileArg" => $fileArg,
                "tag" => $fileArg['tag'],
            ]);
        }
        return $this->render('upload',[
            "tag" => "empty",
            "fileArg" =>[
                "fileName" => "",     //保存到数据库的文件名称
                "fileSaveUrl" =>"",//上传文件保存的路径
                "tag" => "",//当为success表示上传成功，当为error时表示文件过大或是文件类型不对
            ],
        ]);

    }

    /**
     * 上传签到文件
     * @return string
     */
    public function actionUploads(){

        if (Yii::$app->request->isPost) {

            $fileArg = Common::upload($_FILES,false,false,false,50*1024000);
            return $this->render('uploads',[
                "fileArg" => $fileArg,
                "tag" => $fileArg['tag'],
            ]);
        }
        return $this->render('uploads',[
            "tag" => "empty",
            "fileArg" =>[
                "fileName" => "",     //保存到数据库的文件名称
                "fileSaveUrl" =>"",//上传文件保存的路径
                "tag" => "",//当为success表示上传成功，当为error时表示文件过大或是文件类型不对
            ],
        ]);

    }

	/**
	 * 按月分组查询网商总数
	 * @return bool|string
	 */
	public function actionAjax(){
		$type = Yii::$app->request->post('type');
		if($type==5){
			$sql = Yii::$app->getDb()->createCommand("SELECT DATE_FORMAT(published,'%Y-%m')AS months,SUM(companyNum)as companyNum,
SUM(newCompanyThisM)as newCompanyThisM,SUM(singleNum)as singleNum,SUM(newSingleThisM)as newSingleThisM FROM ectraininfo GROUP BY DATE_FORMAT(published,'%Y-%m')");
			$res = $sql->queryAll();
			return yii\helpers\Json::encode($res);
		}else{
			return false;
		}
	}
}