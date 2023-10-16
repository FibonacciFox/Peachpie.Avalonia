<?php
namespace System\Collections;
/**
 */
class StructuralComparisons extends \System\Object
{
	/**
	 * @var \System\Collections\IComparer
	 * @property
	 */
	public readonly $StructuralComparer;
	/**
	 * @var \System\Collections\IEqualityComparer
	 * @property
	 */
	public readonly $StructuralEqualityComparer;
	/**
	 * @return \System\Collections\IComparer
	 */
	public static function get_StructuralComparer(){}
	/**
	 * @return \System\Collections\IEqualityComparer
	 */
	public static function get_StructuralEqualityComparer(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
