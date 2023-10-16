<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MemberInfoCache_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function PopulateRtFields_1($filter, $declaringType, $list){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function PopulateRtFields_2($filter, $ppFieldHandles, $count, $declaringType, $list){}
	/**
	 * @return \System\Reflection\RuntimeEventInfo[]
	 */
	#[MethodOverride] private  function PopulateEvents_1($filter){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function PopulateEvents_2($filter, $declaringType, $csEventInfos, $list){}
	/**
	 * @return \System\Reflection\RuntimePropertyInfo[]
	 */
	#[MethodOverride] private  function PopulateProperties_1($filter){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function PopulateProperties_2($filter, $declaringType, $csPropertyInfos, $usedSlots, $isInterface, $list){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class MemberInfoCache_1 extends \System\Object
{
	/**
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\CacheType $cacheType
	 * @return \System\Reflection\MethodBase
	 */
	protected  function AddMethod($declaringType, $method, $cacheType){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\Reflection\FieldInfo
	 */
	protected  function AddField($field){}
	/**
	 * @param \System\String|string $name
	 * @param \System\MemberListType $listType
	 * @param \System\CacheType $cacheType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Populate($name, $listType, $cacheType){}
	/**
	 * @param \System\Char* $pName
	 * @param \System\Int32|int $cNameLen
	 * @param \System\Byte* $pUtf8Name
	 * @param \System\Int32|int $cUtf8Name
	 * @param \System\MemberListType $listType
	 * @param \System\CacheType $cacheType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetListByName($pName, $cNameLen, $pUtf8Name, $cUtf8Name, $listType, $cacheType){}
	/**
	 * @param \System\T[]& $list
	 * @param \System\String|string $name
	 * @param \System\MemberListType $listType
	 * @return \System\Void|void
	 */
	protected  function Insert($list, $name, $listType){}
	/**
	 * @param \System\T[] $list
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MergeWithGlobalListInOrder($list){}
	/**
	 * @param \System\T[] $list
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MergeWithGlobalList($list){}
	/**
	 * @param \System\Filter $filter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateMethods($filter){}
	/**
	 * @param \System\Filter $filter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateConstructors($filter){}
	/**
	 * @param \System\Filter $filter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateFields($filter){}
	/**
	 * @uses MemberInfoCache_1MethodsOverride::PopulateRtFields_1 ($filter, $declaringType, $list)
	 * @uses MemberInfoCache_1MethodsOverride::PopulateRtFields_2 ($filter, $ppFieldHandles, $count, $declaringType, $list)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PopulateRtFields(mixed ...$args){}
	/**
	 * @param \System\Filter $filter
	 * @param \System\RuntimeType $declaringType
	 * @param \System\ListBuilder_1& $list
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateLiteralFields($filter, $declaringType, $list){}
	/**
	 * @param \System\ListBuilder_1& $list
	 * @param \System\Filter $filter
	 * @param \System\RuntimeType $iList
	 * @param \System\Boolean $addSubInterface
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddSpecialInterface($list, $filter, $iList, $addSubInterface){}
	/**
	 * @param \System\Filter $filter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateInterfaces($filter){}
	/**
	 * @param \System\Filter $filter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateNestedClasses($filter){}
	/**
	 * @uses MemberInfoCache_1MethodsOverride::PopulateEvents_1 ($filter)
	 * @uses MemberInfoCache_1MethodsOverride::PopulateEvents_2 ($filter, $declaringType, $csEventInfos, $list)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PopulateEvents(mixed ...$args){}
	/**
	 * @uses MemberInfoCache_1MethodsOverride::PopulateProperties_1 ($filter)
	 * @uses MemberInfoCache_1MethodsOverride::PopulateProperties_2 ($filter, $declaringType, $csPropertyInfos, $usedSlots, $isInterface, $list)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PopulateProperties(mixed ...$args){}
	/**
	 * @param \System\MemberListType $listType
	 * @param \System\String|string $name
	 * @param \System\CacheType $cacheType
	 * @return \System\T[]
	 */
	protected  function GetMemberList($listType, $name, $cacheType){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function get_ReflectedType(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
