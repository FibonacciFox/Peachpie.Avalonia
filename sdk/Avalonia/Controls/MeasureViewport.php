<?php
namespace Avalonia\Controls;
/**
 */
class MeasureViewport extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $anchorIndex;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $anchorU;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $viewportUStart;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $viewportUEnd;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $measuredV;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $realizedEndU;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $lastIndex;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $viewportIsDisjunct;
}
