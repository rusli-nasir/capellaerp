<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>
<div id="tabledata">
<div class="rowdata">
	<span class="cell">Language</span>
    <span class="cell"><input type="text" name="search_language" id="search_language"></span>
</div>
<div class="rowdata">
	<span class="cell">Messages</span>
    <span class="cell"><input type="text" name="search_messages" id="search_messages"></span>
</div>
<div class="rowdata">
	<span class="cell">Catalog Value</span>
    <span class="cell"><input type="text" name="search_catalogval" id="search_catalogval"></span>
</div>
<div class="rowdata">
<span class="cell">
<?php
$imgsearch=CHtml::image(Yii::app()->request->baseUrl.'/images/search.png');
echo CHtml::link($imgsearch,'#',array(
		   'style'=>'cursor: pointer; text-decoration: underline;',
		   'onclick'=>'{
				$.fn.yiiGridView.update("datagrid", {
                    data: {
                        "languagename": $("#search_language").val(),
						"messagename": $("#search_messages").val(),
						"catalogval": $("#search_catalogval").val(),
                    }
					});
				$("#searchdialog").dialog("close");
		   }',
			'id'=>'search',
			'title'=>Catalogsys::model()->getcatalog('searchdata')
		));
		?></span>
</div>
</div>   
<?php $this->endWidget(); ?>
</div><!-- form -->