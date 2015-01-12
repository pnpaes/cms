<?php
/**
 * @link http://buildwithcraft.com/
 * @copyright Copyright (c) 2013 Pixel & Tonic, Inc.
 * @license http://buildwithcraft.com/license
 */

namespace craft\app\events;

/**
 * Tag event class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.0
 */
class TagEvent extends Event
{
	// Properties
	// =========================================================================

	/**
	 * @var \craft\app\models\Tag The tag model associated with the event.
	 */
	public $tag;
}
