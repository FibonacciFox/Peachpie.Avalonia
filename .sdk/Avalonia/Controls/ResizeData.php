<?php
namespace Avalonia\Controls;
class ResizeData extends \System\Object
{

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $ShowsPreview;
	/**
	 * @field
	 * @var \Avalonia\Controls\GridSplitter+PreviewAdorner
	 */
	public $Adorner;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $MinChange;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $MaxChange;
	/**
	 * @field
	 * @var \Avalonia\Controls\Grid
	 */
	public $Grid;
	/**
	 * @field
	 * @var \Avalonia\Controls\GridResizeDirection
	 */
	public $ResizeDirection;
	/**
	 * @field
	 * @var \Avalonia\Controls\GridResizeBehavior
	 */
	public $ResizeBehavior;
	/**
	 * @field
	 * @var \Avalonia\Controls\DefinitionBase
	 */
	public $Definition1;
	/**
	 * @field
	 * @var \Avalonia\Controls\DefinitionBase
	 */
	public $Definition2;
	/**
	 * @field
	 * @var \Avalonia\Controls\GridSplitter+SplitBehavior
	 */
	public $SplitBehavior;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $SplitterIndex;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $Definition1Index;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $Definition2Index;
	/**
	 * @field
	 * @var \Avalonia\Controls\GridLength
	 */
	public $OriginalDefinition1Length;
	/**
	 * @field
	 * @var \Avalonia\Controls\GridLength
	 */
	public $OriginalDefinition2Length;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $OriginalDefinition1ActualLength;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $OriginalDefinition2ActualLength;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $SplitterLength;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $Scaling;
	/**
	 */
	public function __construct(){}
}