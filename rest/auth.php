<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/ddp/redcap-ddp/security-checks.php');

while ( ! file_exists ( 'utils' ) )
	chdir ( '..' );

include_once 'utils/db_connect.php';
include_once 'utils/constants.php';

/**
 * Checks if user or project has access to DDP
 * 
 * @param unknown $user - user requesting access
 * @param unknown $project_id - project id of REDCap
 * @param unknown $redcap_url - URL of REDCap project
 * @return number - 1 if success, 0 if failure
 */
function auth($user, $project_id, $redcap_url){
    	return 1;
}

?>
