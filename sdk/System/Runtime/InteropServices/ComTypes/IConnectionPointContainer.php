<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IConnectionPointContainer
{
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumConnectionPoints& $ppEnum
	 */
	public function EnumConnectionPoints($ppEnum);
	/**
	 * @param \System\Guid& $riid
	 * @param \System\Runtime\InteropServices\ComTypes\IConnectionPoint& $ppCP
	 */
	public function FindConnectionPoint($riid, $ppCP);
}
