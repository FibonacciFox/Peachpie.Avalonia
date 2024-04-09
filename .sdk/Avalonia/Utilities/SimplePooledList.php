<?php
namespace Avalonia\Utilities;
class SimplePooledList extends \System\Object implements
	\System\IDisposable
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $Count;
	/**
	 * @field
	 * @var \T[]
	 */
	public $Items;
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	private function ReturnToPool($items){}
	private function GrowItems($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function EnsureCapacity($count){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	/**
	 */
	public function __construct(){}
}