<?php
namespace Avalonia\Controls;
class ProgressBarTemplateSettings extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ProgressBar+ProgressBarTemplateSettings,System\Double]
	 */
	public static $ContainerAnimationStartPositionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ProgressBar+ProgressBarTemplateSettings,System\Double]
	 */
	public static $ContainerAnimationEndPositionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ProgressBar+ProgressBarTemplateSettings,System\Double]
	 */
	public static $Container2AnimationStartPositionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ProgressBar+ProgressBarTemplateSettings,System\Double]
	 */
	public static $Container2AnimationEndPositionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ProgressBar+ProgressBarTemplateSettings,System\Double]
	 */
	public static $Container2WidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ProgressBar+ProgressBarTemplateSettings,System\Double]
	 */
	public static $ContainerWidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ProgressBar+ProgressBarTemplateSettings,System\Double]
	 */
	public static $IndeterminateStartingOffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ProgressBar+ProgressBarTemplateSettings,System\Double]
	 */
	public static $IndeterminateEndingOffsetProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ContainerWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Container2Width;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ContainerAnimationStartPosition;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ContainerAnimationEndPosition;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Container2AnimationStartPosition;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Container2AnimationEndPosition;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $IndeterminateStartingOffset;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $IndeterminateEndingOffset;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}