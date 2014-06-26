<?php
/**
 * Created by PhpStorm.
 * User: vov4ik08
 * Date: 24.02.14
 * Time: 10:19
 */

namespace Apollo;


use yii\bootstrap\Button;
use yii\helpers\Html;
use yii\helpers\Json;

class AjaxButton extends Button
{
    public $ajaxOptions = [];

    public function run()
    {
        echo Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label, $this->options);
        $this->registerPlugin('button');

        if (!empty($this->ajaxOptions)) {
            $this->registerAjaxScript();

        }

    }

    protected function registerAjaxScript()
    {
        $view=$this->getView();
        $this->ajaxOptions=Json::encode($this->ajaxOptions);
        $view->registerJs("$( '#".$this->options['id']."' ).click(function(event) {
                $.ajax(

                ". $this->ajaxOptions."

              );
            });");

    }

} 