<?php
namespace Avalonia\X11;
/**
 */
class epoll_data extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $ptr;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $fd;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $u32;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $u64;
}
