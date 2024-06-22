<?php
namespace Avalonia\Media;
final class BlurEffect extends \Avalonia\Media\Effect implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IAffectsRender,
	\Avalonia\Media\IBlurEffect,
	\Avalonia\Media\IEffect,
	\Avalonia\Media\IMutableEffect
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $RadiusProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Radius;
	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @return \Avalonia\Media\IImmutableEffect
	 */
	public function ToImmutable(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}