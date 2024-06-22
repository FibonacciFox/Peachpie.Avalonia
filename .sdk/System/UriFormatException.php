<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UriFormatExceptionOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Serialization\SerializationInfo $serializationInfo
	 * @param \System\Runtime\Serialization\StreamingContext $streamingContext
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function GetObjectData_1 ($serializationInfo, $streamingContext){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $textString
	 */
	#[MethodOverride]public function __construct_2 ($textString){}
	/**
	 * @param \System\String|string $textString
	 * @param \System\Exception $e
	 */
	#[MethodOverride]public function __construct_3 ($textString, $e){}
}
class UriFormatException extends \System\FormatException implements
	\System\Runtime\Serialization\ISerializable
{
	use UriFormatExceptionOverride;

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
	 * @uses UriFormatExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses UriFormatExceptionOverride::__construct_2 <br>public , args: ($textString)<br>
	 * @uses UriFormatExceptionOverride::__construct_3 <br>public , args: ($textString, $e)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}