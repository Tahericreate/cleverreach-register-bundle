<?php
/**
 * Contao Open Source CMS
 * @package   [cleverreach-register-bundle]
 * @author    Taheri Create Core Team
 * @license   GNU/LGPL
 * @copyright Taheri Create 2023 - 2026
 */

namespace Tahericreate\CleverreachRegisterBundle\Hooks;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Tahericreate\CleverreachRegisterBundle\Libs\Rest;

class CustomHooks {

    public function activateRecipient(string $email, array $recipientIds, array $channelIds): void
    {
		if($GLOBALS['TL_CONFIG']['client_id'] && $GLOBALS['TL_CONFIG']['login'] && $GLOBALS['TL_CONFIG']['password'] && $GLOBALS['TL_CONFIG']['source'] && $GLOBALS['TL_CONFIG']['groups']){
        	// Envoke API
			$rest = new Rest('https://rest.cleverreach.com/v2');
			
			//skip this part if you have an OAuth access token
			$token = $rest->post('/login', 
				array(
					"client_id" => $GLOBALS['TL_CONFIG']['client_id'],
					"login"     => $GLOBALS['TL_CONFIG']['login'],
					"password"  => $GLOBALS['TL_CONFIG']['password'],
				)
			);
			$rest->setAuthMode("bearer", $token);
			$receivers = array(
				'email'				=> $email,
				'activated'			=> time(),
				'registered'		=> time(),
				'deactivated'		=> 0,
				'source'			=> $GLOBALS['TL_CONFIG']['source'],
			);
            $group = $GLOBALS['TL_CONFIG']['groups'];
			$rest->post("/groups/' . $group . '/receivers", $receivers);
		}
    }
}