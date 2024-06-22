<?php
namespace Avalonia\Platform\Interop;
class Utf8Buffer extends \System\Runtime\InteropServices\SafeHandle implements
	\System\IDisposable
{

	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $handle;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ByteLen;
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
	 * @param \System\IntPtr $s
	 * @return \System\String|string
	 */
	public static function StringFromPtr($s){}
	/**
	 * @param \System\String|string $s
	 */
	public function __construct($s){}
}