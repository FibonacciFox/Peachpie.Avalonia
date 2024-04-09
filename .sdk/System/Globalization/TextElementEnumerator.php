<?php
namespace System\Globalization;
class TextElementEnumerator extends \System\Object implements
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
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ElementIndex;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @return \System\String|string
	 */
	public function GetTextElement(){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
}