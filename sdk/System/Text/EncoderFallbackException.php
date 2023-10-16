<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncoderFallbackExceptionMethodsOverride
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
class EncoderFallbackException extends \System\ArgumentException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\Char
	 * @property
	 */
	public readonly $CharUnknown;
	/**
	 * @var \System\Char
	 * @property
	 */
	public readonly $CharUnknownHigh;
	/**
	 * @var \System\Char
	 * @property
	 */
	public readonly $CharUnknownLow;
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
	 * @return \System\Char
	 */
	public  function get_CharUnknown(){}
	/**
	 * @return \System\Char
	 */
	public  function get_CharUnknownHigh(){}
	/**
	 * @return \System\Char
	 */
	public  function get_CharUnknownLow(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Index(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsUnknownSurrogate(){}
	/**
	 * @uses EncoderFallbackExceptionMethodsOverride::GetType_1 ()
	 * @uses EncoderFallbackExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
