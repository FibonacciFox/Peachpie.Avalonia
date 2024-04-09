<?php
namespace System\Diagnostics\Tracing;
final class EventData extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $m_Ptr;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_Size;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_Reserved;
	/**
	 * @property
	 * @var \System\IntPtr
	 */
	public $DataPointer;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Size;
	/**
	 * @param \System\Byte* $pointer
	 * @param \System\Int32|int $size
	 * @param \System\Int32|int $reserved
	 * @return \System\Void|void
	 */
	protected function SetMetadata($pointer, $size, $reserved){}
}