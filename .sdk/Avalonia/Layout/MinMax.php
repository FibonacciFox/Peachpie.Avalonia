<?php
namespace Avalonia\Layout;
final class MinMax extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $MinWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $MaxWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $MinHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $MaxHeight;
	/**
	 * @param \Avalonia\Layout\Layoutable $e
	 */
	public function __construct($e){}
}