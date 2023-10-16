<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Tuple_1MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Equals_2($other, $comparer){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Equals_3($other, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function CompareTo_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function CompareTo_2($other, $comparer){}
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
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetHashCode_4($comparer){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ToString_2($sb){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ToString_3($sb){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Tuple_1 extends \System\Object implements 
	\System\Collections\IStructuralEquatable,
	\System\Collections\IStructuralComparable,
	\System\IComparable,
	\System\ITupleInternal,
	\System\Runtime\CompilerServices\ITuple
{
	/**
	 * @var \T1
	 * @property
	 */
	public readonly $Item1;
	/**
	 * @return \System\T1
	 */
	public  function get_Item1(){}
	/**
	 * @uses Tuple_1MethodsOverride::Equals_1 ($obj)
	 * @uses Tuple_1MethodsOverride::Equals_2 ($other, $comparer)
	 * @uses Tuple_1MethodsOverride::Equals_3 ($other, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses Tuple_1MethodsOverride::CompareTo_1 ($obj)
	 * @uses Tuple_1MethodsOverride::CompareTo_2 ($other, $comparer)
	 * @uses Tuple_1MethodsOverride::CompareTo_3 ($other, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses Tuple_1MethodsOverride::GetHashCode_1 ()
	 * @uses Tuple_1MethodsOverride::GetHashCode_2 ($comparer)
	 * @uses Tuple_1MethodsOverride::GetHashCode_3 ($comparer)
	 * @uses Tuple_1MethodsOverride::GetHashCode_4 ($comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @uses Tuple_1MethodsOverride::ToString_1 ()
	 * @uses Tuple_1MethodsOverride::ToString_2 ($sb)
	 * @uses Tuple_1MethodsOverride::ToString_3 ($sb)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
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
