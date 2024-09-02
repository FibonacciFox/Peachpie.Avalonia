<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IConnectionPointContainer
{

	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumConnectionPoints& &$ppEnum
	 * @return \System\Void|void
	 */
	public function EnumConnectionPoints(&$ppEnum);
	/**
	 * @param \System\Guid& &$riid
	 * @param \System\Runtime\InteropServices\ComTypes\IConnectionPoint& &$ppCP
	 * @return \System\Void|void
	 */
	public function FindConnectionPoint(&$riid, &$ppCP);
}