<?php
namespace Avalonia\Styling;
class NthLastChildSelector extends \Avalonia\Styling\NthChildSelector
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Step;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Offset;
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Int32|int $step
	 * @param \System\Int32|int $offset
	 */
	public function __construct($previous, $step, $offset){}
}