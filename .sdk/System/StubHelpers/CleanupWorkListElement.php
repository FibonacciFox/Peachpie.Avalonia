<?php
namespace System\StubHelpers;
class CleanupWorkListElement extends \System\Object
{


	/**
	 * @return \System\Void|void
	 */
	abstract protected function DestroyCore();
	/**
	 * @return \System\Void|void
	 */
	public function Destroy(){}
	/**
	 * @param \System\StubHelpers\CleanupWorkListElement& $list
	 * @param \System\StubHelpers\CleanupWorkListElement $newElement
	 * @return \System\Void|void
	 */
	public static function AddToCleanupList($list, $newElement){}
}