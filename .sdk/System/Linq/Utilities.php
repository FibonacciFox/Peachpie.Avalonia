<?php
namespace System\Linq;
class Utilities extends \System\Object
{


	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $left [generic: TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $right [generic: TSource]
	 * @return \System\Boolean|bool
	 */
	public static function AreEqualityComparersEqual($left, $right){}
	/**
	 * @param \System\Func_2 $predicate1 [generic: TSource,System\Boolean]
	 * @param \System\Func_2 $predicate2 [generic: TSource,System\Boolean]
	 * @return \System\Func_2[TSource,System\Boolean]
	 */
	public static function CombinePredicates($predicate1, $predicate2){}
	/**
	 * @param \System\Func_2 $selector1 [generic: TSource,TMiddle]
	 * @param \System\Func_2 $selector2 [generic: TMiddle,TResult]
	 * @return \System\Func_2[TSource,TResult]
	 */
	public static function CombineSelectors($selector1, $selector2){}
}