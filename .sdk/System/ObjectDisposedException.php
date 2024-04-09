<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ObjectDisposedExceptionOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Object|object $instance
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowIf_1 ($condition, $instance){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowIf_2 ($condition, $type){}
	/**
	 * @param \System\String|string $objectName
	 */
	#[MethodOverride]public function __construct_1 ($objectName){}
	/**
	 * @param \System\String|string $objectName
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($objectName, $message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_3 ($message, $innerException){}
}
class ObjectDisposedException extends \System\InvalidOperationException implements
	\System\Runtime\Serialization\ISerializable
{
	use ObjectDisposedExceptionOverride;
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
	public $ObjectName;
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
	 * @uses ObjectDisposedExceptionOverride::ThrowIf_1 <br>public , args: ($condition, $instance)<br>
	 * @uses ObjectDisposedExceptionOverride::ThrowIf_2 <br>public , args: ($condition, $type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ThrowIf (\override ...$args){}
	/**
	 * @uses ObjectDisposedExceptionOverride::__construct_1 <br>public , args: ($objectName)<br>
	 * @uses ObjectDisposedExceptionOverride::__construct_2 <br>public , args: ($objectName, $message)<br>
	 * @uses ObjectDisposedExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}