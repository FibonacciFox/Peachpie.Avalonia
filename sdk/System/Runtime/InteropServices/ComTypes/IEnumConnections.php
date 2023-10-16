<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IEnumConnections
{
	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Runtime\InteropServices\ComTypes\CONNECTDATA[] $rgelt
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
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumConnections& $ppenum
	 */
	public function Clone($ppenum);
}
