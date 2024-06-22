<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BadImageFormatExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $inner
	 */
	#[MethodOverride]public function __construct_3 ($message, $inner){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $fileName
	 */
	#[MethodOverride]public function __construct_4 ($message, $fileName){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $fileName
	 * @param \System\Exception $inner
	 */
	#[MethodOverride]public function __construct_5 ($message, $fileName, $inner){}
}
class BadImageFormatException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use BadImageFormatExceptionOverride;

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
	public $FileName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FusionLog;
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
	 * @uses BadImageFormatExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses BadImageFormatExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses BadImageFormatExceptionOverride::__construct_3 <br>public , args: ($message, $inner)<br>
	 * @uses BadImageFormatExceptionOverride::__construct_4 <br>public , args: ($message, $fileName)<br>
	 * @uses BadImageFormatExceptionOverride::__construct_5 <br>public , args: ($message, $fileName, $inner)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}