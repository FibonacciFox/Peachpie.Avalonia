<?php
namespace Avalonia\Utilities;
final class ValueSingleOrList_1 extends \System\ValueType
{
	/**
	 * @property
	 * @var \T|object
	 */
	public $Single;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[T]
	 */
	public $List;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasList;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSingle;
	/**
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function Add($value){}
	/**
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	public function Remove($value){}
}