<?php
namespace System\Collections;
/**
 */
class HashtableEnumerator extends \System\Object implements 
	\System\Collections\IDictionaryEnumerator,
	\System\Collections\IEnumerator,
	\System\ICloneable
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Key;
	/**
	 * @var \System\Collections\DictionaryEntry
	 * @property
	 */
	public readonly $Entry;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Current;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Key(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\Collections\DictionaryEntry
	 */
	public  function get_Entry(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Current(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
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
