<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Golf.Skitourenrouten',
            'Skitouren',
            [
                'Golf\Skitourenrouten\Controller\RouteController' => 'list, show',
                'Golf\Skitourenrouten\ControllerMountainController' => 'list, show',
                'Golf\Skitourenrouten\ControllerMountainregionController' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Golf\Skitourenrouten\ControllerMountainregionController' => '',
                'Golf\Skitourenrouten\ControllerMountainController' => '',
                'Golf\Skitourenrouten\ControllerRouteController' => '',
                'Golf\Skitourenrouten\ControllerMapController' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    skitouren {
                        iconIdentifier = skitourenrouten-plugin-skitouren
                        title = LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_skitouren.name
                        description = LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_skitouren.description
                        tt_content_defValues {
                            CType = list
                            list_type = skitourenrouten_skitouren
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'skitourenrouten-plugin-skitouren',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:skitourenrouten/Resources/Public/Icons/user_plugin_skitouren.svg']
			);
		
    }
);
