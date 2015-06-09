<?php

namespace Simditor;

use yii\helpers\Html;
use yii\widgets\InputWidget;

class Editor extends InputWidget
{
    public function run()
    {
        $view = $this->getView();
        SimditorAssets::register($view);

        $js = $this->getClientScript();
        $view->registerJs($js);

        return Html::activeTextarea($this->model,$this->attribute,$this->options);
    }

    private function getClientScript()
    {
        $editor_id = $this->options['id'];
        $editor_name = "editor_".md5($editor_id);

        $clientOptions = $this->options['clientOptions'];
        if (!isset($clientOptions['textarea'])){
            $clientOptions['textarea'] = sprintf("$('#%s')",$editor_id);
        }

        $options = json_encode($this->options['clientOptions']);
        $js = <<<_JS_
var $editor_name = new Simditor($options);
_JS_;

        return $js;
    }
}
