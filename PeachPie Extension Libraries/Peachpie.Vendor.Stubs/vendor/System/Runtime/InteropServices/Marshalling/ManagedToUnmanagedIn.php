<?php
namespace System\Runtime\InteropServices\Marshalling;
final class ManagedToUnmanagedIn extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $BufferSize;
	/**
	 * @param \System\String|string $managed
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	public function FromManaged($managed, $buffer){}
	/**
	 * @return \System\Byte*
	 */
	public function ToUnmanaged(){}
	/**
	 * @return \System\Void|void
	 */
	public function Free(){}
}