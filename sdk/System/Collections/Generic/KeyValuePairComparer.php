<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeyValuePairComparerMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($x, $y){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Compare_2($x, $y){}
}
/**
 */
class KeyValuePairComparer extends \System\Collections\Generic\Comparer_1 implements 
	\System\Collections\IComparer,
	\System\Collections\Generic\IComparer_1
{
	/**
	 * @var \System\Collections\Generic\IComparer_1[TKey]
	 * @field
	 */
	protected $keyComparer;
	/**
	 * @uses KeyValuePairComparerMethodsOverride::Compare_1 ($x, $y)
	 * @uses KeyValuePairComparerMethodsOverride::Compare_2 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
}
