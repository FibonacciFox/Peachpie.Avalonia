<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MemberInfoCache_1Override {
	/**
	 * @deprecated
	 * @param \System\RuntimeType+RuntimeTypeCache+Filter $filter
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeType+ListBuilder_1 $list [generic: System\Reflection\RuntimeFieldInfo]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function PopulateRtFields_1 ($filter, $declaringType, $list){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType+RuntimeTypeCache+Filter $filter
	 * @param \System\IntPtr* $ppFieldHandles
	 * @param \System\Int32|int $count
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeType+ListBuilder_1 $list [generic: System\Reflection\RuntimeFieldInfo]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function PopulateRtFields_2 ($filter, $ppFieldHandles, $count, $declaringType, $list){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType+RuntimeTypeCache+Filter $filter
	 * @return \System\Reflection\RuntimeEventInfo
	 */
	#[MethodOverride]private function PopulateEvents_1 ($filter){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType+RuntimeTypeCache+Filter $filter
	 * @param \System\RuntimeType $declaringType
	 * @param \System\Collections\Generic\Dictionary_2 $csEventInfos [generic: System\String,System\Reflection\RuntimeEventInfo]
	 * @param \System\RuntimeType+ListBuilder_1 $list [generic: System\Reflection\RuntimeEventInfo]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function PopulateEvents_2 ($filter, $declaringType, $csEventInfos, $list){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType+RuntimeTypeCache+Filter $filter
	 * @return \System\Reflection\RuntimePropertyInfo
	 */
	#[MethodOverride]private function PopulateProperties_1 ($filter){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType+RuntimeTypeCache+Filter $filter
	 * @param \System\RuntimeType $declaringType
	 * @param \System\Collections\Generic\Dictionary_2 $csPropertyInfos [generic: System\String,System\Collections\Generic\List_1[System\Reflection\RuntimePropertyInfo]
	 * @param \System\Span_1 $usedSlots [generic: System\Boolean]
	 * @param \System\Boolean|bool $isInterface
	 * @param \System\RuntimeType+ListBuilder_1 $list [generic: System\Reflection\RuntimePropertyInfo]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function PopulateProperties_2 ($filter, $declaringType, $csPropertyInfos, $usedSlots, $isInterface, $list){}
}
final class MemberInfoCache_1 extends \System\Object
{
	use MemberInfoCache_1Override;


	/**
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\RuntimeType+RuntimeTypeCache+CacheType $cacheType
	 * @return \System\Reflection\MethodBase
	 */
	protected function AddMethod($declaringType, $method, $cacheType){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\Reflection\FieldInfo
	 */
	protected function AddField($field){}
	private function Populate($name, $listType, $cacheType){}
	private function GetListByName($pName, $cNameLen, $pUtf8Name, $cUtf8Name, $listType, $cacheType){}
	/**
	 * @param \T $list
	 * @param \System\String|string $name
	 * @param \System\RuntimeType+MemberListType $listType
	 * @return \System\Void|void
	 */
	protected function Insert($list, $name, $listType){}
	private function MergeWithGlobalListInOrder($list){}
	private function MergeWithGlobalList($list){}
	private function PopulateMethods($filter){}
	private function PopulateConstructors($filter){}
	private function PopulateFields($filter){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses MemberInfoCache_1Override::PopulateRtFields_1 <br>private , args: ($filter, $declaringType, $list)<br>
	 * @uses MemberInfoCache_1Override::PopulateRtFields_2 <br>private , args: ($filter, $ppFieldHandles, $count, $declaringType, $list)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function PopulateRtFields (\override ...$args){}
	private function PopulateLiteralFields($filter, $declaringType, $list){}
	private function AddSpecialInterface($list, $filter, $iList, $addSubInterface){}
	private function PopulateInterfaces($filter){}
	private function PopulateNestedClasses($filter){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses MemberInfoCache_1Override::PopulateEvents_1 <br>private , args: ($filter)<br>
	 * @uses MemberInfoCache_1Override::PopulateEvents_2 <br>private , args: ($filter, $declaringType, $csEventInfos, $list)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\RuntimeEventInfo|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function PopulateEvents (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses MemberInfoCache_1Override::PopulateProperties_1 <br>private , args: ($filter)<br>
	 * @uses MemberInfoCache_1Override::PopulateProperties_2 <br>private , args: ($filter, $declaringType, $csPropertyInfos, $usedSlots, $isInterface, $list)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\RuntimePropertyInfo|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function PopulateProperties (\override ...$args){}
	/**
	 * @param \System\RuntimeType+MemberListType $listType
	 * @param \System\String|string $name
	 * @param \System\RuntimeType+RuntimeTypeCache+CacheType $cacheType
	 * @return \T[]
	 */
	protected function GetMemberList($listType, $name, $cacheType){}
}