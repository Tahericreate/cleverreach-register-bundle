<?php

declare(strict_types=1);

/* 
 * @package   [cleverreach-register-bundle]
 * @author    Taheri Create Core Team
 * @license   GNU/LGPL
 * @copyright Taheri Create 2023 - 2026
 */

namespace Tahericreate\CleverreachRegisterBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Tahericreate\CleverreachRegisterBundle\CleverreachRegisterBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(CleverreachRegisterBundle::class)
            ->setLoadAfter([                    
                'Contao\CoreBundle\ContaoCoreBundle',
                'Contao\NewsletterBundle\ContaoNewsLetterBundle'
            ]),
        ];
    }
}
