<?php
namespace System;
/**
 */
class RuntimeTypeCache extends \System\Object
{
	/**
	 * @param \System\String& $name
	 * @param \System\TypeNameFormatFlags $formatFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConstructName($name, $formatFlags){}
	/**
	 * @param \System\MemberInfoCache_1& $m_cache
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @param \System\CacheType $cacheType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMemberList($m_cache, $listType, $name, $cacheType){}
	/**
	 * @param \System\MemberInfoCache_1& $m_cache
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMemberCache($m_cache){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_GenericCache(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function set_GenericCache($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_DomainInitialized(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_DomainInitialized($value){}
	/**
	 * @param \System\TypeNameKind $kind
	 * @return \System\String|string
	 */
	protected  function GetName($kind){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetNameSpace(){}
	/**
	 * @return \System\TypeCode
	 */
	protected  function get_TypeCode(){}
	/**
	 * @param \System\TypeCode $value
	 * @return \System\Void|void
	 */
	protected  function set_TypeCode($value){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetEnclosingType(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetRuntimeType(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsGlobal(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsNullableOfT(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateCachedNestedType(){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetDefaultMemberName(){}
	/**
	 * @return \System\Object[]
	 */
	protected  function GetEmptyArray(){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $genericMethod
	 * @return \System\Reflection\MethodInfo
	 */
	protected  function GetGenericMethodInfo($genericMethod){}
	/**
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimeMethodInfo[]
	 */
	protected  function GetMethodList($listType, $name){}
	/**
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimeConstructorInfo[]
	 */
	protected  function GetConstructorList($listType, $name){}
	/**
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimePropertyInfo[]
	 */
	protected  function GetPropertyList($listType, $name){}
	/**
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimeEventInfo[]
	 */
	protected  function GetEventList($listType, $name){}
	/**
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimeFieldInfo[]
	 */
	protected  function GetFieldList($listType, $name){}
	/**
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\RuntimeType[]
	 */
	protected  function GetInterfaceList($listType, $name){}
	/**
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\RuntimeType[]
	 */
	protected  function GetNestedTypeList($listType, $name){}
	/**
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Reflection\MethodBase
	 */
	protected  function GetMethod($declaringType, $method){}
	/**
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeMethodHandleInternal $constructor
	 * @return \System\Reflection\MethodBase
	 */
	protected  function GetConstructor($declaringType, $constructor){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\Reflection\FieldInfo
	 */
	protected  function GetField($field){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
