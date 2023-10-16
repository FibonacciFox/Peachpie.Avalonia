<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SRMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function Format_1($resourceFormat, $p1){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function Format_2($resourceFormat, $p1, $p2){}
}
/**
 */
class SR extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UsingResourceKeys(){}
	/**
	 * @param \System\String|string $resourceKey
	 * @return \System\String|string
	 */
	protected static function GetResourceString($resourceKey){}
	/**
	 * @uses SRMethodsOverride::Format_1 ($resourceFormat, $p1)
	 * @uses SRMethodsOverride::Format_2 ($resourceFormat, $p1, $p2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Format(mixed ...$args){}
	/**
	 * @return \System\Resources\ResourceManager
	 */
	protected static function get_ResourceManager(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_AclTooLong(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_InvalidAccessRuleType(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_InvalidAuditRuleType(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_InvalidOwner(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_InvalidGroup(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_InvalidHandle(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_InvalidSecurityDescriptorRevision(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_InvalidSecurityDescriptorSelfRelativeForm(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_InvalidSidInSDDLString(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_MustSpecifyContainerAcl(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_MustSpecifyDirectoryObjectAcl(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_MustSpecifyLeafObjectAcl(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_MustSpecifyNonDirectoryObjectAcl(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_NoAssociatedSecurity(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_AccessControl_UnexpectedError(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Arg_EnumAtLeastOneFlag(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Arg_EnumIllegalVal(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Arg_InvalidOperationException(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Arg_MustBeIdentityReferenceType(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Argument_ArgumentZero(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Argument_InvalidAnyFlag(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Argument_InvalidEnumValue(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Argument_InvalidName(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Argument_InvalidPrivilegeName(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Argument_InvalidSafeHandle(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentException_InvalidAceBinaryForm(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentException_InvalidAclBinaryForm(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentException_InvalidSDSddlForm(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentOutOfRange_ArrayLength(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentOutOfRange_ArrayLengthMultiple(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentOutOfRange_ArrayTooSmall(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentOutOfRange_Enum(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentOutOfRange_InvalidUserDefinedAceType(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_ArgumentOutOfRange_NeedNonNegNum(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_InvalidOperation_ModificationOfNonCanonicalAcl(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_InvalidOperation_MustBeSameThread(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_InvalidOperation_MustLockForReadOrWrite(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_InvalidOperation_MustLockForWrite(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_InvalidOperation_MustRevertPrivilege(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_InvalidOperation_NoSecurityDescriptor(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_InvalidOperation_OnlyValidForDS(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_InvalidOperation_DisconnectedPipe(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_NotSupported_SetMethod(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_PrivilegeNotHeld_Default(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_PrivilegeNotHeld_Named(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_Rank_MultiDimNotSupported(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
