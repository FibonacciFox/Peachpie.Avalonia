<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Tuple_7MethodsOverride
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
class Tuple_7 extends \System\Object implements 
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
	 * @var \T2
	 * @property
	 */
	public readonly $Item2;
	/**
	 * @var \T3
	 * @property
	 */
	public readonly $Item3;
	/**
	 * @var \T4
	 * @property
	 */
	public readonly $Item4;
	/**
	 * @var \T5
	 * @property
	 */
	public readonly $Item5;
	/**
	 * @var \T6
	 * @property
	 */
	public readonly $Item6;
	/**
	 * @var \T7
	 * @property
	 */
	public readonly $Item7;
	/**
	 * @return \System\T1
	 */
	public  function get_Item1(){}
	/**
	 * @return \System\T2
	 */
	public  function get_Item2(){}
	/**
	 * @return \System\T3
	 */
	public  function get_Item3(){}
	/**
	 * @return \System\T4
	 */
	public  function get_Item4(){}
	/**
	 * @return \System\T5
	 */
	public  function get_Item5(){}
	/**
	 * @return \System\T6
	 */
	public  function get_Item6(){}
	/**
	 * @return \System\T7
	 */
	public  function get_Item7(){}
	/**
	 * @uses Tuple_7MethodsOverride::Equals_1 ($obj)
	 * @uses Tuple_7MethodsOverride::Equals_2 ($other, $comparer)
	 * @uses Tuple_7MethodsOverride::Equals_3 ($other, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses Tuple_7MethodsOverride::CompareTo_1 ($obj)
	 * @uses Tuple_7MethodsOverride::CompareTo_2 ($other, $comparer)
	 * @uses Tuple_7MethodsOverride::CompareTo_3 ($other, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses Tuple_7MethodsOverride::GetHashCode_1 ()
	 * @uses Tuple_7MethodsOverride::GetHashCode_2 ($comparer)
	 * @uses Tuple_7MethodsOverride::GetHashCode_3 ($comparer)
	 * @uses Tuple_7MethodsOverride::GetHashCode_4 ($comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @uses Tuple_7MethodsOverride::ToString_1 ()
	 * @uses Tuple_7MethodsOverride::ToString_2 ($sb)
	 * @uses Tuple_7MethodsOverride::ToString_3 ($sb)
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
