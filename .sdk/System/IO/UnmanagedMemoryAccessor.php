<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UnmanagedMemoryAccessorOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_1 ($disposing){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_2 (){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_1 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_2 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Char $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_3 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_4 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_5 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_6 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Decimal $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_7 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_8 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_9 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\SByte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_10 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_11 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_12 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_13 ($position, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $position
	 * @param \T& $structure
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_14 ($position, $structure){}
	/**
	 * @param \System\Runtime\InteropServices\SafeBuffer $buffer
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $capacity
	 */
	#[MethodOverride]public function __construct_1 ($buffer, $offset, $capacity){}
	/**
	 * @param \System\Runtime\InteropServices\SafeBuffer $buffer
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $capacity
	 * @param \System\IO\FileAccess $access
	 */
	#[MethodOverride]public function __construct_2 ($buffer, $offset, $capacity, $access){}
}
class UnmanagedMemoryAccessor extends \System\Object implements
	\System\IDisposable
{
	use UnmanagedMemoryAccessorOverride;

	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanRead;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanWrite;
	/**
	 * @param \System\Runtime\InteropServices\SafeBuffer $buffer
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $capacity
	 * @param \System\IO\FileAccess $access
	 * @return \System\Void|void
	 */
	protected function Initialize($buffer, $offset, $capacity, $access){}
	/**
	 * @uses UnmanagedMemoryAccessorOverride::Dispose_1 <br>protected , args: ($disposing)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Dispose_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Boolean|bool
	 */
	public function ReadBoolean($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Byte
	 */
	public function ReadByte($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Char
	 */
	public function ReadChar($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Int16
	 */
	public function ReadInt16($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Int32|int
	 */
	public function ReadInt32($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Int64|int
	 */
	public function ReadInt64($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Decimal
	 */
	public function ReadDecimal($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Single
	 */
	public function ReadSingle($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Double|double
	 */
	public function ReadDouble($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\SByte
	 */
	public function ReadSByte($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\UInt16
	 */
	public function ReadUInt16($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\UInt32
	 */
	public function ReadUInt32($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\UInt64
	 */
	public function ReadUInt64($position){}
	/**
	 * @param \System\Int64|int $position
	 * @param \T& &$structure
	 * @return \System\Void|void
	 */
	public function Read($position, &$structure){}
	/**
	 * @param \System\Int64|int $position
	 * @param \T $array
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	public function ReadArray($position, $array, $offset, $count){}
	/**
	 * @uses UnmanagedMemoryAccessorOverride::Write_1 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_2 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_3 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_4 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_5 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_6 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_7 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_8 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_9 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_10 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_11 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_12 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_13 <br>public , args: ($position, $value)<br>
	 * @uses UnmanagedMemoryAccessorOverride::Write_14 <br>public , args: ($position, $structure)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Write (\override ...$args){}
	/**
	 * @param \System\Int64|int $position
	 * @param \T $array
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function WriteArray($position, $array, $offset, $count){}
	private function EnsureSafeToRead($position, $sizeOfType){}
	private function EnsureSafeToWrite($position, $sizeOfType){}
	/**
	 * @uses UnmanagedMemoryAccessorOverride::__construct_1 <br>public , args: ($buffer, $offset, $capacity)<br>
	 * @uses UnmanagedMemoryAccessorOverride::__construct_2 <br>public , args: ($buffer, $offset, $capacity, $access)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}