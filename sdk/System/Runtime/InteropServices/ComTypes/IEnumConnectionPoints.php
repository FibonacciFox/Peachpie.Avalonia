<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IEnumConnectionPoints
{
	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Runtime\InteropServices\ComTypes\IConnectionPoint[] $rgelt
	 * @param \System\IntPtr $pceltFetched
	 */
	public function Next($celt, $rgelt, $pceltFetched);
	/**
	 * @param \System\Int32|int $celt
	 */
	public function Skip($celt);
	/**
	 */
	public function Reset();
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumConnectionPoints& $ppenum
	 */
	public function Clone($ppenum);
}
