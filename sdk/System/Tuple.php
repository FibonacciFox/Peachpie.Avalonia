<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TupleMethodsOverride
{
	/**
	 * @return \System\Tuple_1
	 */
	#[MethodOverride] public static function Create_1($item1){}
	/**
	 * @return \System\Tuple_2
	 */
	#[MethodOverride] public static function Create_2($item1, $item2){}
	/**
	 * @return \System\Tuple_3
	 */
	#[MethodOverride] public static function Create_3($item1, $item2, $item3){}
	/**
	 * @return \System\Tuple_4
	 */
	#[MethodOverride] public static function Create_4($item1, $item2, $item3, $item4){}
	/**
	 * @return \System\Tuple_5
	 */
	#[MethodOverride] public static function Create_5($item1, $item2, $item3, $item4, $item5){}
	/**
	 * @return \System\Tuple_6
	 */
	#[MethodOverride] public static function Create_6($item1, $item2, $item3, $item4, $item5, $item6){}
	/**
	 * @return \System\Tuple_7
	 */
	#[MethodOverride] public static function Create_7($item1, $item2, $item3, $item4, $item5, $item6, $item7){}
	/**
	 * @return \System\Tuple_8
	 */
	#[MethodOverride] public static function Create_8($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CombineHashCodes_1($h1, $h2){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CombineHashCodes_2($h1, $h2, $h3){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CombineHashCodes_3($h1, $h2, $h3, $h4){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CombineHashCodes_4($h1, $h2, $h3, $h4, $h5){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CombineHashCodes_5($h1, $h2, $h3, $h4, $h5, $h6){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CombineHashCodes_6($h1, $h2, $h3, $h4, $h5, $h6, $h7){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CombineHashCodes_7($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8){}
}
/**
 */
class Tuple extends \System\Object
{
	/**
	 * @uses TupleMethodsOverride::Create_1 ($item1)
	 * @uses TupleMethodsOverride::Create_2 ($item1, $item2)
	 * @uses TupleMethodsOverride::Create_3 ($item1, $item2, $item3)
	 * @uses TupleMethodsOverride::Create_4 ($item1, $item2, $item3, $item4)
	 * @uses TupleMethodsOverride::Create_5 ($item1, $item2, $item3, $item4, $item5)
	 * @uses TupleMethodsOverride::Create_6 ($item1, $item2, $item3, $item4, $item5, $item6)
	 * @uses TupleMethodsOverride::Create_7 ($item1, $item2, $item3, $item4, $item5, $item6, $item7)
	 * @uses TupleMethodsOverride::Create_8 ($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @uses TupleMethodsOverride::CombineHashCodes_1 ($h1, $h2)
	 * @uses TupleMethodsOverride::CombineHashCodes_2 ($h1, $h2, $h3)
	 * @uses TupleMethodsOverride::CombineHashCodes_3 ($h1, $h2, $h3, $h4)
	 * @uses TupleMethodsOverride::CombineHashCodes_4 ($h1, $h2, $h3, $h4, $h5)
	 * @uses TupleMethodsOverride::CombineHashCodes_5 ($h1, $h2, $h3, $h4, $h5, $h6)
	 * @uses TupleMethodsOverride::CombineHashCodes_6 ($h1, $h2, $h3, $h4, $h5, $h6, $h7)
	 * @uses TupleMethodsOverride::CombineHashCodes_7 ($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CombineHashCodes(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
