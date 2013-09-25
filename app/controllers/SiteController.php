<?php
/**
 *
 * SiteController class
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
class SiteController extends EController
{

    public function actionIndex()
    {
        $this->layout = '//layouts/column_2';
        $this->render('index');
    }

    public function actionAjaxTest()
    {
        $message = $_POST['message'];
        echo BSHtml::alert(BSHtml::ALERT_COLOR_INFO, "<strong>Message:</strong>{$message}");
        Yii::app()->end();
    }

    /**
     * Apigen Documentation
     * php apigen.php apigen
     * --source bootstrap/app/lib/vendor/drmabuse/yii-bootstrap-3-module/
     * --destination bootstrap/www/class_reference
     */
    public function actionDoc(){
        $this->render('documentation');
    }
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}