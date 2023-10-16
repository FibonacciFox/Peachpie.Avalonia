<?php
namespace System\Runtime\InteropServices\CustomMarshalers;
/**
 */
class EnumeratorViewOfEnumVariant extends \System\Object implements 
	\System\Runtime\InteropServices\ICustomAdapter,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Current(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
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
