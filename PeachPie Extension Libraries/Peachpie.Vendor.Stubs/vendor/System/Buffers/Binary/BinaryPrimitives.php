<?php
namespace System\Buffers\Binary;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BinaryPrimitivesOverride {
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function ReverseEndianness_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function ReverseEndianness_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ReverseEndianness_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function ReverseEndianness_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\IntPtr
	 */
	#[MethodOverride]protected static function ReverseEndianness_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int128 $value
	 * @return \System\Int128
	 */
	#[MethodOverride]protected static function ReverseEndianness_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function ReverseEndianness_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function ReverseEndianness_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Char
	 */
	#[MethodOverride]protected static function ReverseEndianness_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ReverseEndianness_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function ReverseEndianness_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]protected static function ReverseEndianness_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]protected static function ReverseEndianness_13 ($value){}
}
class BinaryPrimitives extends \System\Object
{
	use BinaryPrimitivesOverride;

	/**
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_1 <br>public , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_2 <br>public , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_3 <br>public , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_4 <br>public , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_5 <br>protected , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_6 <br>protected , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_7 <br>public , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_8 <br>public , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_9 <br>protected , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_10 <br>public , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_11 <br>public , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_12 <br>protected , args: ($value)<br>
	 * @uses BinaryPrimitivesOverride::ReverseEndianness_13 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\SByte|\System\Int16|\System\Int32|int|\System\Int64|int|\System\IntPtr|\System\Int128|\System\Byte|\System\UInt16|\System\Char|\System\UInt32|\System\UInt64|\System\UIntPtr|\System\UInt128|mixed|\override
	 */
	#[MethodOverridePublic]function ReverseEndianness (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Double|double
	 */
	public static function ReadDoubleBigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Half
	 */
	public static function ReadHalfBigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Int16
	 */
	public static function ReadInt16BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public static function ReadInt32BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Int64|int
	 */
	public static function ReadInt64BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Single
	 */
	public static function ReadSingleBigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\UInt16
	 */
	public static function ReadUInt16BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\UInt32
	 */
	public static function ReadUInt32BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\UInt64
	 */
	public static function ReadUInt64BigEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Double& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadDoubleBigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Half& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadHalfBigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int16& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadInt16BigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int32& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadInt32BigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int64& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadInt64BigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Single& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadSingleBigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt16& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadUInt16BigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt32& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadUInt32BigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt64& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadUInt64BigEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Double|double
	 */
	public static function ReadDoubleLittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Half
	 */
	public static function ReadHalfLittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Int16
	 */
	public static function ReadInt16LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public static function ReadInt32LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Int64|int
	 */
	public static function ReadInt64LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Single
	 */
	public static function ReadSingleLittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\UInt16
	 */
	public static function ReadUInt16LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\UInt32
	 */
	public static function ReadUInt32LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\UInt64
	 */
	public static function ReadUInt64LittleEndian($source){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Double& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadDoubleLittleEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Half& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadHalfLittleEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int16& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadInt16LittleEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int32& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadInt32LittleEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int64& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadInt64LittleEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Single& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadSingleLittleEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt16& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadUInt16LittleEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt32& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadUInt32LittleEndian($source, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt64& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadUInt64LittleEndian($source, &$value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function WriteDoubleBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Half $value
	 * @return \System\Void|void
	 */
	public static function WriteHalfBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public static function WriteInt16BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function WriteInt32BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public static function WriteInt64BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public static function WriteSingleBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt16BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt32BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt64BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Double|double $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteDoubleBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteHalfBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int16 $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteInt16BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32|int $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteInt32BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int64|int $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteInt64BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteSingleBigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt16 $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteUInt16BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt32 $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteUInt32BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt64 $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteUInt64BigEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function WriteDoubleLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Half $value
	 * @return \System\Void|void
	 */
	public static function WriteHalfLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public static function WriteInt16LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function WriteInt32LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public static function WriteInt64LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public static function WriteSingleLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt16LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt32LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public static function WriteUInt64LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Double|double $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteDoubleLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteHalfLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int16 $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteInt16LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32|int $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteInt32LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int64|int $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteInt64LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteSingleLittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt16 $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteUInt16LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt32 $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteUInt32LittleEndian($destination, $value){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\UInt64 $value
	 * @return \System\Boolean|bool
	 */
	public static function TryWriteUInt64LittleEndian($destination, $value){}
}