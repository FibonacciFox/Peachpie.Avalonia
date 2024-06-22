<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BinaryWriterOverride {
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
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_4 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_5 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_6 ($ch){}
	/**
	 * @deprecated
	 * @param \System\Char $chars
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_7 ($chars){}
	/**
	 * @deprecated
	 * @param \System\Char $chars
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_8 ($chars, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_13 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_14 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_15 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_16 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_17 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_18 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_19 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_20 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_21 ($chars){}
	/**
	 * @param \System\IO\Stream $output
	 */
	#[MethodOverride]public function __construct_1 ($output){}
	/**
	 * @param \System\IO\Stream $output
	 * @param \System\Text\Encoding $encoding
	 */
	#[MethodOverride]public function __construct_2 ($output, $encoding){}
	/**
	 * @param \System\IO\Stream $output
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean|bool $leaveOpen
	 */
	#[MethodOverride]public function __construct_3 ($output, $encoding, $leaveOpen){}
}
class BinaryWriter extends \System\Object implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use BinaryWriterOverride;

	/**
	 * @field
	 * @var \System\IO\Stream
	 */
	protected $OutStream;
	/**
	 * @field
	 * @since readonly
	 * @var \System\IO\BinaryWriter
	 */
	public static $Null;
	/**
	 * @property
	 * @var \System\IO\Stream
	 * @since readonly
	 */
	public $BaseStream;
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @uses BinaryWriterOverride::Dispose_1 <br>protected , args: ($disposing)<br>
	 * @uses BinaryWriterOverride::Dispose_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function DisposeAsync(){}
	/**
	 * @return \System\Void|void
	 */
	public function Flush(){}
	/**
	 * @param \System\Int32|int $offset
	 * @param \System\IO\SeekOrigin $origin
	 * @return \System\Int64|int
	 */
	public function Seek($offset, $origin){}
	/**
	 * @uses BinaryWriterOverride::Write_1 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_2 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_3 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_4 <br>public , args: ($buffer)<br>
	 * @uses BinaryWriterOverride::Write_5 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses BinaryWriterOverride::Write_6 <br>public , args: ($ch)<br>
	 * @uses BinaryWriterOverride::Write_7 <br>public , args: ($chars)<br>
	 * @uses BinaryWriterOverride::Write_8 <br>public , args: ($chars, $index, $count)<br>
	 * @uses BinaryWriterOverride::Write_9 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_10 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_11 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_12 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_13 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_14 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_15 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_16 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_17 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_18 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_19 <br>public , args: ($value)<br>
	 * @uses BinaryWriterOverride::Write_20 <br>public , args: ($buffer)<br>
	 * @uses BinaryWriterOverride::Write_21 <br>public , args: ($chars)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Write (\override ...$args){}
	private function WriteCharsCommonWithoutLengthPrefix($chars, $useThisWriteOverride){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public function Write7BitEncodedInt($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public function Write7BitEncodedInt64($value){}
	/**
	 * @uses BinaryWriterOverride::__construct_1 <br>public , args: ($output)<br>
	 * @uses BinaryWriterOverride::__construct_2 <br>public , args: ($output, $encoding)<br>
	 * @uses BinaryWriterOverride::__construct_3 <br>public , args: ($output, $encoding, $leaveOpen)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}