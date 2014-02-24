#Html Helper for create AjaxButton

Usage:

```php
\Apollo\AjaxButton::begin(['label'=>'label','ajaxOptions'=>[

    'type'=>'POST',
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