<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArgumentNullExceptionOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $argument
	 * @param \System\String|string $paramName
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowIfNull_1 ($argument, $paramName){}
	/**
	 * @deprecated
	 * @param \System\Void* $argument
	 * @param \System\String|string $paramName
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowIfNull_2 ($argument, $paramName){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $argument
	 * @param \System\String|string $paramName
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowIfNull_3 ($argument, $paramName){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $paramName
	 */
	#[MethodOverride]public function __construct_2 ($paramName){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_3 ($message, $innerException){}
	/**
	 * @param \System\String|string $paramName
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_4 ($paramName, $message){}
}
class ArgumentNullException extends \System\ArgumentException implements
	\System\Runtime\Serialization\ISerializable
{
	use ArgumentNullExceptionOverride;

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
	/**
	 * @uses ArgumentNullExceptionOverride::ThrowIfNull_1 <br>public , args: ($argument, $paramName)<br>
	 * @uses ArgumentNullExceptionOverride::ThrowIfNull_2 <br>public , args: ($argument, $paramName)<br>
	 * @uses ArgumentNullExceptionOverride::ThrowIfNull_3 <br>protected , args: ($argument, $paramName)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ThrowIfNull (\override ...$args){}
	/**
	 * @param \System\String|string $paramName
	 * @return \System\Void|void
	 */
	protected static function Throw($paramName){}
	/**
	 * @uses ArgumentNullExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ArgumentNullExceptionOverride::__construct_2 <br>public , args: ($paramName)<br>
	 * @uses ArgumentNullExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @uses ArgumentNullExceptionOverride::__construct_4 <br>public , args: ($paramName, $message)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}