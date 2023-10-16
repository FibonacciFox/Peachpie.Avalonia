<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IEnumVARIANT
{
	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Object[] $rgVar
	 * @param \System\IntPtr $pceltFetched
	 */
	public function Next($celt, $rgVar, $pceltFetched);
	/**
	 * @param \System\Int32|int $celt
	 */
	public function Skip($celt);
	/**
	 */
	public function Reset();
	/**
	 */
	public function Clone();
}
