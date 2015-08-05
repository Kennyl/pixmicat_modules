<?php

namespace Pixmicat\Modules\;

use Pixmicat\Module\ModuleHelper;
use Pixmicat\PMCLibrary;

class Modules_ShowHide extends ModuleHelper {
	public function getModuleName(){
		return 'mod_showhide : 自由隱藏顯示討論串';
	}

	public function getModuleVersionInfo(){
		return '7th.Release.dev (v140606)';
	}

	public function autoHookHead(&$txt, $isReply){
		$txt .= '<script type="text/javascript">window.jQuery || document.write("\x3Cscript src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\">\x3C/script>");</script> 
<script type="text/javascript" src="module/mod_showhide.pack.js"></script>'."\n";
	}
}

