<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DecoderFallbackExceptionOverride {
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
	 * @param \System\Byte $bytesUnknown
	 * @param \System\Int32|int $index
	 */
	#[MethodOverride]public function __construct_4 ($message, $bytesUnknown, $index){}
}
final class DecoderFallbackException extends \System\ArgumentException implements
	\System\Runtime\Serialization\ISerializable
{
	use DecoderFallbackExceptionOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Byte[]
	 * @since readonly
	 */
	public $BytesUnknown;
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
	 * @uses DecoderFallbackExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DecoderFallbackExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses DecoderFallbackExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @uses DecoderFallbackExceptionOverride::__construct_4 <br>public , args: ($message, $bytesUnknown, $index)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}