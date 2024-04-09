<?php
namespace System\Runtime\CompilerServices;
final class MethodTable extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $ComponentSize;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	public $BaseSize;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $InterfaceCount;
	/**
	 * @field
	 * @var \System\Runtime\CompilerServices\MethodTable*
	 */
	public $ParentMethodTable;
	/**
	 * @field
	 * @var \System\Void*
	 */
	public $ElementType;
	/**
	 * @field
	 * @var \System\Runtime\CompilerServices\MethodTable**
	 */
	public $InterfaceMap;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasComponentSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ContainsGCPointers;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $NonTrivialInterfaceCast;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasTypeEquivalence;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMultiDimensionalArray;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MultiDimensionalArrayRank;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueType;
	/**
	 * @return \System\Runtime\CompilerServices\TypeHandle
	 */
	public function GetArrayElementTypeHandle(){}
	/**
	 * @return \System\UInt32
	 */
	public function GetNumInstanceFieldBytes(){}
}