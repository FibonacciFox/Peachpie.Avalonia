<?php
namespace System\Buffers;
/**
 */
class MemoryHandle extends \System\ValueType implements 
	\System\IDisposable
{
	/**
	 * @var \System\Void*
	 * @property
	 */
	public readonly $Pointer;
	/**
	 * @return \System\Void*
	 */
	public  function get_Pointer(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
}
