<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BinaryWriterMethodsOverride
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
	#[MethodOverride] public  function Write_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_3($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_4($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_5($buffer, $index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_6($ch){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_7($chars){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_8($chars, $index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_9($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_10($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_11($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_12($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_13($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_14($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_15($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_16($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_17($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_18($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_19($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_20($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_21($chars){}
}
/**
 */
class BinaryWriter extends \System\Object implements 
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\IO\Stream
	 * @field
	 */
	protected $OutStream;
	/**
	 * @var \System\IO\BinaryWriter
	 * @field
	 */
	public readonly $Null;
	/**
	 * @var \System\IO\Stream
	 * @property
	 */
	public readonly $BaseStream;
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @uses BinaryWriterMethodsOverride::Dispose_1 ($disposing)
	 * @uses BinaryWriterMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function DisposeAsync(){}
	/**
	 * @return \System\IO\Stream
	 */
	public  function get_BaseStream(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Flush(){}
	/**
	 * @param \System\Int32|int $offset
	 * @param \System\IO\SeekOrigin $origin
	 * @return \System\Int64|int
	 */
	public  function Seek($offset, $origin){}
	/**
	 * @uses BinaryWriterMethodsOverride::Write_1 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_2 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_3 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_4 ($buffer)
	 * @uses BinaryWriterMethodsOverride::Write_5 ($buffer, $index, $count)
	 * @uses BinaryWriterMethodsOverride::Write_6 ($ch)
	 * @uses BinaryWriterMethodsOverride::Write_7 ($chars)
	 * @uses BinaryWriterMethodsOverride::Write_8 ($chars, $index, $count)
	 * @uses BinaryWriterMethodsOverride::Write_9 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_10 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_11 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_12 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_13 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_14 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_15 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_16 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_17 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_18 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_19 ($value)
	 * @uses BinaryWriterMethodsOverride::Write_20 ($buffer)
	 * @uses BinaryWriterMethodsOverride::Write_21 ($chars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars
	 * @param \System\Boolean $useThisWriteOverride
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteCharsCommonWithoutLengthPrefix($chars, $useThisWriteOverride){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function Write7BitEncodedInt($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public  function Write7BitEncodedInt64($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
