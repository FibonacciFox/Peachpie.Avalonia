<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IEnumString
{
	/**
	 * @param \System\Int32|int $celt
	 * @param \System\String[] $rgelt
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
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumString& $ppenum
	 */
	public function Clone($ppenum);
}
