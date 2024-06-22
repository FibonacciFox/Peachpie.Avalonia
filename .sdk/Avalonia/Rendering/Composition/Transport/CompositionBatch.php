<?php
namespace Avalonia\Rendering\Composition\Transport;
class CompositionBatch extends \System\Object
{

	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $Processed;
	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $Rendered;
	/**
	 * @return \System\Void|void
	 */
	protected function NotifyProcessed(){}
	/**
	 * @return \System\Void|void
	 */
	protected function NotifyRendered(){}
}