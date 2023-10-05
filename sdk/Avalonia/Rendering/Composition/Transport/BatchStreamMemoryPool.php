<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 */
class BatchStreamMemoryPool extends \Avalonia\Rendering\Composition\Transport\BatchStreamPoolBase_1 implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BufferSize;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentUsage;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentPool;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BufferSize(){}
}
