<?php

/* 
 * @package   [cleverreach-register-bundle]
 * @author    Taheri Create Core Team
 * @license   GNU/LGPL
 * @copyright Taheri Create 2023 - 2026
 */

use Tahericreate\CleverreachRegisterBundle\Hooks\CustomHooks;


// Custom Hooks
$GLOBALS['TL_HOOKS']['activateRecipient'][] = array(CustomHooks::class, 'activateRecipient');
