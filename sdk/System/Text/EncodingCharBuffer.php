<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncodingCharBufferMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function AddChar_1($ch, $numBytes){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function AddChar_2($ch){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function Fallback_1($fallbackByte){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function Fallback_2($byteBuffer){}
}
/**
 */
class EncodingCharBuffer extends \System\Object
{
	/**
	 * @uses EncodingCharBufferMethodsOverride::AddChar_1 ($ch, $numBytes)
	 * @uses EncodingCharBufferMethodsOverride::AddChar_2 ($ch)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddChar(mixed ...$args){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected  function AdjustBytes($count){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_MoreData(){}
	/**
	 * @return \System\Byte
	 */
	protected  function GetNextByte(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_BytesUsed(){}
	/**
	 * @uses EncodingCharBufferMethodsOverride::Fallback_1 ($fallbackByte)
	 * @uses EncodingCharBufferMethodsOverride::Fallback_2 ($byteBuffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Fallback(mixed ...$args){}
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
