<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BinaryReaderOverride {
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
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_1 (){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_2 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $buffer [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_3 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_4 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_5 ($buffer){}
	/**
	 * @param \System\IO\Stream $input
	 */
	#[MethodOverride]public function __construct_1 ($input){}
	/**
	 * @param \System\IO\Stream $input
	 * @param \System\Text\Encoding $encoding
	 */
	#[MethodOverride]public function __construct_2 ($input, $encoding){}
	/**
	 * @param \System\IO\Stream $input
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean|bool $leaveOpen
	 */
	#[MethodOverride]public function __construct_3 ($input, $encoding, $leaveOpen){}
}
class BinaryReader extends \System\Object implements
	\System\IDisposable
{
	use BinaryReaderOverride;

	/**
	 * @property
	 * @var \System\IO\Stream
	 * @since readonly
	 */
	public $BaseStream;
	/**
	 * @uses BinaryReaderOverride::Dispose_1 <br>protected , args: ($disposing)<br>
	 * @uses BinaryReaderOverride::Dispose_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	private function ThrowIfDisposed(){}
	/**
	 * @return \System\Int32|int
	 */
	public function PeekChar(){}
	/**
	 * @uses BinaryReaderOverride::Read_1 <br>public , args: ()<br>
	 * @uses BinaryReaderOverride::Read_2 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses BinaryReaderOverride::Read_3 <br>public , args: ($buffer)<br>
	 * @uses BinaryReaderOverride::Read_4 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses BinaryReaderOverride::Read_5 <br>public , args: ($buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Read (\override ...$args){}
	/**
	 * @return \System\Byte
	 */
	public function ReadByte(){}
	private function InternalReadByte(){}
	/**
	 * @return \System\SByte
	 */
	public function ReadSByte(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function ReadBoolean(){}
	/**
	 * @return \System\Char
	 */
	public function ReadChar(){}
	/**
	 * @return \System\Int16
	 */
	public function ReadInt16(){}
	/**
	 * @return \System\UInt16
	 */
	public function ReadUInt16(){}
	/**
	 * @return \System\Int32|int
	 */
	public function ReadInt32(){}
	/**
	 * @return \System\UInt32
	 */
	public function ReadUInt32(){}
	/**
	 * @return \System\Int64|int
	 */
	public function ReadInt64(){}
	/**
	 * @return \System\UInt64
	 */
	public function ReadUInt64(){}
	/**
	 * @return \System\Half
	 */
	public function ReadHalf(){}
	/**
	 * @return \System\Single
	 */
	public function ReadSingle(){}
	/**
	 * @return \System\Double|double
	 */
	public function ReadDouble(){}
	/**
	 * @return \System\Decimal
	 */
	public function ReadDecimal(){}
	/**
	 * @return \System\String|string
	 */
	public function ReadString(){}
	private function InternalReadChars($buffer){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Char[]
	 */
	public function ReadChars($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Byte[]
	 */
	public function ReadBytes($count){}
	private function InternalRead($numBytes){}
	/**
	 * @param \System\Int32|int $numBytes
	 * @return \System\Void|void
	 */
	protected function FillBuffer($numBytes){}
	/**
	 * @return \System\Int32|int
	 */
	public function Read7BitEncodedInt(){}
	/**
	 * @return \System\Int64|int
	 */
	public function Read7BitEncodedInt64(){}
	/**
	 * @uses BinaryReaderOverride::__construct_1 <br>public , args: ($input)<br>
	 * @uses BinaryReaderOverride::__construct_2 <br>public , args: ($input, $encoding)<br>
	 * @uses BinaryReaderOverride::__construct_3 <br>public , args: ($input, $encoding, $leaveOpen)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}