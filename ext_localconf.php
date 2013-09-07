<?php
if (!defined('TYPO3_MODE')) {
        die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MFG.' . $_EXTKEY,
        'Fussballde',
        array(
                'Fussballde' => 'showMatches,showTable,showMatchesAndTable'
        ),
        // non-cacheable actions
        array(

        )
);

?>
