<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ValueTuple_5MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Equals_3($other, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function CompareTo_1($other){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($other){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function CompareTo_3($other, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetHashCode_2($comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetHashCode_3($comparer){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ValueTuple_5 extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\Collections\IStructuralEquatable,
	\System\Collections\IStructuralComparable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IValueTupleInternal,
	\System\Runtime\CompilerServices\ITuple
{
	/**
	 * @var \T1
	 * @field
	 */
	public $Item1;
	/**
	 * @var \T2
	 * @field
	 */
	public $Item2;
	/**
	 * @var \T3
	 * @field
	 */
	public $Item3;
	/**
	 * @var \T4
	 * @field
	 */
	public $Item4;
	/**
	 * @var \T5
	 * @field
	 */
	public $Item5;
	/**
	 * @uses ValueTuple_5MethodsOverride::Equals_1 ($obj)
	 * @uses ValueTuple_5MethodsOverride::Equals_2 ($other)
	 * @uses ValueTuple_5MethodsOverride::Equals_3 ($other, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses ValueTuple_5MethodsOverride::CompareTo_1 ($other)
	 * @uses ValueTuple_5MethodsOverride::CompareTo_2 ($other)
	 * @uses ValueTuple_5MethodsOverride::CompareTo_3 ($other, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses ValueTuple_5MethodsOverride::GetHashCode_1 ()
	 * @uses ValueTuple_5MethodsOverride::GetHashCode_2 ($comparer)
	 * @uses ValueTuple_5MethodsOverride::GetHashCode_3 ($comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetHashCodeCore($comparer){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToStringEnd(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Length(){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Item($index){}
}
