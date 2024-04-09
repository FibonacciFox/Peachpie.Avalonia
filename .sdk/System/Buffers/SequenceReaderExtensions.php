<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SequenceReaderExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int16& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryReadLittleEndian_1 ($reader, &$value){}
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int32& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryReadLittleEndian_2 ($reader, &$value){}
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int64& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryReadLittleEndian_3 ($reader, &$value){}
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int16& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryReadBigEndian_1 ($reader, &$value){}
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int32& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryReadBigEndian_2 ($reader, &$value){}
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int64& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryReadBigEndian_3 ($reader, &$value){}
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int16& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryReadReverseEndianness_1 ($reader, &$value){}
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int32& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryReadReverseEndianness_2 ($reader, &$value){}
	/**
	 * @deprecated
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \System\Int64& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryReadReverseEndianness_3 ($reader, &$value){}
}
class SequenceReaderExtensions extends \System\Object
{
	use SequenceReaderExtensionsOverride;

	/**
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \T& &$value
	 * @return \System\Boolean|bool
	 */
	protected static function TryRead($reader, &$value){}
	private static function TryReadMultisegment($reader, &$value){}
	/**
	 * @uses SequenceReaderExtensionsOverride::TryReadLittleEndian_1 <br>public , args: ($reader, &$value)<br>
	 * @uses SequenceReaderExtensionsOverride::TryReadLittleEndian_2 <br>public , args: ($reader, &$value)<br>
	 * @uses SequenceReaderExtensionsOverride::TryReadLittleEndian_3 <br>public , args: ($reader, &$value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryReadLittleEndian (\override ...$args){}
	/**
	 * @uses SequenceReaderExtensionsOverride::TryReadBigEndian_1 <br>public , args: ($reader, &$value)<br>
	 * @uses SequenceReaderExtensionsOverride::TryReadBigEndian_2 <br>public , args: ($reader, &$value)<br>
	 * @uses SequenceReaderExtensionsOverride::TryReadBigEndian_3 <br>public , args: ($reader, &$value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryReadBigEndian (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SequenceReaderExtensionsOverride::TryReadReverseEndianness_1 <br>private , args: ($reader, &$value)<br>
	 * @uses SequenceReaderExtensionsOverride::TryReadReverseEndianness_2 <br>private , args: ($reader, &$value)<br>
	 * @uses SequenceReaderExtensionsOverride::TryReadReverseEndianness_3 <br>private , args: ($reader, &$value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryReadReverseEndianness (\override ...$args){}
}