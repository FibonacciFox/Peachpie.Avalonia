<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArgumentOutOfRangeExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $paramName
	 */
	#[MethodOverride]public function __construct_2 ($paramName){}
	/**
	 * @param \System\String|string $paramName
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_3 ($paramName, $message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_4 ($message, $innerException){}
	/**
	 * @param \System\String|string $paramName
	 * @param \System\Object|object $actualValue
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_5 ($paramName, $actualValue, $message){}
}
class ArgumentOutOfRangeException extends \System\ArgumentException implements
	\System\Runtime\Serialization\ISerializable
{
	use ArgumentOutOfRangeExceptionOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $ActualValue;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ParamName;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $TargetSite;
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
	 * @uses ArgumentOutOfRangeExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ArgumentOutOfRangeExceptionOverride::__construct_2 <br>public , args: ($paramName)<br>
	 * @uses ArgumentOutOfRangeExceptionOverride::__construct_3 <br>public , args: ($paramName, $message)<br>
	 * @uses ArgumentOutOfRangeExceptionOverride::__construct_4 <br>public , args: ($message, $innerException)<br>
	 * @uses ArgumentOutOfRangeExceptionOverride::__construct_5 <br>public , args: ($paramName, $actualValue, $message)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}