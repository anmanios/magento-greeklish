<?php
/**
 * Anmanios
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Anmanios
 * @package     Anmanios_Greeklish
 * @copyright   Copyright (c) 2017
 * @author		Manios Anastasios <an.manios@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 

class Anmanios_Greeklish_Helper_Data extends Mage_Core_Helper_Abstract
{

	const XML_PATH_GREEKLISH_GENERAL_ENABLED = 'anmgreeklish/general/enabled';
	
	/**
	 * Retrieve greeklishs status
	 *
	 * @param int $storeId
	 * @return int
	 */
	public function greeklishEnabled($storeId = null){
		return Mage::getStoreConfig(self::XML_PATH_GREEKLISH_GENERAL_ENABLED, $storeId);
	}
	
}
