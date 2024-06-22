<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IEnumConnections
{


	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Runtime\InteropServices\ComTypes\CONNECTDATA &$rgelt
	 * @param \System\IntPtr $pceltFetched
	 * @return \System\Int32|int
	 */
	public function Next($celt, &$rgelt, $pceltFetched);
	/**
	 * @param \System\Int32|int $celt
	 * @return \System\Int32|int
	 */
	public function Skip($celt);
	/**
	 * @return \System\Void|void
	 */
	public function Reset();
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumConnections& &$ppenum
	 * @return \System\Void|void
	 */
	public function Clone(&$ppenum);
}