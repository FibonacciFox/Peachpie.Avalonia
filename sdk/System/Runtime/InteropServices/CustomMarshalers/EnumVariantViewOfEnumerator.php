<?php
namespace System\Runtime\InteropServices\CustomMarshalers;
/**
 */
class EnumVariantViewOfEnumerator extends \System\Object implements 
	\System\Runtime\InteropServices\ComTypes\IEnumVARIANT,
	\System\Runtime\InteropServices\ICustomAdapter
{
	/**
	 * @var \System\Collections\IEnumerator
	 * @property
	 */
	public readonly $Enumerator;
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function get_Enumerator(){}
	/**
	 * @return \System\Runtime\InteropServices\ComTypes\IEnumVARIANT
	 */
	public  function Clone(){}
	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Object[] $rgVar
	 * @param \System\IntPtr $pceltFetched
	 * @return \System\Int32|int
	 */
	public  function Next($celt, $rgVar, $pceltFetched){}
	/**
	 * @return \System\Int32|int
	 */
	public  function Reset(){}
	/**
	 * @param \System\Int32|int $celt
	 * @return \System\Int32|int
	 */
	public  function Skip($celt){}
	/**
	 * @return \System\Object|object
	 */
	public  function GetUnderlyingObject(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
