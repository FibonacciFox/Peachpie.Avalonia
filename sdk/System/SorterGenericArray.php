<?php
namespace System;
/**
 */
class SorterGenericArray extends \System\ValueType
{
	/**
	 * @param \System\Int32|int $a
	 * @param \System\Int32|int $b
	 * @return \System\Void|void
	 */
	protected  function SwapIfGreater($a, $b){}
	/**
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $j
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Swap($i, $j){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected  function Sort($left, $length){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IntrospectiveSort($left, $length){}
	/**
	 * @param \System\Int32|int $lo
	 * @param \System\Int32|int $hi
	 * @param \System\Int32|int $depthLimit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IntroSort($lo, $hi, $depthLimit){}
	/**
	 * @param \System\Int32|int $lo
	 * @param \System\Int32|int $hi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PickPivotAndPartition($lo, $hi){}
	/**
	 * @param \System\Int32|int $lo
	 * @param \System\Int32|int $hi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Heapsort($lo, $hi){}
	/**
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $n
	 * @param \System\Int32|int $lo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DownHeap($i, $n, $lo){}
	/**
	 * @param \System\Int32|int $lo
	 * @param \System\Int32|int $hi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InsertionSort($lo, $hi){}
}
