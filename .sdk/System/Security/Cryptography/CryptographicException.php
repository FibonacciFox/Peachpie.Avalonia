<?php
namespace System\Security\Cryptography;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CryptographicExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $hr
	 */
	#[MethodOverride]public function __construct_2 ($hr){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_3 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $inner
	 */
	#[MethodOverride]public function __construct_4 ($message, $inner){}
	/**
	 * @param \System\String|string $format
	 * @param \System\String|string $insert
	 */
	#[MethodOverride]public function __construct_5 ($format, $insert){}
}
class CryptographicException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use CryptographicExceptionOverride;

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
	 * @uses CryptographicExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses CryptographicExceptionOverride::__construct_2 <br>public , args: ($hr)<br>
	 * @uses CryptographicExceptionOverride::__construct_3 <br>public , args: ($message)<br>
	 * @uses CryptographicExceptionOverride::__construct_4 <br>public , args: ($message, $inner)<br>
	 * @uses CryptographicExceptionOverride::__construct_5 <br>public , args: ($format, $insert)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}