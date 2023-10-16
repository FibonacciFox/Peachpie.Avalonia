<?php
namespace System\Runtime\CompilerServices;
/**
 */
class MethodTable extends \System\ValueType
{
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $ComponentSize;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $BaseSize;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $InterfaceCount;
	/**
	 * @var \System\Runtime\CompilerServices\MethodTable*
	 * @field
	 */
	public $ParentMethodTable;
	/**
	 * @var \System\Void*
	 * @field
	 */
	public $ElementType;
	/**
	 * @var \System\Runtime\CompilerServices\MethodTable**
	 * @field
	 */
	public $InterfaceMap;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasComponentSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ContainsGCPointers;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NonTrivialInterfaceCast;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasTypeEquivalence;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMultiDimensionalArray;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MultiDimensionalArrayRank;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsValueType;
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasComponentSize(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ContainsGCPointers(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_NonTrivialInterfaceCast(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasTypeEquivalence(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMultiDimensionalArray(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MultiDimensionalArrayRank(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsValueType(){}
	/**
	 * @return \System\Runtime\CompilerServices\TypeHandle
	 */
	public  function GetArrayElementTypeHandle(){}
	/**
	 * @return \System\UInt32
	 */
	public  function GetNumInstanceFieldBytes(){}
}
