<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IEnumSTATDATA
{
	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Runtime\InteropServices\ComTypes\STATDATA[] $rgelt
	 * @param \System\Int32[] $pceltFetched
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
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumSTATDATA& $newEnum
	 */
	public function Clone($newEnum);
}
