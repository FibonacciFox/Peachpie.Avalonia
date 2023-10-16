<?php
namespace System\Buffers\Binary;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BinaryPrimitivesMethodsOverride
{
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function ReverseEndianness_1($value){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function ReverseEndianness_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ReverseEndianness_3($value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function ReverseEndianness_4($value){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] protected static function ReverseEndianness_5($value){}
	/**
	 * @return \System\Int128
	 */
	#[MethodOverride] protected static function ReverseEndianness_6($value){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function ReverseEndianness_7($value){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function ReverseEndianness_8($value){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] protected static function ReverseEndianness_9($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ReverseEndianness_10($value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function ReverseEndianness_11($value){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] protected static function ReverseEndianness_12($value){}
	/**
	 * @return \System\UInt128
	 */
	#[MethodOverride] protected static function ReverseEndianness_13($value){}
}
/**
 */
class BinaryPrimitives extends \System\Object
{
	/**
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_1 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_2 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_3 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_4 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_5 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_6 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_7 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_8 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_9 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_10 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_11 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_12 ($value)
	 * @uses BinaryPrimitivesMethodsOverride::ReverseEndianness_13 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReverseEndianness(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Double|double
	 */
	public static function ReadDoubleBigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Half
	 */
	public static function ReadHalfBigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Int16
	 */
	public static function ReadInt16BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Int32|int
	 */
	public static function ReadInt32BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Int64|int
	 */
	public static function ReadInt64BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Single
	 */
	public static function ReadSingleBigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\UInt16
	 */
	public static function ReadUInt16BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\UInt32
	 */
	public static function ReadUInt32BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\UInt64
	 */
	public static function ReadUInt64BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Double& $value
	 * @return \System\Boolean
	 */
	public static function TryReadDoubleBigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Half& $value
	 * @return \System\Boolean
	 */
	public static function TryReadHalfBigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int16& $value
	 * @return \System\Boolean
	 */
	public static function TryReadInt16BigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int32& $value
	 * @return \System\Boolean
	 */
	public static function TryReadInt32BigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int64& $value
	 * @return \System\Boolean
	 */
	public static function TryReadInt64BigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Single& $value
	 * @return \System\Boolean
	 */
	public static function TryReadSingleBigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt16& $value
	 * @return \System\Boolean
	 */
	public static function TryReadUInt16BigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt32& $value
	 * @return \System\Boolean
	 */
	public static function TryReadUInt32BigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt64& $value
	 * @return \System\Boolean
	 */
	public static function TryReadUInt64BigEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Double|double
	 */
	public static function ReadDoubleLittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Half
	 */
	public static function ReadHalfLittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Int16
	 */
	public static function ReadInt16LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Int32|int
	 */
	public static function ReadInt32LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Int64|int
	 */
	public static function ReadInt64LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\Single
	 */
	public static function ReadSingleLittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\UInt16
	 */
	public static function ReadUInt16LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\UInt32
	 */
	public static function ReadUInt32LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @return \System\UInt64
	 */
	public static function ReadUInt64LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Double& $value
	 * @return \System\Boolean
	 */
	public static function TryReadDoubleLittleEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Half& $value
	 * @return \System\Boolean
	 */
	public static function TryReadHalfLittleEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int16& $value
	 * @return \System\Boolean
	 */
	public static function TryReadInt16LittleEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int32& $value
	 * @return \System\Boolean
	 */
	public static function TryReadInt32LittleEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int64& $value
	 * @return \System\Boolean
	 */
	public static function TryReadInt64LittleEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Single& $value
	 * @return \System\Boolean
	 */
	public static function TryReadSingleLittleEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt16& $value
	 * @return \System\Boolean
	 */
	public static function TryReadUInt16LittleEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt32& $value
	 * @return \System\Boolean
	 */
	public static function TryReadUInt32LittleEndian($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt64& $value
	 * @return \System\Boolean
	 */
	public static function TryReadUInt64LittleEndian($source, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function WriteDoubleBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Half $value
	 * @return \System\Void|void
	 */
	public static function WriteHalfBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public static function WriteInt16BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function WriteInt32BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public static function WriteInt64BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public static function WriteSingleBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt16BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt32BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt64BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Double|double $value
	 * @return \System\Boolean
	 */
	public static function TryWriteDoubleBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Half $value
	 * @return \System\Boolean
	 */
	public static function TryWriteHalfBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int16 $value
	 * @return \System\Boolean
	 */
	public static function TryWriteInt16BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public static function TryWriteInt32BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int64|int $value
	 * @return \System\Boolean
	 */
	public static function TryWriteInt64BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Single $value
	 * @return \System\Boolean
	 */
	public static function TryWriteSingleBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt16 $value
	 * @return \System\Boolean
	 */
	public static function TryWriteUInt16BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	public static function TryWriteUInt32BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt64 $value
	 * @return \System\Boolean
	 */
	public static function TryWriteUInt64BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function WriteDoubleLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Half $value
	 * @return \System\Void|void
	 */
	public static function WriteHalfLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public static function WriteInt16LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function WriteInt32LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public static function WriteInt64LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public static function WriteSingleLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt16LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt32LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt64LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Double|double $value
	 * @return \System\Boolean
	 */
	public static function TryWriteDoubleLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Half $value
	 * @return \System\Boolean
	 */
	public static function TryWriteHalfLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int16 $value
	 * @return \System\Boolean
	 */
	public static function TryWriteInt16LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public static function TryWriteInt32LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int64|int $value
	 * @return \System\Boolean
	 */
	public static function TryWriteInt64LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Single $value
	 * @return \System\Boolean
	 */
	public static function TryWriteSingleLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt16 $value
	 * @return \System\Boolean
	 */
	public static function TryWriteUInt16LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	public static function TryWriteUInt32LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\UInt64 $value
	 * @return \System\Boolean
	 */
	public static function TryWriteUInt64LittleEndian($destination, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
