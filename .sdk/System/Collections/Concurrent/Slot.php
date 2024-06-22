<?php
namespace System\Collections\Concurrent;
final class Slot extends \System\ValueType
{

	/**
	 * @field
	 * @var \T|object
	 */
	public $Item;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $SequenceNumber;

}