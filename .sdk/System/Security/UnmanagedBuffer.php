<?php
namespace System\Security;
final class UnmanagedBuffer extends \System\Runtime\InteropServices\SafeBuffer implements
	\System\IDisposable
{

	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $handle;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $ByteLength;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInvalid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsClosed;
	/**
	 * @param \System\Int32|int $byteLength
	 * @return \System\Security\SecureString+UnmanagedBuffer
	 */
	public static function Allocate($byteLength){}
	/**
	 * @param \System\Security\SecureString+UnmanagedBuffer $source
	 * @param \System\Security\SecureString+UnmanagedBuffer $destination
	 * @param \System\UInt64 $bytesLength
	 * @return \System\Void|void
	 */
	protected static function Copy($source, $destination, $bytesLength){}
}