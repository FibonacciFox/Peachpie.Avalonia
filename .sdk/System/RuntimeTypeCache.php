<?php
namespace System;
final class RuntimeTypeCache extends \System\Object
{


	private function ConstructName($name, $formatFlags){}
	private function GetMemberList($m_cache, $listType, $name, $cacheType){}
	private function GetMemberCache($m_cache){}
	/**
	 * @param \System\TypeNameKind $kind
	 * @return \System\String|string
	 */
	protected function GetName($kind){}
	/**
	 * @return \System\String|string
	 */
	protected function GetNameSpace(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected function GetEnclosingType(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected function GetRuntimeType(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateCachedNestedType(){}
	/**
	 * @return \System\String|string
	 */
	protected function GetDefaultMemberName(){}
	/**
	 * @return \System\Object[]|array
	 */
	protected function GetEmptyArray(){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $genericMethod
	 * @return \System\Reflection\MethodInfo
	 */
	protected function GetGenericMethodInfo($genericMethod){}
	/**
	 * @param \System\RuntimeType+MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimeMethodInfo[]
	 */
	protected function GetMethodList($listType, $name){}
	/**
	 * @param \System\RuntimeType+MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimeConstructorInfo[]
	 */
	protected function GetConstructorList($listType, $name){}
	/**
	 * @param \System\RuntimeType+MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimePropertyInfo[]
	 */
	protected function GetPropertyList($listType, $name){}
	/**
	 * @param \System\RuntimeType+MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimeEventInfo[]
	 */
	protected function GetEventList($listType, $name){}
	/**
	 * @param \System\RuntimeType+MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\Reflection\RuntimeFieldInfo[]
	 */
	protected function GetFieldList($listType, $name){}
	/**
	 * @param \System\RuntimeType+MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\RuntimeType[]
	 */
	protected function GetInterfaceList($listType, $name){}
	/**
	 * @param \System\RuntimeType+MemberListType $listType
	 * @param \System\String|string $name
	 * @return \System\RuntimeType[]
	 */
	protected function GetNestedTypeList($listType, $name){}
	/**
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Reflection\MethodBase
	 */
	protected function GetMethod($declaringType, $method){}
	/**
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeMethodHandleInternal $constructor
	 * @return \System\Reflection\MethodBase
	 */
	protected function GetConstructor($declaringType, $constructor){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\Reflection\FieldInfo
	 */
	protected function GetField($field){}
}