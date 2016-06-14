<?php
namespace wcf\data\package\update\version;
use wcf\data\DatabaseObjectEditor;

/**
 * Provides functions to edit package update versions.
 * 
 * @author	Alexander Ebert
 * @copyright	2001-2016 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	WoltLabSuite\Core\Data\Package\Update\Version
 * 
 * @method	PackageUpdateVersion	getDecoratedObject()
 * @mixin	PackageUpdateVersion
 */
class PackageUpdateVersionEditor extends DatabaseObjectEditor {
	/**
	 * @inheritDoc
	 */
	protected static $baseClass = PackageUpdateVersion::class;
}
