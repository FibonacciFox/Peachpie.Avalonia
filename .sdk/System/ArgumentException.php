<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArgumentExceptionOverride {
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
	 * @param \System\String|string $paramName
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_4 ($message, $paramName, $innerException){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $paramName
	 */
	#[MethodOverride]public function __construct_5 ($message, $paramName){}
}
class ArgumentException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use ArgumentExceptionOverride;
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
	private function SetMessageField(){}
	/**
	 * @param \System\String|string $argument
	 * @param \System\String|string $paramName
	 * @return \System\Void|void
	 */
	public static function ThrowIfNullOrEmpty($argument, $paramName){}
	private static function ThrowNullOrEmptyException($argument, $paramName){}
	/**
	 * @uses ArgumentExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ArgumentExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses ArgumentExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @uses ArgumentExceptionOverride::__construct_4 <br>public , args: ($message, $paramName, $innerException)<br>
	 * @uses ArgumentExceptionOverride::__construct_5 <br>public , args: ($message, $paramName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}