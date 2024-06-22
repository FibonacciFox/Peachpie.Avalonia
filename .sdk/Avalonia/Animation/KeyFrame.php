<?php
namespace Avalonia\Animation;
final class KeyFrame extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @property
	 * @var \Avalonia\Collections\AvaloniaList_1[Avalonia\Animation\IAnimationSetter]
	 * @since readonly
	 */
	public $Setters;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $KeyTime;
	/**
	 * @property
	 * @var \Avalonia\Animation\Cue
	 */
	public $Cue;
	/**
	 * @property
	 * @var \Avalonia\Animation\KeySpline
	 */
	public $KeySpline;
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