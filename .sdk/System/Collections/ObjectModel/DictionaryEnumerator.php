<?php
namespace System\Collections\ObjectModel;
final class DictionaryEnumerator extends \System\ValueType implements
	\System\Collections\IDictionaryEnumerator,
	\System\Collections\IEnumerator
{
	/**
	 * @property
	 * @var \System\Collections\DictionaryEntry
	 * @since readonly
	 */
	public $Entry;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Key;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary [generic: TKey,TValue]
	 */
	public function __construct($dictionary){}
}