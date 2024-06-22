<?php
namespace System\Collections;
final class HashtableEnumerator extends \System\Object implements
	\System\Collections\IDictionaryEnumerator,
	\System\Collections\IEnumerator,
	\System\ICloneable
{

	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Key;
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
	public $Current;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
}