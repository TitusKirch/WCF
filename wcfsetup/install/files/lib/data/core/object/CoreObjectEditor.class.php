<?php
namespace wcf\data\core\object;
use wcf\data\DatabaseObjectEditor;

/**
 * Provides functions to edit core objects.
 * 
 * @author	Alexander Ebert
 * @copyright	2001-2016 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	WoltLabSuite\Core\Data\Core\Object
 *
 * @method	CoreObject	getDecoratedObject()
 * @mixin	CoreObject
 */
class CoreObjectEditor extends DatabaseObjectEditor {
	/**
	 * @inheritDoc
	 */
	protected static $baseClass = CoreObject::class;
}
