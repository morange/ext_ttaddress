<?php
defined('TYPO3_MODE') or die();

$temporaryColumn = array(
        'tx_deathday' => array (
                'exclude' => 0,
                'label' => 'Todestag',
                'config' => array (
                        'type' => 'check',
                )
        )
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_address',
        $temporaryColumn
);
// add fields to new palette
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_address',
    'generally',
    'tx_deathday',
    'after:name'

);
