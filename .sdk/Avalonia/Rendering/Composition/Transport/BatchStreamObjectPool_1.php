<?php
namespace Avalonia\Rendering\Composition\Transport;
final class BatchStreamObjectPool_1 extends \Avalonia\Rendering\Composition\Transport\BatchStreamPoolBase_1 implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ArraySize;
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
	/**
	 * @param \System\Boolean|bool $reclaimImmediately
	 * @param \System\Int32|int $arraySize
	 * @param \System\Action_1 $startTimer [generic: System\Func_1[System\Boolean]
	 */
	public function __construct($reclaimImmediately, $arraySize, $startTimer){}
}