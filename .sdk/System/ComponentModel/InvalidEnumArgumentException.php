<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InvalidEnumArgumentExceptionOverride {
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
	 * @param \System\String|string $argumentName
	 * @param \System\Int32|int $invalidValue
	 * @param \System\Type $enumClass
	 */
	#[MethodOverride]public function __construct_4 ($argumentName, $invalidValue, $enumClass){}
}
class InvalidEnumArgumentException extends \System\ArgumentException implements
	\System\Runtime\Serialization\ISerializable
{
	use InvalidEnumArgumentExceptionOverride;
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
	 * @uses InvalidEnumArgumentExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses InvalidEnumArgumentExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses InvalidEnumArgumentExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @uses InvalidEnumArgumentExceptionOverride::__construct_4 <br>public , args: ($argumentName, $invalidValue, $enumClass)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}