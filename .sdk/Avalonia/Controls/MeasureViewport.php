<?php
namespace Avalonia\Controls;
final class MeasureViewport extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $anchorIndex;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $anchorU;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $viewportUStart;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $viewportUEnd;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $measuredV;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $realizedEndU;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $lastIndex;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $viewportIsDisjunct;

}