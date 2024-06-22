<?php
namespace System\Security;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SecurityExceptionOverride {
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
	 * @param \System\Type $type
	 */
	#[MethodOverride]public function __construct_4 ($message, $type){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Type $type
	 * @param \System\String|string $state
	 */
	#[MethodOverride]public function __construct_5 ($message, $type, $state){}
}
class SecurityException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use SecurityExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Demanded;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $DenySetInstance;
	/**
	 * @property
	 * @var \System\Reflection\AssemblyName
	 */
	public $FailedAssemblyInfo;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $GrantedSet;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 */
	public $Method;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $PermissionState;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $PermissionType;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $PermitOnlySetInstance;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $RefusedSet;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Url;
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
	 * @uses SecurityExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SecurityExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses SecurityExceptionOverride::__construct_3 <br>public , args: ($message, $inner)<br>
	 * @uses SecurityExceptionOverride::__construct_4 <br>public , args: ($message, $type)<br>
	 * @uses SecurityExceptionOverride::__construct_5 <br>public , args: ($message, $type, $state)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}