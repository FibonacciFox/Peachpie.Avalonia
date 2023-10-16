<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BinaryReaderMethodsOverride
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
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_2($buffer, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_3($buffer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_4($buffer, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_5($buffer){}
}
/**
 */
class BinaryReader extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\IO\Stream
	 * @property
	 */
	public readonly $BaseStream;
	/**
	 * @return \System\IO\Stream
	 */
	public  function get_BaseStream(){}
	/**
	 * @uses BinaryReaderMethodsOverride::Dispose_1 ($disposing)
	 * @uses BinaryReaderMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfDisposed(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function PeekChar(){}
	/**
	 * @uses BinaryReaderMethodsOverride::Read_1 ()
	 * @uses BinaryReaderMethodsOverride::Read_2 ($buffer, $index, $count)
	 * @uses BinaryReaderMethodsOverride::Read_3 ($buffer)
	 * @uses BinaryReaderMethodsOverride::Read_4 ($buffer, $index, $count)
	 * @uses BinaryReaderMethodsOverride::Read_5 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @return \System\Byte
	 */
	public  function ReadByte(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalReadByte(){}
	/**
	 * @return \System\SByte
	 */
	public  function ReadSByte(){}
	/**
	 * @return \System\Boolean
	 */
	public  function ReadBoolean(){}
	/**
	 * @return \System\Char
	 */
	public  function ReadChar(){}
	/**
	 * @return \System\Int16
	 */
	public  function ReadInt16(){}
	/**
	 * @return \System\UInt16
	 */
	public  function ReadUInt16(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function ReadInt32(){}
	/**
	 * @return \System\UInt32
	 */
	public  function ReadUInt32(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function ReadInt64(){}
	/**
	 * @return \System\UInt64
	 */
	public  function ReadUInt64(){}
	/**
	 * @return \System\Half
	 */
	public  function ReadHalf(){}
	/**
	 * @return \System\Single
	 */
	public  function ReadSingle(){}
	/**
	 * @return \System\Double|double
	 */
	public  function ReadDouble(){}
	/**
	 * @return \System\Decimal
	 */
	public  function ReadDecimal(){}
	/**
	 * @return \System\String|string
	 */
	public  function ReadString(){}
	/**
	 * @param \System\Span_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalReadChars($buffer){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Char[]
	 */
	public  function ReadChars($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Byte[]
	 */
	public  function ReadBytes($count){}
	/**
	 * @param \System\Int32|int $numBytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalRead($numBytes){}
	/**
	 * @param \System\Int32|int $numBytes
	 * @return \System\Void|void
	 */
	protected  function FillBuffer($numBytes){}
	/**
	 * @return \System\Int32|int
	 */
	public  function Read7BitEncodedInt(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function Read7BitEncodedInt64(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
