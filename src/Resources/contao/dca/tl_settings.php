<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * @package   [cleverreach-register-bundle]
 * @author    Taheri Create Core Team
 * @license   GNU/LGPL
 * @copyright Taheri Create 2023 - 2026
 */

 /**
 * Table tl_settings
 */

// Palettes

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace('{global_legend},adminEmail;', '{global_legend},adminEmail;{cleverreach_legend},client_id,login,password,source,groups;',  $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);

// Fields

$GLOBALS['TL_DCA']['tl_settings']['fields']['client_id'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['client_id'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory' => false, 'rgxp'=>'extnd', 'nospace'=>true, 'unique'=>true, 'maxlength'=>64, 'tl_class'=>'w50', 'autocapitalize'=>'off'),
    'sql'                     => "INT(16) default NULL"
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['login'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['login'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory' => false, 'tl_class' => 'w50'),
    'sql'                     => "VARCHAR(100) default NULL"
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['password'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['password'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory' => false, 'preserveTags'=>true, 'tl_class' => 'w50'),
    'sql'                     => "VARCHAR(100) default NULL"
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['source'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['source'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory' => false, 'tl_class' => 'w50'),
    'sql'                     => "VARCHAR(100) default NULL"
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['groups'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['groups'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory' => false, 'tl_class' => 'w50'),
    'sql'                     => "INT(16) default NULL"
);