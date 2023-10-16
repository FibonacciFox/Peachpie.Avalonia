<?php
namespace System\Security;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SecurityExceptionMethodsOverride
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
class SecurityException extends \System\SystemException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Demanded;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $DenySetInstance;
	/**
	 * @var \System\Reflection\AssemblyName
	 * @property
	 */
	public $FailedAssemblyInfo;
	/**
	 * @var \System\String
	 * @property
	 */
	public $GrantedSet;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public $Method;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PermissionState;
	/**
	 * @var \System\Type
	 * @property
	 */
	public $PermissionType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $PermitOnlySetInstance;
	/**
	 * @var \System\String
	 * @property
	 */
	public $RefusedSet;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Url;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $TargetSite;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
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
	 * @return \System\Object|object
	 */
	public  function get_Demanded(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Demanded($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_DenySetInstance(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_DenySetInstance($value){}
	/**
	 * @return \System\Reflection\AssemblyName
	 */
	public  function get_FailedAssemblyInfo(){}
	/**
	 * @param \System\Reflection\AssemblyName $value
	 * @return \System\Void|void
	 */
	public  function set_FailedAssemblyInfo($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_GrantedSet(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_GrantedSet($value){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_Method(){}
	/**
	 * @param \System\Reflection\MethodInfo $value
	 * @return \System\Void|void
	 */
	public  function set_Method($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PermissionState(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PermissionState($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_PermissionType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_PermissionType($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_PermitOnlySetInstance(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_PermitOnlySetInstance($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_RefusedSet(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_RefusedSet($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Url(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Url($value){}
	/**
	 * @uses SecurityExceptionMethodsOverride::GetType_1 ()
	 * @uses SecurityExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
