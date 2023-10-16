<?php
namespace System\Runtime\InteropServices\CustomMarshalers;
/**
 */
class EnumerableViewOfDispatch extends \System\Object implements 
	\System\Runtime\InteropServices\ICustomAdapter,
	\System\Collections\IEnumerable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Dispatch(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetEnumerator(){}
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
