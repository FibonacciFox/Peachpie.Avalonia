<?php
namespace System\IO\Pipes;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PipeSecurityMethodsOverride
{
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
class PipeSecurity extends \System\Security\AccessControl\NativeObjectSecurity
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
	 * @uses PipeSecurityMethodsOverride::AddAccessRule_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::AddAccessRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddAccessRule(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::SetAccessRule_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::SetAccessRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAccessRule(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::ResetAccessRule_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::ResetAccessRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResetAccessRule(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::RemoveAccessRule_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::RemoveAccessRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAccessRule(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::RemoveAccessRuleSpecific_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::RemoveAccessRuleSpecific_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAccessRuleSpecific(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::AddAuditRule_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::AddAuditRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddAuditRule(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::SetAuditRule_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::SetAuditRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAuditRule(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::RemoveAuditRule_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::RemoveAuditRule_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAuditRule(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::RemoveAuditRuleAll_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::RemoveAuditRuleAll_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAuditRuleAll(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::RemoveAuditRuleSpecific_1 ($rule)
	 * @uses PipeSecurityMethodsOverride::RemoveAuditRuleSpecific_2 ($rule)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAuditRuleSpecific(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetAccessControlSectionsFromChanges(){}
	/**
	 * @uses PipeSecurityMethodsOverride::Persist_1 ($handle)
	 * @uses PipeSecurityMethodsOverride::Persist_2 ($name)
	 * @uses PipeSecurityMethodsOverride::Persist_3 ($name, $includeSections)
	 * @uses PipeSecurityMethodsOverride::Persist_4 ($name, $includeSections, $exceptionContext)
	 * @uses PipeSecurityMethodsOverride::Persist_5 ($handle, $includeSections)
	 * @uses PipeSecurityMethodsOverride::Persist_6 ($handle, $includeSections, $exceptionContext)
	 * @uses PipeSecurityMethodsOverride::Persist_7 ($enableOwnershipPrivilege, $name, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Persist(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::SetSecurityDescriptorSddlForm_1 ($sddlForm)
	 * @uses PipeSecurityMethodsOverride::SetSecurityDescriptorSddlForm_2 ($sddlForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorSddlForm(mixed ...$args){}
	/**
	 * @uses PipeSecurityMethodsOverride::SetSecurityDescriptorBinaryForm_1 ($binaryForm)
	 * @uses PipeSecurityMethodsOverride::SetSecurityDescriptorBinaryForm_2 ($binaryForm, $includeSections)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSecurityDescriptorBinaryForm(mixed ...$args){}
}
