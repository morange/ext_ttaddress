<?php
defined('TYPO3_MODE') or die();

$temporaryColumn = [
    'tx_deathday' => [
        'exclude' => false,
        'label' => 'Todestag',
        'config' => [
            'type' => 'check',
            'default' => 0
        ]
    ]
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_address',
    $temporaryColumn
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'tx_deathday', '', 'after:birthday');
