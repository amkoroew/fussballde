<?php
namespace MFG\Fussballde\Controller;

/***************************************************************
 *  Copyright notice
 *  (c) 2013 Matthias Gugel <mail@matthias-gugel.de>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Base controller
 *
 * @package TYPO3
 * @subpackage dwzlist
 */
class FussballdeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {
	/**
	 * Initialize View
	 * @return void
	 */
	public function initializeView() {
		$this->view->assign('uid', $this->configurationManager->getContentObject()->data['uid']);
	}

        /**
         * Show matches
         * @return void
         */
        public function showMatchesAction() {
	}

        /**
         * Show table
         * @return void
         */
        public function showTableAction() {}

        /**
         * Show matches and table
         * @return void
         */
        public function showMatchesAndTableAction() {}
}

?>
