<?php define('���', '��');����ހ������̬Փ���ﰣᙾ����꿋���Մ�����ө���ɠ��Т����������������쌪���⊑��������;$GLOBALS[���] = explode('|,|@|>', 'KOD_GROUP_PATH|,|@|>{groupPath}|,|@|>KOD_GROUP_SHARE|,|@|>{groupShare}|,|@|>KOD_USER_SELF|,|@|>{userSelf}|,|@|>KOD_USER_SHARE|,|@|>{userShare}|,|@|>KOD_USER_RECYCLE|,|@|>{userRecycle}|,|@|>KOD_USER_FAV|,|@|>{userFav}|,|@|>KOD_GROUP_ROOT_SELF|,|@|>{treeGroupSelf}|,|@|>KOD_GROUP_ROOT_ALL|,|@|>{treeGroupAll}|,|@|>\\|,|@|>/|,|@|>/\\/+/|,|@|>isRoot|,|@|>/../|,|@|>kodPathType|,|@|>|,|@|>kodPathPre|,|@|>kodPathId|,|@|>kodPathIdShare|,|@|>:|,|@|>share/|,|@|>kodUser|,|@|>userID|,|@|>config|,|@|>pathRoleGroupDefault|,|@|>1|,|@|>actions|,|@|>kodShareInfo|,|@|>path|,|@|>role|,|@|>type|,|@|>file|,|@|>fileList|,|@|>folderList|,|@|>share|,|@|>//|,|@|>.cache_data|,|@|>group_not_exist|,|@|>kodPathAuthCheck|,|@|>no_permission_group|,|@|>pathRoleGroup|,|@|>kodPathRoleGroupAuth|,|@|>.|,|@|>no_permission_action|,|@|>pathRoleDefine|,|@|>editor.fileSave|,|@|>auth|,|@|>kodBeforePathId|,|@|>in|,|@|>user|,|@|>size|,|@|>beforePathType|,|@|>uploadFileBefore|,|@|>space_size_use_check|,|@|>uploadFileAfter|,|@|>spaceSizeChange|,|@|>explorer.serverDownloadBefore|,|@|>explorer.unzipBefore|,|@|>explorer.zipBefore|,|@|>explorer.pathCopy|,|@|>explorer.mkfileBefore|,|@|>explorer.mkdirBefore|,|@|>explorer.pathMove|,|@|>explorer.mkfileAfter|,|@|>explorer.pathCopyAfter|,|@|>explorer.unzipAfter|,|@|>explorer.serverDownloadAfter|,|@|>explorer.pathMoveBefore|,|@|>explorer.pathMoveBfter|,|@|>spaceSizeChange_move|,|@|>explorer.pathRemoveAfter|,|@|>space_size_use_reset|,|@|>accessToken|,|@|>access_token|,|@|>SaeStorage|,|@|>SAE_APPNAME|,|@|>SESSION_PATH_DEFAULT|,|@|>session.save_handler|,|@|>files|,|@|>HTTP_APPNAME|,|@|>kod|,|@|>服务器session写入失败! (session write error)<br/>|,|@|>请检查php.ini相关配置,查看磁盘是否已满,或咨询服务商。<br/><br/>|,|@|>session.save_path=|,|@|><br/>|,|@|>session.save_handler=|,|@|>settingSystem|,|@|>systemPassword|,|@|>kodExplorer_|,|@|>accessToken error!');�ׅ�ټ�������غ׭��̍ϴ�������������ُ����˩�������ӕ�������ʖ���ǻ�����;
 define($GLOBALS{���}[0],$GLOBALS{���}{0x001});define($GLOBALS{���}[0x0002],$GLOBALS{���}{0x00003});define($GLOBALS{���}[0x000004],$GLOBALS{���}{0x05});define($GLOBALS{���}[0x006],$GLOBALS{���}{0x0007});define($GLOBALS{���}[0x00008],$GLOBALS{���}{0x000009});define($GLOBALS{���}[0x0a],$GLOBALS{���}{0x00b});define($GLOBALS{���}[0x000c],$GLOBALS{���}{0x0000d});define($GLOBALS{���}[0x00000e],$GLOBALS{���}{0x0f});function _DIR_CLEAR($���){$�̝�=&$GLOBALS{���};$���=str_replace($�̝�[0x0010],$�̝�{0x00011},trim($���));������􉬇ц;$���=preg_replace($�̝�[0x000012],$�̝�{0x00011},$���);��ť��է�����ڷ��������蹇Ԃ��Ȣ������ػ��п�ͫ������;if(isset($GLOBALS[$�̝�{0x0000013}])&& $GLOBALS[$�̝�{0x0000013}]){return $���;}while(strstr($���,$�̝�[0x014])){$���=str_replace($�̝�[0x014],$�̝�{0x00011},$���);}$���=preg_replace($�̝�[0x000012],$�̝�{0x00011},$���);return $���;�թ���ô������牚��ٮ���˓;}function _DIR($Ɖ){$�=&$GLOBALS{���};$���=_DIR_CLEAR($Ɖ);���;$���=iconv_system($���);�����������ѳ����Ⅻ�����������ħͽ����薭��ʀ�Ь�Ͳ�Ͼ���ת������Ӂּ�������;$૒��=array(KOD_GROUP_PATH,KOD_GROUP_SHARE,KOD_USER_SELF,KOD_GROUP_ROOT_SELF,KOD_GROUP_ROOT_ALL,KOD_USER_SHARE,KOD_USER_RECYCLE,KOD_USER_FAV,);$GLOBALS[$�{0x0015}]=$�[0x00016];��ԃ�Ӄݐ���;$GLOBALS[$�{0x000017}]=HOME;$GLOBALS[$�[0x0000018]]=$�[0x00016];����������������;unset($GLOBALS[$�{0x019}]);���م�������Մ���ͱӱ�����ҩ����;foreach($૒�� as $�){if(substr($���,0,strlen($�))==$�){$GLOBALS[$�{0x0015}]=$�;$���=explode($�{0x00011},$���);$��Ш�=$���[0];unset($���[0]);$�²�=implode($�{0x00011},$���);$�=explode($�[0x001a],$��Ш�);if(count($�)>0x001){$GLOBALS[$�[0x0000018]]=trim($�[0x001]);}else{$GLOBALS[$�[0x0000018]]=$�[0x00016];}break;}}switch($GLOBALS[$�{0x0015}]){case $�[0x00016]:$���=iconv_system(HOME).$���;��լ�����Į�셀��������������磎��Ẇ���䢷���������������;break;case KOD_USER_RECYCLE:$GLOBALS[$�{0x000017}]=trim(USER_RECYCLE,$�{0x00011});����䛒Ͼܵ��;$GLOBALS[$�[0x0000018]]=$�[0x00016];�͌ӗ�������늋���;return iconv_system(USER_RECYCLE).$�{0x00011}.str_replace(KOD_USER_RECYCLE,$�[0x00016],$���);�������޿�����ʹ�譿;case KOD_USER_SELF:$GLOBALS[$�{0x000017}]=trim(HOME_PATH,$�{0x00011});�����������ф��������ԙ�;$GLOBALS[$�[0x0000018]]=$�[0x00016];return iconv_system(HOME_PATH).$�{0x00011}.str_replace(KOD_USER_SELF,$�[0x00016],$���);�����Ş���ۃ𿈠�֔������ݽ�������ߞ;case KOD_USER_FAV:$GLOBALS[$�{0x000017}]=trim(KOD_USER_FAV,$�{0x00011});�✨�����Ҧ����ڎ�壚���ⰳ��۰�Ĥ��;$GLOBALS[$�[0x0000018]]=$�[0x00016];������䎀ƨ�������;return KOD_USER_FAV;case KOD_GROUP_ROOT_SELF:$GLOBALS[$�{0x000017}]=trim(KOD_GROUP_ROOT_SELF,$�{0x00011});$GLOBALS[$�[0x0000018]]=$�[0x00016];return KOD_GROUP_ROOT_SELF;����ҟؠ��;case KOD_GROUP_ROOT_ALL:$GLOBALS[$�{0x000017}]=trim(KOD_GROUP_ROOT_ALL,$�{0x00011});�����ڂ�;$GLOBALS[$�[0x0000018]]=$�[0x00016];������֐�����ѥ��;return KOD_GROUP_ROOT_ALL;�ꔖ�������٪�����̎����٘Ǜ椀Ѹ��͉�͘ڧ����������������;case KOD_GROUP_PATH:$��=systemGroup::getInfo($GLOBALS[$�[0x0000018]]);�����Ј����͞�Ӷ��֠��Տ��;if(!$GLOBALS[$�[0x0000018]]|| !$��)return !1;owner_group_check($GLOBALS[$�[0x0000018]]);$GLOBALS[$�{0x000017}]=group_home_path($��);������Ƹ���򍛒��;$���=iconv_system($GLOBALS[$�{0x000017}]).$�²�;��������ג׹����������󎵐���菿��������������;break;case KOD_GROUP_SHARE:$��=systemGroup::getInfo($GLOBALS[$�[0x0000018]]);if(!$GLOBALS[$�[0x0000018]]|| !$��)return !1;owner_group_check($GLOBALS[$�[0x0000018]]);$GLOBALS[$�{0x000017}]=group_home_path($��).$�{0x0001b};����́����������삜����������꿔���;$���=iconv_system($GLOBALS[$�{0x000017}]).$�²�;������������ʩ�Գ휞���ẅ���羗⯗̢�Օ������ړ��;break;����ެ���������ќ�;case KOD_USER_SHARE:$��=systemMember::getInfo($GLOBALS[$�[0x0000018]]);�ɵ��ȩ�����ā���;if(!$GLOBALS[$�[0x0000018]]|| !$��)return !1;if($GLOBALS[$�[0x0000018]]!=$_SESSION[$�[0x00001c]][$�{0x000001d}]){$���=$GLOBALS[$�[0x01e]][$�{0x001f}][$�[0x00020]][$�{0x000021}];path_role_check($���);}$GLOBALS[$�{0x000017}]=$�[0x00016];$GLOBALS[$�{0x019}]=$Ɖ;�ĺ�ࠇ����������̞���ۃ����̉����ί��ά���������߃����������;if($�²�==$�[0x00016]){return $���;}else{$�=explode($�{0x00011},$�²�);$�[0]=iconv_app($�[0]);$Ѳ��=systemMember::userShareGet($GLOBALS[$�[0x0000018]],$�[0]);$GLOBALS[$�[0x0000022]]=$Ѳ��;$GLOBALS[$�{0x019}]=KOD_USER_SHARE.$�[0x001a].$GLOBALS[$�[0x0000018]].$�{0x00011}.$�[0].$�{0x00011};unset($�[0]);if(!$Ѳ��)return !1;$�=rtrim($Ѳ��[$�{0x023}],$�{0x00011}).$�{0x00011}.iconv_app(implode($�{0x00011},$�));��͹�����������ջ�២�Ѩ���Ќ��گ��נۃ��;if($��[$�[0x0024]]!=$�[0x00020]){$�=user_home_path($��);$GLOBALS[$�{0x000017}]=$�.rtrim($Ѳ��[$�{0x023}],$�{0x00011}).$�{0x00011};$���=$�.$�;}else{$GLOBALS[$�{0x000017}]=$Ѳ��[$�{0x023}];$���=$�;}if($Ѳ��[$�{0x00025}]==$�[0x000026]){$GLOBALS[$�{0x019}]=rtrim($GLOBALS[$�{0x019}],$�{0x00011});$GLOBALS[$�{0x000017}]=rtrim($GLOBALS[$�{0x000017}],$�{0x00011});}$���=iconv_system($���);}break;default:break;}if($���!=$�{0x00011}){$���=rtrim($���,$�{0x00011});if(is_dir($���))$���=$���.$�{0x00011};}return $���;����莹����ˡ�������Ðޒ�������ԇپ��Б������ś�����;}function _DIR_OUT($��){$�=&$GLOBALS{���};if(is_array($��)){foreach($��[$�{0x0000027}] as $��=>&$�м��){$�м��[$�{0x023}]=preClear($�м��[$�{0x023}]);}foreach($��[$�[0x028]] as $��=>&$�м��){$�м��[$�{0x023}]=preClear(rtrim($�м��[$�{0x023}],$�{0x00011}).$�{0x00011});}}else{$��=preClear($��);}return $��;}function preClear($�){$���=&$GLOBALS{���};$��ݝ�=$GLOBALS[$���{0x0015}];$���=rtrim($GLOBALS[$���{0x000017}],$���{0x00011});������⩃���������Ô��Ԯ�����;$��=array(KOD_USER_FAV,KOD_GROUP_ROOT_SELF,KOD_GROUP_ROOT_ALL);if(isset($GLOBALS[$���{0x0015}])&& in_array($GLOBALS[$���{0x0015}],$��)){return $�;}if(ST==$���{0x0029}){return str_replace($���,$���[0x00016],$�);}if($GLOBALS[$���[0x0000018]]!=$���[0x00016]){$��ݝ�.=$���[0x001a].$GLOBALS[$���[0x0000018]].$���{0x00011};}if(isset($GLOBALS[$���{0x019}])){$��ݝ�=$GLOBALS[$���{0x019}];}$����=$��ݝ�.str_replace($���,$���[0x00016],$�);$����=str_replace($���[0x0002a],$���{0x00011},$����);���Ȣʇ����𣖠Ũ���������������ٳ�����롏�緙��֊��ɽ��՗�����֢�Р��ɪ��Ї��������������;return $����;}include(CLASS_DIR.$GLOBALS{���}{0x00002b});function owner_group_check($�Щ��){$���=&$GLOBALS{���};if(!$�Щ��)show_json(LNG($���[0x000002c]).$�Щ��,!1);if($GLOBALS[$���{0x0000013}]||(isset($GLOBALS[$���{0x02d}])&& $GLOBALS[$���{0x02d}]===!0)){return;}$����=systemMember::userAuthGroup($�Щ��);if($����==!1){if($GLOBALS[$���{0x0015}]==KOD_GROUP_PATH){show_json(LNG($���[0x002e]),!1);}else if($GLOBALS[$���{0x0015}]==KOD_GROUP_SHARE){$�Զ=$GLOBALS[$���[0x01e]][$���{0x001f}][$���[0x00020]];}}else{$�Զ=$GLOBALS[$���[0x01e]][$���{0x0002f}][$����];}path_role_check($�Զ[$���{0x000021}]);����ջ����������͉�����޽ɳ���Ǣ������������������Ư���ȩ��;}function path_role_check($�){$�����=&$GLOBALS{���};if($GLOBALS[$�����{0x0000013}]||(isset($GLOBALS[$�����{0x02d}])&& $GLOBALS[$�����{0x02d}]===!0)){return;}$���=role_permission_arr($�);$GLOBALS[$�����[0x000030]]=$���;if(!isset($���[ST.$�����{0x0000031}.ACT])&& ST!=$�����{0x0029}){show_json(LNG($�����[0x032]),!1);}}function role_permission_arr($�Ͼ){$��=&$GLOBALS{���};$��=array();$�=$GLOBALS[$��[0x01e]][$��{0x0033}];foreach($�Ͼ as $�=>$���){if(!$���)continue;$�=explode($��[0x001a],$�);if(count($�)==0x0002&& is_array($�[$�[0]])&& is_array($�[$�[0]][$�[0x001]])){$��=array_merge($��,$�[$�[0]][$�[0x001]]);}}$�����=array();foreach($�� as $���){$�����[$���]=$��[0x00020];�������ȉꄦٍ���٫���������;}return $�����;��Ͷؗ�Û垨ۙ�;}function check_file_writable_user($��){$��䶠=&$GLOBALS{���};if(!isset($GLOBALS[$��䶠{0x0015}])){_DIR($��);}$�=$��䶠[0x00034];if($GLOBALS[$��䶠{0x0000013}])return @is_writable($��);if($GLOBALS[$��䶠{0x000035}][$�]!=$��䶠[0x00020]){return !1;}if($GLOBALS[$��䶠{0x0015}]==KOD_GROUP_PATH&& is_array($GLOBALS[$��䶠[0x000030]])&& $GLOBALS[$��䶠[0x000030]][$�]==$��䶠[0x00020]){return !0;}if($GLOBALS[$��䶠{0x0015}]==$��䶠[0x00016] || $GLOBALS[$��䶠{0x0015}]==KOD_USER_SELF){return !0;}return !1;}function space_size_use_check(){$���=&$GLOBALS{���};if(!system_space())return;if($GLOBALS[$���{0x0000013}]==0x001)return;if(isset($GLOBALS[$���[0x0000036]])&& isset($GLOBALS[$���[0x0000018]])&& $GLOBALS[$���[0x0000036]]==$GLOBALS[$���[0x0000018]]){return;}if($GLOBALS[$���{0x0015}]==KOD_GROUP_SHARE|| $GLOBALS[$���{0x0015}]==KOD_GROUP_PATH){systemGroup::spaceCheck($GLOBALS[$���[0x0000018]]);}else{if(ST==$���{0x0029}){$��ˮ�=$GLOBALS[$���{0x037}][$���[0x0038]];}else{$��ˮ�=$_SESSION[$���[0x00001c]][$���{0x000001d}];}systemMember::spaceCheck($��ˮ�);}}function spaceSizeChange($��,$��=true,$�=false,$ʫ=false){$���=&$GLOBALS{���};if(!system_space())return;if($�===!1){$�=$GLOBALS[$���{0x0015}];$ʫ=$GLOBALS[$���[0x0000018]];}$��=$��?0x001:-0x001;if(is_file($��)){$��=get_filesize($��);}else if(is_dir($��)){$��=_path_info_more($��);$��=$��[$���{0x00039}];}else{return;}if($�==KOD_GROUP_SHARE|| $�==KOD_GROUP_PATH){systemGroup::spaceChange($ʫ,$��*$��);}else{if(ST==$���{0x0029}){$����=$GLOBALS[$���{0x037}][$���[0x0038]];}else{$����=$_SESSION[$���[0x00001c]][$���{0x000001d}];}systemMember::spaceChange($����,$��*$��);}}function spaceSizeChange_move($�����){$�=&$GLOBALS{���};if(isset($GLOBALS[$�[0x0000036]])&& isset($GLOBALS[$�[0x0000018]])){if($GLOBALS[$�[0x0000036]]==$GLOBALS[$�[0x0000018]]){return;}else{spaceSizeChange($�����);spaceSizeChange($�����,!1,$GLOBALS[$�[0x00003a]],$GLOBALS[$�[0x0000036]]);}}else{spaceSizeChange($�����);}}function space_size_use_reset(){$��=&$GLOBALS{���};if(!system_space())return;$�����=isset($GLOBALS[$��{0x0015}])?$GLOBALS[$��{0x0015}]:$��[0x00016];������������֪�������������ʋ���̣�����Ѕ����Ԯ���������������������;$�=isset($GLOBALS[$��[0x0000018]])?$GLOBALS[$��[0x0000018]]:$��[0x00016];if($�����==KOD_GROUP_SHARE|| $�����==KOD_GROUP_PATH){systemGroup::spaceChange($�);}else{$�=$_SESSION[$��[0x00001c]][$��{0x000001d}];systemMember::spaceChange($�);}}function init_space_size_hook(){$����=&$GLOBALS{���};Hook::bind($����{0x000003b},$����[0x03c]);Hook::bind($����{0x003d},$����[0x0003e]);���ɗ�뼦���;Hook::bind($����{0x00003f},$����[0x03c]);Hook::bind($����[0x0000040],$����[0x03c]);Hook::bind($����{0x041},$����[0x03c]);����ý������������;Hook::bind($����[0x0042],$����[0x03c]);���;Hook::bind($����{0x00043},$����[0x03c]);������α͚��쒽∵�������������������Ӎ��������ޥ�қ������ܗ�ь����������ܪк����;Hook::bind($����[0x000044],$����[0x03c]);Hook::bind($����{0x0000045},$����[0x03c]);��Ƨ�����˾�ާ�Ş���������ٓ���;Hook::bind($����[0x046],$����[0x0003e]);����穃����������ٽ���۰�˶�Є���;Hook::bind($����{0x0047},$����[0x0003e]);������؋���Ȳ����;Hook::bind($����[0x00048],$����[0x0003e]);Hook::bind($����{0x000049},$����[0x0003e]);Hook::bind($����[0x000004a],$����[0x03c]);�����酋ȇ�������������Ƃ���������гԊŷ�����������↢��ʤ���;Hook::bind($����{0x04b},$����[0x004c]);��ì��򠇤�ߙ������Ï���ƴ�����ڥ����򌲍�Ԓ�Ձ�ܓ���ʴ���눽�օ�ʒ��ߑ����Á��;Hook::bind($����{0x0004d},$����[0x00004e]);}function init_session(){$�����=&$GLOBALS{���};if(isset($_GET[$�����{0x000004f}])){access_token_check($_GET[$�����{0x000004f}]);}else if(isset($_GET[$�����[0x050]])){access_token_check($_GET[$�����[0x050]]);}else{@session_name(SESSION_ID);}$ڄ�=@session_save_path();if(class_exists($�����{0x0051})|| defined($�����[0x00052])|| defined($�����{0x000053})|| @ini_get($�����[0x0000054])!=$�����{0x055} || isset($_SERVER[$�����[0x0056]])){}else{chmod_path(KOD_SESSION,0777);@session_save_path(KOD_SESSION);}@session_start();$_SESSION[$�����{0x00057}]=0x001;@session_write_close();unset($_SESSION);@session_start();��ߑ���;if(!$_SESSION[$�����{0x00057}]){@session_save_path($ڄ�);@session_start();$_SESSION[$�����{0x00057}]=0x001;@session_write_close();unset($_SESSION);@session_start();}if(!$_SESSION[$�����{0x00057}]){show_tips($�����[0x000058].$�����{0x0000059}.$�����[0x05a].$ڄ�.$�����{0x005b}.$�����[0x0005c].@ini_get($�����[0x0000054]).$�����{0x005b});}}function access_token_check($���Թ){$ճ�=&$GLOBALS{���};$�=$GLOBALS[$ճ�[0x01e]][$ճ�{0x00005d}][$ճ�[0x000005e]];$�=substr(md5($ճ�{0x05f}.$�),0,0x0f);����������‥ھ߶�������ϒ�����䅡٥�����̟��ͣ�Ѕ������ᒉ�����Ӈ�����ƫ���ג��Դ;$���=Mcrypt::decode($���Թ,$�);if(!$���){show_tips($ճ�[0x0060]);}session_id($���);}function access_token_get(){$���=&$GLOBALS{���};$Ꮞ=session_id();$��=$GLOBALS[$���[0x01e]][$���{0x00005d}][$���[0x000005e]];$��=substr(md5($���{0x05f}.$��),0,0x0f);���÷����յ����������̎��������Σ���׶����ׯݮ�Ӝ櫙�����Ԅ�ӿ���ӻ����ԝ��;$���=Mcrypt::encode($Ꮞ,$��,0x0e10*0x0000018);return $���;}function init_config(){init_setting();init_session();init_space_size_hook();}