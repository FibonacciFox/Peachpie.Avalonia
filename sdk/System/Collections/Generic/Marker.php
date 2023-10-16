<?php
namespace System\Collections\Generic;
/**
 */
class Marker extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Index;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Index(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DebuggerDisplay(){}
}
