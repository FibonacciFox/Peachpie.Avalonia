<?php
namespace System\Collections\Concurrent;
/**
 */
class Slot extends \System\ValueType
{
	/**
	 * @var \T
	 * @field
	 */
	public $Item;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $SequenceNumber;
}
