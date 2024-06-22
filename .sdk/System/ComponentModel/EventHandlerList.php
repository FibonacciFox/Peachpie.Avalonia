<?php
namespace System\ComponentModel;
final class EventHandlerList extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Delegate
	 */
	public $Item;
	/**
	 * @param \System\Object|object $key
	 * @param \System\Delegate $value
	 * @return \System\Void|void
	 */
	public function AddHandler($key, $value){}
	/**
	 * @param \System\ComponentModel\EventHandlerList $listToAddFrom
	 * @return \System\Void|void
	 */
	public function AddHandlers($listToAddFrom){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function Find($key){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Delegate $value
	 * @return \System\Void|void
	 */
	public function RemoveHandler($key, $value){}
	/**
	 */
	public function __construct(){}
}