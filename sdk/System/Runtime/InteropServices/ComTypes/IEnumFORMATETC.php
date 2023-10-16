<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IEnumFORMATETC
{
	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC[] $rgelt
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
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumFORMATETC& $newEnum
	 */
	public function Clone($newEnum);
}
