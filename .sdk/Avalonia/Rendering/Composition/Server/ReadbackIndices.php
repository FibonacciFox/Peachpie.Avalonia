<?php
namespace Avalonia\Rendering\Composition\Server;
class ReadbackIndices extends \System\Object
{
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ReadIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $WriteIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $WrittenIndex;
	/**
	 * @property
	 * @var \System\UInt64
	 */
	public $ReadRevision;
	/**
	 * @property
	 * @var \System\UInt64
	 */
	public $LastWrittenRevision;
	/**
	 * @return \System\Void|void
	 */
	public function NextRead(){}
	/**
	 * @param \System\UInt64 $writtenRevision
	 * @return \System\Void|void
	 */
	public function CompleteWrite($writtenRevision){}
	/**
	 */
	public function __construct(){}
}