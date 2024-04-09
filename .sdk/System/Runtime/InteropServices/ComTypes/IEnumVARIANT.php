<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IEnumVARIANT
{

	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Object &$rgVar
	 * @param \System\IntPtr $pceltFetched
	 * @return \System\Int32|int
	 */
	public function Next($celt, &$rgVar, $pceltFetched);
	/**
	 * @param \System\Int32|int $celt
	 * @return \System\Int32|int
	 */
	public function Skip($celt);
	/**
	 * @return \System\Int32|int
	 */
	public function Reset();
	/**
	 * @return \System\Runtime\InteropServices\ComTypes\IEnumVARIANT
	 */
	public function Clone();
}