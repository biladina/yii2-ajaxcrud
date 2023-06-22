<?php
namespace yii2ajaxcrud\ajaxcrud;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class BulkButtonWidget extends Widget{

	public $buttons;
	
	public function init(){
		parent::init();
		
	}
	
	public function run(){
		$content = '<div class="pull-left">'.
			'<span class="fa fa-arrow-right"></span>&nbsp;&nbsp;'.Yii::t('yii2-ajaxcrud', 'With selected').'&nbsp;&nbsp;'.
			$this->buttons.
			'</div>';
		return $content;
	}
}
?>
