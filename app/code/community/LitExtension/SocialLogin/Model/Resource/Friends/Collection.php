<?php
/**
 * Droppin
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade InstagramConnect to newer
 * versions in the future.
 *
 * @category    Droppin
 * @package     Droppin_InstagramConnect
 * @copyright   Copyright (c) 2012 Droppin LLC
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class LitExtension_SocialLogin_Model_Resource_Friends_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
    {
		public function _construct()
		{
			$this->_init("le_sociallogin/friends");
		}
    }
	 