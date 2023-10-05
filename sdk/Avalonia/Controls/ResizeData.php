<?php
namespace Avalonia\Controls;
/**
 */
class ResizeData extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $ShowsPreview;
	/**
	 * @var \Avalonia\Controls\GridSplitter+PreviewAdorner
	 * @field
	 */
	public $Adorner;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $MinChange;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $MaxChange;
	/**
	 * @var \Avalonia\Controls\Grid
	 * @field
	 */
	public $Grid;
	/**
	 * @var \Avalonia\Controls\GridResizeDirection
	 * @field
	 */
	public $ResizeDirection;
	/**
	 * @var \Avalonia\Controls\GridResizeBehavior
	 * @field
	 */
	public $ResizeBehavior;
	/**
	 * @var \Avalonia\Controls\DefinitionBase
	 * @field
	 */
	public $Definition1;
	/**
	 * @var \Avalonia\Controls\DefinitionBase
	 * @field
	 */
	public $Definition2;
	/**
	 * @var \Avalonia\Controls\GridSplitter+SplitBehavior
	 * @field
	 */
	public $SplitBehavior;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $SplitterIndex;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Definition1Index;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Definition2Index;
	/**
	 * @var \Avalonia\Controls\GridLength
	 * @field
	 */
	public $OriginalDefinition1Length;
	/**
	 * @var \Avalonia\Controls\GridLength
	 * @field
	 */
	public $OriginalDefinition2Length;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $OriginalDefinition1ActualLength;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $OriginalDefinition2ActualLength;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $SplitterLength;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $Scaling;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
