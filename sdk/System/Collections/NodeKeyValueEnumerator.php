<?php
namespace System\Collections;
/**
 */
class NodeKeyValueEnumerator extends \System\Object implements 
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
