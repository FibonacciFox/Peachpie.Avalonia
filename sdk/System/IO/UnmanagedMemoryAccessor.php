<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnmanagedMemoryAccessorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_1($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_2($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_3($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_4($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_5($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_6($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_7($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_8($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_9($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_10($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_11($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_12($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_13($position, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_14($position, $structure){}
}
/**
 */
class UnmanagedMemoryAccessor extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Capacity;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanRead;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanWrite;
	/**
	 * @param \System\Runtime\InteropServices\SafeBuffer $buffer
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $capacity
	 * @param \System\IO\FileAccess $access
	 * @return \System\Void|void
	 */
	protected  function Initialize($buffer, $offset, $capacity, $access){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Capacity(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanRead(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanWrite(){}
	/**
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Dispose_1 ($disposing)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsOpen(){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Boolean
	 */
	public  function ReadBoolean($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Byte
	 */
	public  function ReadByte($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Char
	 */
	public  function ReadChar($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Int16
	 */
	public  function ReadInt16($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Int32|int
	 */
	public  function ReadInt32($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Int64|int
	 */
	public  function ReadInt64($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Decimal
	 */
	public  function ReadDecimal($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Single
	 */
	public  function ReadSingle($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\Double|double
	 */
	public  function ReadDouble($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\SByte
	 */
	public  function ReadSByte($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\UInt16
	 */
	public  function ReadUInt16($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\UInt32
	 */
	public  function ReadUInt32($position){}
	/**
	 * @param \System\Int64|int $position
	 * @return \System\UInt64
	 */
	public  function ReadUInt64($position){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\IO\T& $structure
	 * @return \System\Void|void
	 */
	public  function Read($position, $structure){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\IO\T[] $array
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	public  function ReadArray($position, $array, $offset, $count){}
	/**
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_1 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_2 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_3 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_4 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_5 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_6 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_7 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_8 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_9 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_10 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_11 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_12 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_13 ($position, $value)
	 * @uses UnmanagedMemoryAccessorMethodsOverride::Write_14 ($position, $structure)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\IO\T[] $array
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function WriteArray($position, $array, $offset, $count){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int32|int $sizeOfType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureSafeToRead($position, $sizeOfType){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int32|int $sizeOfType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureSafeToWrite($position, $sizeOfType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
