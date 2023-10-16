<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 */
class ManagedToUnmanagedIn extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BufferSize;
	/**
	 * @return \System\Int32|int
	 */
	public static function get_BufferSize(){}
	/**
	 * @param \System\String|string $managed
	 * @param \System\Span_1 $buffer
	 * @return \System\Void|void
	 */
	public  function FromManaged($managed, $buffer){}
	/**
	 * @return \System\Byte*
	 */
	public  function ToUnmanaged(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Free(){}
}
