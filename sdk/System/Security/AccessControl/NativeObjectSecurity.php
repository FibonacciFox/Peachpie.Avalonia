<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativeObjectSecurityMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Persist_1($name, $handle, $includeSections, $exceptionContext){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_2($name, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_3($name, $includeSections, $exceptionContext){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_4($handle, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_5($handle, $includeSections, $exceptionContext){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_6($enableOwnershipPrivilege, $name, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetSecurityDescriptorSddlForm_1($sddlForm){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetSecurityDescriptorSddlForm_2($sddlForm, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetSecurityDescriptorBinaryForm_1($binaryForm){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetSecurityDescriptorBinaryForm_2($binaryForm, $includeSections){}
}
/**
 */
class NativeObjectSecurity extends \System\Security\AccessControl\CommonObjectSecurity
{
	/**
	 * @var \System\Security\AccessControl\CommonSecurityDescriptor
	 * @field
	 */
	protected readonly $_securityDescriptor;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	protected $OwnerModified;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	protected $GroupModified;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	protected $AuditRulesModified;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	protected $AccessRulesModified;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $AreAccessRulesProtected;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $AreAuditRulesProtected;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $AreAccessRulesCanonical;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $AreAuditRulesCanonical;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $AccessRightType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $AccessRuleType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $AuditRuleType;
	/**
	 * @param \System\Security\AccessControl\ResourceType $resourceType
	 * @param \System\Boolean $isContainer
	 * @param \System\String|string $name
	 * @param \System\Runtime\InteropServices\SafeHandle $handle
	 * @param \System\Security\AccessControl\AccessControlSections $includeSections
	 * @param \System\Boolean $createByName
	 * @param \System\Security\AccessControl\ExceptionFromErrorCode $exceptionFromErrorCode
	 * @param \System\Object|object $exceptionContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateInternal($resourceType, $isContainer, $name, $handle, $includeSections, $createByName, $exceptionFromErrorCode, $exceptionContext){}
	/**
	 * @uses NativeObjectSecurityMethodsOverride::Persist_1 ($name, $handle, $includeSections, $exceptionContext)
	 * @uses NativeObjectSecurityMethodsOverride::Persist_2 ($name, $includeSections)
	 * @uses NativeObjectSecurityMethodsOverride::Persist_3 ($name, $includeSections, $exceptionContext)
	 * @uses NativeObjectSecurityMethodsOverride::Persist_4 ($handle, $includeSections)
	 * @uses NativeObjectSecurityMethodsOverride::Persist_5 ($handle, $includeSections, $exceptionContext)
	 * @uses NativeObjectSecurityMethodsOverride::Persist_6 ($enableOwnershipPrivilege, $name, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Persist(mixed ...$args){}
	/**
	 * @uses NativeObjectSecurityMethodsOverride::SetSecurityDescriptorSddlForm_1 ($sddlForm)
	 * @uses NativeObjectSecurityMethodsOverride::SetSecurityDescriptorSddlForm_2 ($sddlForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorSddlForm(mixed ...$args){}
	/**
	 * @uses NativeObjectSecurityMethodsOverride::SetSecurityDescriptorBinaryForm_1 ($binaryForm)
	 * @uses NativeObjectSecurityMethodsOverride::SetSecurityDescriptorBinaryForm_2 ($binaryForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorBinaryForm(mixed ...$args){}
}
