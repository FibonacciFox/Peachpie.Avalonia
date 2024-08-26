<?php
namespace System\Collections;
final class ArrayListEnumeratorSimple extends \System\Object implements
	\System\Collections\IEnumerator,
	\System\ICloneable
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Current;
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