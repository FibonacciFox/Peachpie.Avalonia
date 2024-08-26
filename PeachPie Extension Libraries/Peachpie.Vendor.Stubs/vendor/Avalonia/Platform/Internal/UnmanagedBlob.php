<?php
namespace Avalonia\Platform\Internal;
class UnmanagedBlob extends \System\Object
{
	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Address;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsDisposed;
	private function DoDispose(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private static function mmap($addr, $length, $prot, $flags, $fd, $offset){}
	private static function munmap($addr, $length){}
	private static function sysconf($name){}
	private function Alloc($size){}
	private function Free($ptr, $len){}
	/**
	 * @param \System\Int32|int $size
	 */
	public function __construct($size){}
}