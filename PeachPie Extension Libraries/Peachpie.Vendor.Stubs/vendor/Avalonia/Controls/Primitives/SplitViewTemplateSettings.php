<?php
namespace Avalonia\Controls\Primitives;
class SplitViewTemplateSettings extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $ClosedPaneWidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\GridLength]
	 */
	public static $PaneColumnGridLengthProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ClosedPaneWidth;
	/**
	 * @property
	 * @var \Avalonia\Controls\GridLength
	 */
	public $PaneColumnGridLength;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
}