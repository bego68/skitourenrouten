<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Skitourenrouten',
            'Skitouren',
            'Skitouren'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('skitourenrouten', 'Configuration/TypoScript', 'Skitouren-Routen');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_skitourenrouten_domain_model_mountainregion', 'EXT:skitourenrouten/Resources/Private/Language/locallang_csh_tx_skitourenrouten_domain_model_mountainregion.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_skitourenrouten_domain_model_mountainregion');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_skitourenrouten_domain_model_mountain', 'EXT:skitourenrouten/Resources/Private/Language/locallang_csh_tx_skitourenrouten_domain_model_mountain.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_skitourenrouten_domain_model_mountain');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_skitourenrouten_domain_model_route', 'EXT:skitourenrouten/Resources/Private/Language/locallang_csh_tx_skitourenrouten_domain_model_route.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_skitourenrouten_domain_model_route');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_skitourenrouten_domain_model_map', 'EXT:skitourenrouten/Resources/Private/Language/locallang_csh_tx_skitourenrouten_domain_model_map.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_skitourenrouten_domain_model_map');

    }
);
