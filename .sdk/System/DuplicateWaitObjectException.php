<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DuplicateWaitObjectExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $parameterName
	 */
	#[MethodOverride]public function __construct_2 ($parameterName){}
	/**
	 * @param \System\String|string $parameterName
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_3 ($parameterName, $message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_4 ($message, $innerException){}
}
class DuplicateWaitObjectException extends \System\ArgumentException implements
	\System\Runtime\Serialization\ISerializable
{
	use DuplicateWaitObjectExceptionOverride;
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
	 * @uses DuplicateWaitObjectExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DuplicateWaitObjectExceptionOverride::__construct_2 <br>public , args: ($parameterName)<br>
	 * @uses DuplicateWaitObjectExceptionOverride::__construct_3 <br>public , args: ($parameterName, $message)<br>
	 * @uses DuplicateWaitObjectExceptionOverride::__construct_4 <br>public , args: ($message, $innerException)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}