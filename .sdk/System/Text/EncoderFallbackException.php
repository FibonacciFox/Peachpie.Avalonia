<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncoderFallbackExceptionOverride {
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
}
final class EncoderFallbackException extends \System\ArgumentException implements
	\System\Runtime\Serialization\ISerializable
{
	use EncoderFallbackExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Char
	 * @since readonly
	 */
	public $CharUnknown;
	/**
	 * @property
	 * @var \System\Char
	 * @since readonly
	 */
	public $CharUnknownHigh;
	/**
	 * @property
	 * @var \System\Char
	 * @since readonly
	 */
	public $CharUnknownLow;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Index;
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
	 * @return \System\Boolean|bool
	 */
	public function IsUnknownSurrogate(){}
	/**
	 * @uses EncoderFallbackExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses EncoderFallbackExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses EncoderFallbackExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}