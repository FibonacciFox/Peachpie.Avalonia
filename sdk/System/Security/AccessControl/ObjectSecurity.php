<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ObjectSecurityMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_1($name, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_2($enableOwnershipPrivilege, $name, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_3($handle, $includeSections){}
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
class ObjectSecurity extends \System\Object
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
	 * @param \System\Security\AccessControl\RawSecurityDescriptor $newOne
	 * @param \System\Security\AccessControl\AccessControlSections $includeSections
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateWithNewSecurityDescriptor($newOne, $includeSections){}
	/**
	 * @return \System\Security\AccessControl\CommonSecurityDescriptor
	 */
	protected  function get_SecurityDescriptor(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ReadLock(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ReadUnlock(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function WriteLock(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function WriteUnlock(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_OwnerModified(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_OwnerModified($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_GroupModified(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_GroupModified($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_AuditRulesModified(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_AuditRulesModified($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_AccessRulesModified(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_AccessRulesModified($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsContainer(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsDS(){}
	/**
	 * @uses ObjectSecurityMethodsOverride::Persist_1 ($name, $includeSections)
	 * @uses ObjectSecurityMethodsOverride::Persist_2 ($enableOwnershipPrivilege, $name, $includeSections)
	 * @uses ObjectSecurityMethodsOverride::Persist_3 ($handle, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Persist(mixed ...$args){}
	/**
	 * @param \System\Type $targetType
	 * @return \System\Security\Principal\IdentityReference
	 */
	public  function GetOwner($targetType){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identity
	 * @return \System\Void|void
	 */
	public  function SetOwner($identity){}
	/**
	 * @param \System\Type $targetType
	 * @return \System\Security\Principal\IdentityReference
	 */
	public  function GetGroup($targetType){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identity
	 * @return \System\Void|void
	 */
	public  function SetGroup($identity){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identity
	 * @return \System\Void|void
	 */
	public  function PurgeAccessRules($identity){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identity
	 * @return \System\Void|void
	 */
	public  function PurgeAuditRules($identity){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AreAccessRulesProtected(){}
	/**
	 * @param \System\Boolean $isProtected
	 * @param \System\Boolean $preserveInheritance
	 * @return \System\Void|void
	 */
	public  function SetAccessRuleProtection($isProtected, $preserveInheritance){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AreAuditRulesProtected(){}
	/**
	 * @param \System\Boolean $isProtected
	 * @param \System\Boolean $preserveInheritance
	 * @return \System\Void|void
	 */
	public  function SetAuditRuleProtection($isProtected, $preserveInheritance){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AreAccessRulesCanonical(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AreAuditRulesCanonical(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsSddlConversionSupported(){}
	/**
	 * @param \System\Security\AccessControl\AccessControlSections $includeSections
	 * @return \System\String|string
	 */
	public  function GetSecurityDescriptorSddlForm($includeSections){}
	/**
	 * @uses ObjectSecurityMethodsOverride::SetSecurityDescriptorSddlForm_1 ($sddlForm)
	 * @uses ObjectSecurityMethodsOverride::SetSecurityDescriptorSddlForm_2 ($sddlForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorSddlForm(mixed ...$args){}
	/**
	 * @return \System\Byte[]
	 */
	public  function GetSecurityDescriptorBinaryForm(){}
	/**
	 * @uses ObjectSecurityMethodsOverride::SetSecurityDescriptorBinaryForm_1 ($binaryForm)
	 * @uses ObjectSecurityMethodsOverride::SetSecurityDescriptorBinaryForm_2 ($binaryForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorBinaryForm(mixed ...$args){}
	/**
	 * @return \System\Type
	 */
	public  function get_AccessRightType(){}
	/**
	 * @return \System\Type
	 */
	public  function get_AccessRuleType(){}
	/**
	 * @return \System\Type
	 */
	public  function get_AuditRuleType(){}
	/**
	 * @param \System\Security\AccessControl\AccessControlModification $modification
	 * @param \System\Security\AccessControl\AccessRule $rule
	 * @param \System\Boolean& $modified
	 * @return \System\Boolean
	 */
	protected  function ModifyAccess($modification, $rule, $modified){}
	/**
	 * @param \System\Security\AccessControl\AccessControlModification $modification
	 * @param \System\Security\AccessControl\AuditRule $rule
	 * @param \System\Boolean& $modified
	 * @return \System\Boolean
	 */
	protected  function ModifyAudit($modification, $rule, $modified){}
	/**
	 * @param \System\Security\AccessControl\AccessControlModification $modification
	 * @param \System\Security\AccessControl\AccessRule $rule
	 * @param \System\Boolean& $modified
	 * @return \System\Boolean
	 */
	public  function ModifyAccessRule($modification, $rule, $modified){}
	/**
	 * @param \System\Security\AccessControl\AccessControlModification $modification
	 * @param \System\Security\AccessControl\AuditRule $rule
	 * @param \System\Boolean& $modified
	 * @return \System\Boolean
	 */
	public  function ModifyAuditRule($modification, $rule, $modified){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identityReference
	 * @param \System\Int32|int $accessMask
	 * @param \System\Boolean $isInherited
	 * @param \System\Security\AccessControl\InheritanceFlags $inheritanceFlags
	 * @param \System\Security\AccessControl\PropagationFlags $propagationFlags
	 * @param \System\Security\AccessControl\AccessControlType $type
	 * @return \System\Security\AccessControl\AccessRule
	 */
	public  function AccessRuleFactory($identityReference, $accessMask, $isInherited, $inheritanceFlags, $propagationFlags, $type){}
	/**
	 * @param \System\Security\Principal\IdentityReference $identityReference
	 * @param \System\Int32|int $accessMask
	 * @param \System\Boolean $isInherited
	 * @param \System\Security\AccessControl\InheritanceFlags $inheritanceFlags
	 * @param \System\Security\AccessControl\PropagationFlags $propagationFlags
	 * @param \System\Security\AccessControl\AuditFlags $flags
	 * @return \System\Security\AccessControl\AuditRule
	 */
	public  function AuditRuleFactory($identityReference, $accessMask, $isInherited, $inheritanceFlags, $propagationFlags, $flags){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
