<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InvalidCastExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_3 ($message, $innerException){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Int32|int $errorCode
	 */
	#[MethodOverride]public function __construct_4 ($message, $errorCode){}
}
class InvalidCastException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use InvalidCastExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $TargetSite;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Collections\IDictionary
	 * @since readonly
	 */
	public $Data;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $InnerException;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $HelpLink;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $HResult;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StackTrace;
	/**
	 * @uses InvalidCastExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses InvalidCastExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses InvalidCastExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @uses InvalidCastExceptionOverride::__construct_4 <br>public , args: ($message, $errorCode)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}