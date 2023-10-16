<?php
namespace System\Collections\ObjectModel;
/**
 */
class DictionaryEnumerator extends \System\ValueType implements 
	\System\Collections\IDictionaryEnumerator,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Collections\DictionaryEntry
	 * @property
	 */
	public readonly $Entry;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Key;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Collections\DictionaryEntry
	 */
	public  function get_Entry(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Key(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
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
}
