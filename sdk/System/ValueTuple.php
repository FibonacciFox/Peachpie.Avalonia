<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ValueTupleMethodsOverride
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
	/**
	 * @return \System\ValueTuple
	 */
	#[MethodOverride] public static function Create_1(){}
	/**
	 * @return \System\ValueTuple_1
	 */
	#[MethodOverride] public static function Create_2($item1){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function Create_3($item1, $item2){}
	/**
	 * @return \System\ValueTuple_3
	 */
	#[MethodOverride] public static function Create_4($item1, $item2, $item3){}
	/**
	 * @return \System\ValueTuple_4
	 */
	#[MethodOverride] public static function Create_5($item1, $item2, $item3, $item4){}
	/**
	 * @return \System\ValueTuple_5
	 */
	#[MethodOverride] public static function Create_6($item1, $item2, $item3, $item4, $item5){}
	/**
	 * @return \System\ValueTuple_6
	 */
	#[MethodOverride] public static function Create_7($item1, $item2, $item3, $item4, $item5, $item6){}
	/**
	 * @return \System\ValueTuple_7
	 */
	#[MethodOverride] public static function Create_8($item1, $item2, $item3, $item4, $item5, $item6, $item7){}
	/**
	 * @return \System\ValueTuple_8
	 */
	#[MethodOverride] public static function Create_9($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8){}
}
/**
 */
class ValueTuple extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\Collections\IStructuralEquatable,
	\System\Collections\IStructuralComparable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IValueTupleInternal,
	\System\Runtime\CompilerServices\ITuple
{
	/**
	 * @uses ValueTupleMethodsOverride::Equals_1 ($obj)
	 * @uses ValueTupleMethodsOverride::Equals_2 ($other)
	 * @uses ValueTupleMethodsOverride::Equals_3 ($other, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses ValueTupleMethodsOverride::CompareTo_1 ($other)
	 * @uses ValueTupleMethodsOverride::CompareTo_2 ($other)
	 * @uses ValueTupleMethodsOverride::CompareTo_3 ($other, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses ValueTupleMethodsOverride::GetHashCode_1 ()
	 * @uses ValueTupleMethodsOverride::GetHashCode_2 ($comparer)
	 * @uses ValueTupleMethodsOverride::GetHashCode_3 ($comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
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
	/**
	 * @uses ValueTupleMethodsOverride::Create_1 ()
	 * @uses ValueTupleMethodsOverride::Create_2 ($item1)
	 * @uses ValueTupleMethodsOverride::Create_3 ($item1, $item2)
	 * @uses ValueTupleMethodsOverride::Create_4 ($item1, $item2, $item3)
	 * @uses ValueTupleMethodsOverride::Create_5 ($item1, $item2, $item3, $item4)
	 * @uses ValueTupleMethodsOverride::Create_6 ($item1, $item2, $item3, $item4, $item5)
	 * @uses ValueTupleMethodsOverride::Create_7 ($item1, $item2, $item3, $item4, $item5, $item6)
	 * @uses ValueTupleMethodsOverride::Create_8 ($item1, $item2, $item3, $item4, $item5, $item6, $item7)
	 * @uses ValueTupleMethodsOverride::Create_9 ($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
}
