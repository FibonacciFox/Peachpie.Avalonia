<?php
namespace Avalonia\Animation;
class AnimatorKeyFrame extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\AnimatorKeyFrame,System\Object]
	 */
	public static $ValueProperty;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $AnimatorType;
	/**
	 * @property
	 * @var \System\Func_1[Avalonia\Animation\IAnimator]
	 * @since readonly
	 */
	public $AnimatorFactory;
	/**
	 * @property
	 * @var \Avalonia\Animation\Cue
	 * @since readonly
	 */
	public $Cue;
	/**
	 * @property
	 * @var \Avalonia\Animation\KeySpline
	 * @since readonly
	 */
	public $KeySpline;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $FillBefore;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $FillAfter;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Value;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\Animation\IAnimationSetter $setter
	 * @param \Avalonia\Animation\Animatable $targetControl
	 * @return \System\IDisposable
	 */
	public function BindSetter($setter, $targetControl){}
	/**
	 * @return \T|object
	 */
	public function GetTypedValue(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @param \System\Type $animatorType
	 * @param \System\Func_1 $animatorFactory [generic: Avalonia\Animation\IAnimator]
	 * @param \Avalonia\Animation\Cue $cue
	 * @param \Avalonia\Animation\KeySpline $keySpline
	 */
	public function __construct($animatorType, $animatorFactory, $cue, $keySpline){}
}