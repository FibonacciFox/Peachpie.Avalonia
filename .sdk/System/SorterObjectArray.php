<?php
namespace System;
final class SorterObjectArray extends \System\ValueType
{

	/**
	 * @param \System\Int32|int $a
	 * @param \System\Int32|int $b
	 * @return \System\Void|void
	 */
	protected function SwapIfGreater($a, $b){}
	private function Swap($i, $j){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected function Sort($left, $length){}
	private function IntrospectiveSort($left, $length){}
	private function IntroSort($lo, $hi, $depthLimit){}
	private function PickPivotAndPartition($lo, $hi){}
	private function Heapsort($lo, $hi){}
	private function DownHeap($i, $n, $lo){}
	private function InsertionSort($lo, $hi){}
}