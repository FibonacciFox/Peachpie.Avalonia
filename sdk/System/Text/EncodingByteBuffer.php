<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncodingByteBufferMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function AddByte_1($b, $moreBytesExpected){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function AddByte_2($b1){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function AddByte_3($b1, $b2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function AddByte_4($b1, $b2, $moreBytesExpected){}
}
/**
 */
class EncodingByteBuffer extends \System\Object
{
	/**
	 * @var \System\Text\EncoderFallbackBuffer
	 * @field
	 */
	protected $fallbackBuffer;
	/**
	 * @uses EncodingByteBufferMethodsOverride::AddByte_1 ($b, $moreBytesExpected)
	 * @uses EncodingByteBufferMethodsOverride::AddByte_2 ($b1)
	 * @uses EncodingByteBufferMethodsOverride::AddByte_3 ($b1, $b2)
	 * @uses EncodingByteBufferMethodsOverride::AddByte_4 ($b1, $b2, $moreBytesExpected)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddByte(mixed ...$args){}
	/**
	 * @param \System\Boolean $bThrow
	 * @return \System\Void|void
	 */
	protected  function MovePrevious($bThrow){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_MoreData(){}
	/**
	 * @return \System\Char
	 */
	protected  function GetNextChar(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_CharsUsed(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Count(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
