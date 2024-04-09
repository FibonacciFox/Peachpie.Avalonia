<?php
namespace System\Collections;
final class NodeEnumerator extends \System\Object implements
	\System\Collections\IDictionaryEnumerator,
	\System\Collections\IEnumerator
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Current;
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
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @param \System\Collections\ListDictionaryInternal $list
	 */
	public function __construct($list){}
}