<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventData extends \System\ValueType
{
	/**
	 * @var \System\UInt64
	 * @field
	 */
	protected $m_Ptr;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_Size;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_Reserved;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $DataPointer;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Size;
	/**
	 * @return \System\IntPtr
	 */
	public  function get_DataPointer(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_DataPointer($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Size(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Size($value){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Reserved(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected  function set_Reserved($value){}
	/**
	 * @param \System\Byte* $pointer
	 * @param \System\Int32|int $size
	 * @param \System\Int32|int $reserved
	 * @return \System\Void|void
	 */
	protected  function SetMetadata($pointer, $size, $reserved){}
}
