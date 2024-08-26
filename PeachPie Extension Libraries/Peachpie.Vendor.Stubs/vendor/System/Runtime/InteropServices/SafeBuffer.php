<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SafeBufferOverride {
	/**
	 * @deprecated
	 * @param \System\UInt64 $numBytes
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Initialize_1 ($numBytes){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $numElements
	 * @param \System\UInt32 $sizeOfEachElement
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Initialize_2 ($numElements, $sizeOfEachElement){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $numElements
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Initialize_3 ($numElements){}
}
class SafeBuffer extends \Microsoft\Win32\SafeHandles\SafeHandleZeroOrMinusOneIsInvalid implements
	\System\IDisposable
{
	use SafeBufferOverride;
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
	 * @uses SafeBufferOverride::Initialize_1 <br>public , args: ($numBytes)<br>
	 * @uses SafeBufferOverride::Initialize_2 <br>public , args: ($numElements, $sizeOfEachElement)<br>
	 * @uses SafeBufferOverride::Initialize_3 <br>public , args: ($numElements)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Initialize (\override ...$args){}
	/**
	 * @param \System\Byte*& $pointer
	 * @return \System\Void|void
	 */
	public function AcquirePointer($pointer){}
	/**
	 * @return \System\Void|void
	 */
	public function ReleasePointer(){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @return \T|object
	 */
	public function Read($byteOffset){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function ReadArray($byteOffset, $array, $index, $count){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \System\Span_1 $buffer [generic: T]
	 * @return \System\Void|void
	 */
	public function ReadSpan($byteOffset, $buffer){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function Write($byteOffset, $value){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function WriteArray($byteOffset, $array, $index, $count){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \System\ReadOnlySpan_1 $data [generic: T]
	 * @return \System\Void|void
	 */
	public function WriteSpan($byteOffset, $data){}
	private function SpaceCheck($ptr, $sizeInBytes){}
	private static function NotEnoughRoom(){}
	private static function NotInitialized(){}
	/**
	 * @return \System\UInt32
	 */
	protected static function AlignedSizeOf(){}
	/**
	 * @return \System\UInt32
	 */
	protected static function SizeOf(){}
}