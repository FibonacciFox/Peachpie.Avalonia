<?php
namespace Avalonia\X11;
/**
 */
class epoll_event extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $events;
	/**
	 * @var \Avalonia\X11\X11PlatformThreading+epoll_data
	 * @field
	 */
	public $data;
}
