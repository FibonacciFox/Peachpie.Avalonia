<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecoderFallbackExceptionMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
}
/**
 */
class DecoderFallbackException extends \System\ArgumentException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public readonly $BytesUnknown;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Index;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ParamName;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $TargetSite;
	/**
	 * @var \System\Collections\IDictionary
	 * @property
	 */
	public readonly $Data;
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $InnerException;
	/**
	 * @var \System\String
	 * @property
	 */
	public $HelpLink;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Source;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $HResult;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $StackTrace;
	/**
	 * @return \System\Byte[]
	 */
	public  function get_BytesUnknown(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Index(){}
	/**
	 * @uses DecoderFallbackExceptionMethodsOverride::GetType_1 ()
	 * @uses DecoderFallbackExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
