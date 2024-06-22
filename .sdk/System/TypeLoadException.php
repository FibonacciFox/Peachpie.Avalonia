<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeLoadExceptionOverride {
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
}
class TypeLoadException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use TypeLoadExceptionOverride;

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
	public $TypeName;
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
	private static function GetTypeLoadExceptionMessage($resourceId, $retString){}
	/**
	 * @uses TypeLoadExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TypeLoadExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses TypeLoadExceptionOverride::__construct_3 <br>public , args: ($message, $inner)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}