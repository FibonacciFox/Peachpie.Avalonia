<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ObjectSecurity_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_1($handle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_2($name){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_3($name, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_4($name, $includeSections, $exceptionContext){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_5($handle, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_6($handle, $includeSections, $exceptionContext){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Persist_7($enableOwnershipPrivilege, $name, $includeSections){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAccessRule_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddAccessRule_2($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetAccessRule_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAccessRule_2($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ResetAccessRule_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ResetAccessRule_2($rule){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function RemoveAccessRule_1($rule){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function RemoveAccessRule_2($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAccessRuleAll_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RemoveAccessRuleAll_2($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAccessRuleSpecific_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RemoveAccessRuleSpecific_2($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAuditRule_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddAuditRule_2($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetAuditRule_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAuditRule_2($rule){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function RemoveAuditRule_1($rule){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function RemoveAuditRule_2($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAuditRuleAll_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RemoveAuditRuleAll_2($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAuditRuleSpecific_1($rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RemoveAuditRuleSpecific_2($rule){}
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
 * @deprecated this element should not be used by you because it will break your program
 */
class ObjectSecurity_1 extends \System\Security\AccessControl\NativeObjectSecurity
{
	/**
	 * @var \System\Security\AccessControl\CommonSecurityDescriptor
	 * @field
	 */
	protected readonly $_securityDescriptor;
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetAccessControlSectionsFromChanges(){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::Persist_1 ($handle)
	 * @uses ObjectSecurity_1MethodsOverride::Persist_2 ($name)
	 * @uses ObjectSecurity_1MethodsOverride::Persist_3 ($name, $includeSections)
	 * @uses ObjectSecurity_1MethodsOverride::Persist_4 ($name, $includeSections, $exceptionContext)
	 * @uses ObjectSecurity_1MethodsOverride::Persist_5 ($handle, $includeSections)
	 * @uses ObjectSecurity_1MethodsOverride::Persist_6 ($handle, $includeSections, $exceptionContext)
	 * @uses ObjectSecurity_1MethodsOverride::Persist_7 ($enableOwnershipPrivilege, $name, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Persist(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::AddAccessRule_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::AddAccessRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddAccessRule(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::SetAccessRule_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::SetAccessRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAccessRule(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::ResetAccessRule_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::ResetAccessRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResetAccessRule(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAccessRule_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAccessRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAccessRule(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAccessRuleAll_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAccessRuleAll_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAccessRuleAll(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAccessRuleSpecific_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAccessRuleSpecific_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAccessRuleSpecific(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::AddAuditRule_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::AddAuditRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddAuditRule(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::SetAuditRule_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::SetAuditRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAuditRule(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAuditRule_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAuditRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAuditRule(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAuditRuleAll_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAuditRuleAll_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAuditRuleAll(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAuditRuleSpecific_1 ($rule)
	 * @uses ObjectSecurity_1MethodsOverride::RemoveAuditRuleSpecific_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAuditRuleSpecific(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::SetSecurityDescriptorSddlForm_1 ($sddlForm)
	 * @uses ObjectSecurity_1MethodsOverride::SetSecurityDescriptorSddlForm_2 ($sddlForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorSddlForm(mixed ...$args){}
	/**
	 * @uses ObjectSecurity_1MethodsOverride::SetSecurityDescriptorBinaryForm_1 ($binaryForm)
	 * @uses ObjectSecurity_1MethodsOverride::SetSecurityDescriptorBinaryForm_2 ($binaryForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorBinaryForm(mixed ...$args){}
}
