<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileLoadExceptionMethodsOverride
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
class FileLoadException extends \System\IO\IOException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FileName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FusionLog;
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
	 * @param \System\String|string $fileName
	 * @param \System\Int32|int $hResult
	 * @return \System\String|string
	 */
	protected static function FormatFileLoadExceptionMessage($fileName, $hResult){}
	/**
	 * @param \System\Int32|int $hResult
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFileLoadExceptionMessage($hResult, $retString){}
	/**
	 * @param \System\Int32|int $hresult
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMessageForHR($hresult, $retString){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FileName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FusionLog(){}
	/**
	 * @uses FileLoadExceptionMethodsOverride::GetType_1 ()
	 * @uses FileLoadExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
