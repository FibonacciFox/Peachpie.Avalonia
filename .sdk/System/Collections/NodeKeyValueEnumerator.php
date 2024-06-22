<?php
namespace System\Collections;
final class NodeKeyValueEnumerator extends \System\Object implements
	\System\Collections\IEnumerator
{

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
	 * @param \System\Collections\ListDictionaryInternal $list
	 * @param \System\Boolean|bool $isKeys
	 */
	public function __construct($list, $isKeys){}
}