<?php
namespace Avalonia\Utilities;
class Ref_1 extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements
	\Avalonia\Utilities\IRef_1,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $RefCount;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \Avalonia\Utilities\IRef_1[T]
	 */
	public function Clone(){}
	/**
	 * @return \Avalonia\Utilities\IRef_1[TResult]
	 */
	public function CloneAs(){}
	/**
	 * @param \T|object $item
	 * @param \Avalonia\Utilities\RefCountable+RefCounter $counter
	 */
	public function __construct($item, $counter){}
}