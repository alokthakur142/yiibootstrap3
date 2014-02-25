<?php
/**
 * 2014 , 02 24
 
    Copyright (c) 2014, pascal
    All rights reserved.
    
    Redistribution and use in source and binary forms, with or without modification,
    are permitted provided that the following conditions are met:
    
    * Redistributions of source code must retain the above copyright notice, this
      list of conditions and the following disclaimer.
    
    * Redistributions in binary form must reproduce the above copyright notice, this
      list of conditions and the following disclaimer in the documentation and/or
      other materials provided with the distribution.
    
    * Neither the name of the {organization} nor the names of its
      contributors may be used to endorse or promote products derived from
      this software without specific prior written permission.
    
    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
    ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
    WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
    DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
    ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
    (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
    LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
    ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
    (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
    SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

class TestController extends EController{

    public function init(){
        Yii::app()->theme = 'test';
    }
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + rpcmodel', // we only allow deletion via POST request
        );
    }



    public function actionIndex(){
        $this->render('index',['model' => new TestExample(),'id' => null]);
    }

    /**
     *
     */
    public function actionRpcModel(){

        if(!Yii::app()->request->isAjaxRequest){
            echo CJSON::encode([
                'warning'   => 'Only Post Allowed',
            ]);
            return;
        }
        $model      = new TestExample();
        $scenario   = \bootstrap\helpers\BSArray::popValue('scenario',$_POST,false);
        $id         = \bootstrap\helpers\BSArray::popValue('id',$_POST,false);

        if($scenario){
            $model->setScenario($scenario);
        }

        if(isset($_POST['TestExample'])){

            $model->attributes = $_POST['TestExample'];

            if($model->validate()){
                echo CJSON::encode([
                    'success'   => 'Model is validate',
                    'model'     => $model->attributes,
                    'id'        => $id
                ]);
                Yii::app()->end();
            }

            echo CJSON::encode([
                'error'     => 'Model has Errors',
                'model'     => $model->attributes,
                'errors'    => $model->getErrors(),
                'id'        => $id
            ]);
            Yii::app()->end();
        }

        echo CJSON::encode([
            'model'     => $model->attributes,
            'id'        => $id
        ]);
        Yii::app()->end();
    }

} 