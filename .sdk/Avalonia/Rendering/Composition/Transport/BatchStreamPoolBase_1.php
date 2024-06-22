<?php
namespace Avalonia\Rendering\Composition\Transport;
class BatchStreamPoolBase_1 extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CurrentUsage;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CurrentPool;
	private static function StartUpdateTimer($startTimer, $updateRef){}
	private function UpdateStatistics(){}
	/**
	 * @return \T|object
	 */
	abstract protected function CreateItem();
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	protected function ClearItem($item){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	protected function DestroyItem($item){}
	/**
	 * @return \T|object
	 */
	public function Get(){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Return($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Boolean|bool $needsFinalize
	 * @param \System\Boolean|bool $reclaimImmediately
	 * @param \System\Action_1 $startTimer [generic: System\Func_1[System\Boolean]
	 */
	public function __construct($needsFinalize, $reclaimImmediately, $startTimer){}
}