#Html Helper for create AjaxButton

Usage:

```php
\Apollo\AjaxButton::begin(['label'=>'label',
'elements'=>['id'=>array of id's] // generate code for id's as $( '#id1','#id2'.... ).click(function(event){...}


'ajaxOptions'=>[

    'type'=>'POST',
    'afterClick'=>new \yii\web\JsExpression('alert(Clicked)');
    'url'=>'google',
    'success'=>new \yii\web\JsExpression('function(){location.reload()}'),
    'beforeSend'=> new \yii\web\JsExpression("function(){
    var data=jQuery('#gridID').yiiGridView('getSelectedRows');
    if(data=='')
   		{
   			alert('You do not choose!');
   		return false;
   		}
   		if (confirm('Are you sure you want to delete this items?')) {
return true;
	} else {
	     		return false;

	}

    }"


        ),


]]);

\Apollo\AjaxButton::end();
```