<?php
namespace System\ComponentModel;
final class ListEntry extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\EventHandlerList+ListEntry
	 */
	protected $_next;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	protected $_key;
	/**
	 * @field
	 * @var \System\Delegate
	 */
	protected $_handler;
	/**
	 * @param \System\Object|object $key
	 * @param \System\Delegate $handler
	 * @param \System\ComponentModel\EventHandlerList+ListEntry $next
	 */
	public function __construct($key, $handler, $next){}
}