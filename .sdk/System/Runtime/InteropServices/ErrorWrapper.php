<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CULongOverride {
	/**
	 * @param \System\Int32|int $errorCode
	 */
	#[MethodOverride]public function __construct_1 ($errorCode){}
	/**
	 * @param \System\Object|object $errorCode
	 */
	#[MethodOverride]public function __construct_2 ($errorCode){}
	/**
	 * @param \System\Exception $e
	 */
	#[MethodOverride]public function __construct_3 ($e){}
}
final class ErrorWrapper extends \System\Object
{
	use CULongOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ErrorCode;
	/**
	 * @uses ErrorWrapperOverride::__construct_1 <br>public , args: ($errorCode)<br>
	 * @uses ErrorWrapperOverride::__construct_2 <br>public , args: ($errorCode)<br>
	 * @uses ErrorWrapperOverride::__construct_3 <br>public , args: ($e)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}