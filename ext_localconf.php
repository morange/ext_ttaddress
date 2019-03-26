<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_address']['extender'][\FriendsOfTYPO3\TtAddress\Domain\Model\Address::class]['ext_ttaddress'] = 'EXT:ext_ttaddress/Classes/Domain/Model/Address.php';#\ExtTtaddres\ExtTtaddress\Domain\Model\Address::class;
