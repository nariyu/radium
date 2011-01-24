<?php
/**
 * radium: the most RAD php framework
 *
 * @copyright Copyright 2010, Playwell Inc.
 * @license   http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace radium\errors;

use \ErrorException;

/**
 * データが見つからないエラー
 */
final class NotFoundError extends ErrorException
{
	public function __construct($message = null, $code = 0)
	{
		parent::__construct($message, $code);
	}
}