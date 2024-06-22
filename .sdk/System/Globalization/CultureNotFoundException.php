<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CultureNotFoundExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
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
	 * @param \System\String|string $invalidCultureName
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_5 ($paramName, $invalidCultureName, $message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $invalidCultureName
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_6 ($message, $invalidCultureName, $innerException){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Int32|int $invalidCultureId
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_7 ($message, $invalidCultureId, $innerException){}
	/**
	 * @param \System\String|string $paramName
	 * @param \System\Int32|int $invalidCultureId
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_8 ($paramName, $invalidCultureId, $message){}
}
class CultureNotFoundException extends \System\ArgumentException implements
	\System\Runtime\Serialization\ISerializable
{
	use CultureNotFoundExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Int32]
	 * @since readonly
	 */
	public $InvalidCultureId;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $InvalidCultureName;
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
	 * @uses CultureNotFoundExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses CultureNotFoundExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses CultureNotFoundExceptionOverride::__construct_3 <br>public , args: ($paramName, $message)<br>
	 * @uses CultureNotFoundExceptionOverride::__construct_4 <br>public , args: ($message, $innerException)<br>
	 * @uses CultureNotFoundExceptionOverride::__construct_5 <br>public , args: ($paramName, $invalidCultureName, $message)<br>
	 * @uses CultureNotFoundExceptionOverride::__construct_6 <br>public , args: ($message, $invalidCultureName, $innerException)<br>
	 * @uses CultureNotFoundExceptionOverride::__construct_7 <br>public , args: ($message, $invalidCultureId, $innerException)<br>
	 * @uses CultureNotFoundExceptionOverride::__construct_8 <br>public , args: ($paramName, $invalidCultureId, $message)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}