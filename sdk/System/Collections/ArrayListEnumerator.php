<?php
namespace System\Collections;
/**
 */
class ArrayListEnumerator extends \System\Object implements 
	\System\Collections\IEnumerator,
	\System\ICloneable
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Current(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
