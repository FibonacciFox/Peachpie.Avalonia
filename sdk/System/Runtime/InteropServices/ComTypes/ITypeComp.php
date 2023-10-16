<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface ITypeComp
{
	/**
	 * @param \System\String|string $szName
	 * @param \System\Int32|int $lHashVal
	 * @param \System\Int16 $wFlags
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo& $ppTInfo
	 * @param \System\Runtime\InteropServices\ComTypes\DESCKIND& $pDescKind
	 * @param \System\Runtime\InteropServices\ComTypes\BINDPTR& $pBindPtr
	 */
	public function Bind($szName, $lHashVal, $wFlags, $ppTInfo, $pDescKind, $pBindPtr);
	/**
	 * @param \System\String|string $szName
	 * @param \System\Int32|int $lHashVal
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo& $ppTInfo
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeComp& $ppTComp
	 */
	public function BindType($szName, $lHashVal, $ppTInfo, $ppTComp);
}
