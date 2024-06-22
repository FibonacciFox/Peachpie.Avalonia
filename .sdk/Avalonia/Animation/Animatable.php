<?php
namespace Avalonia\Animation;
class Animatable extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Animation\IClock]
	 */
	protected static $ClockProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Animation\Transitions]
	 */
	public static $TransitionsProperty;
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
	 * @return \System\Void|void
	 */
	protected function EnableTransitions(){}
	/**
	 * @return \System\Void|void
	 */
	protected function DisableTransitions(){}
	private function TransitionsCollectionChanged($sender, $e){}
	private function AddTransitions($items){}
	private function RemoveTransitions($items){}
	private function GetAnimationBaseValue($property){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}