<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CommonObjectSecurityMethodsOverride
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
class CommonObjectSecurity extends \System\Security\AccessControl\ObjectSecurity
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
	 * @param \System\Type $targetType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidTargetTypeStatic($targetType){}
	/**
	 * @param \System\Boolean $access
	 * @param \System\Boolean $includeExplicit
	 * @param \System\Boolean $includeInherited
	 * @param \System\Type $targetType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetRules($access, $includeExplicit, $includeInherited, $targetType){}
	/**
	 * @param \System\Security\AccessControl\CommonAce $ace
	 * @param \System\Boolean $isAccessAce
	 * @param \System\Boolean $includeExplicit
	 * @param \System\Boolean $includeInherited
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AceNeedsTranslation($ace, $isAccessAce, $includeExplicit, $includeInherited){}
	/**
	 * @param \System\Security\AccessControl\AccessRule $rule
	 * @return \System\Void|void
	 */
	protected  function AddAccessRule($rule){}
	/**
	 * @param \System\Security\AccessControl\AccessRule $rule
	 * @return \System\Void|void
	 */
	protected  function SetAccessRule($rule){}
	/**
	 * @param \System\Security\AccessControl\AccessRule $rule
	 * @return \System\Void|void
	 */
	protected  function ResetAccessRule($rule){}
	/**
	 * @param \System\Security\AccessControl\AccessRule $rule
	 * @return \System\Boolean
	 */
	protected  function RemoveAccessRule($rule){}
	/**
	 * @param \System\Security\AccessControl\AccessRule $rule
	 * @return \System\Void|void
	 */
	protected  function RemoveAccessRuleAll($rule){}
	/**
	 * @param \System\Security\AccessControl\AccessRule $rule
	 * @return \System\Void|void
	 */
	protected  function RemoveAccessRuleSpecific($rule){}
	/**
	 * @param \System\Security\AccessControl\AuditRule $rule
	 * @return \System\Void|void
	 */
	protected  function AddAuditRule($rule){}
	/**
	 * @param \System\Security\AccessControl\AuditRule $rule
	 * @return \System\Void|void
	 */
	protected  function SetAuditRule($rule){}
	/**
	 * @param \System\Security\AccessControl\AuditRule $rule
	 * @return \System\Boolean
	 */
	protected  function RemoveAuditRule($rule){}
	/**
	 * @param \System\Security\AccessControl\AuditRule $rule
	 * @return \System\Void|void
	 */
	protected  function RemoveAuditRuleAll($rule){}
	/**
	 * @param \System\Security\AccessControl\AuditRule $rule
	 * @return \System\Void|void
	 */
	protected  function RemoveAuditRuleSpecific($rule){}
	/**
	 * @param \System\Boolean $includeExplicit
	 * @param \System\Boolean $includeInherited
	 * @param \System\Type $targetType
	 * @return \System\Security\AccessControl\AuthorizationRuleCollection
	 */
	public  function GetAccessRules($includeExplicit, $includeInherited, $targetType){}
	/**
	 * @param \System\Boolean $includeExplicit
	 * @param \System\Boolean $includeInherited
	 * @param \System\Type $targetType
	 * @return \System\Security\AccessControl\AuthorizationRuleCollection
	 */
	public  function GetAuditRules($includeExplicit, $includeInherited, $targetType){}
	/**
	 * @uses CommonObjectSecurityMethodsOverride::Persist_1 ($name, $includeSections)
	 * @uses CommonObjectSecurityMethodsOverride::Persist_2 ($enableOwnershipPrivilege, $name, $includeSections)
	 * @uses CommonObjectSecurityMethodsOverride::Persist_3 ($handle, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Persist(mixed ...$args){}
	/**
	 * @uses CommonObjectSecurityMethodsOverride::SetSecurityDescriptorSddlForm_1 ($sddlForm)
	 * @uses CommonObjectSecurityMethodsOverride::SetSecurityDescriptorSddlForm_2 ($sddlForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorSddlForm(mixed ...$args){}
	/**
	 * @uses CommonObjectSecurityMethodsOverride::SetSecurityDescriptorBinaryForm_1 ($binaryForm)
	 * @uses CommonObjectSecurityMethodsOverride::SetSecurityDescriptorBinaryForm_2 ($binaryForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorBinaryForm(mixed ...$args){}
}
