<?php
namespace Avalonia\Rendering\Composition\Transport;
class BatchStreamWriter extends \System\Object implements
	\System\IDisposable
{


	private function CommitDataSegment(){}
	private function NextDataSegment(){}
	private function CommitObjectSegment(){}
	private function NextObjectSegment(){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Write($item){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Void|void
	 */
	public function WriteObject($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamData $output
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamMemoryPool $memoryPool
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamObjectPool_1 $objectPool [generic: System\Object]
	 */
	public function __construct($output, $memoryPool, $objectPool){}
}