<?php
namespace Avalonia\Controls\Primitives;
class FlyoutBase extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\FlyoutBase,System\Boolean]
	 */
	public static $IsOpenProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\FlyoutBase,Avalonia\Controls\Control]
	 */
	public static $TargetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\FlyoutBase]
	 */
	public static $AttachedFlyoutProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsOpen;
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 */
	public $Target;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Opened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Opened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Closed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Closed($value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \Avalonia\Controls\Primitives\FlyoutBase
	 */
	public static function GetAttachedFlyout($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @param \Avalonia\Controls\Primitives\FlyoutBase $value
	 * @return \System\Void|void
	 */
	public static function SetAttachedFlyout($element, $value){}
	/**
	 * @param \Avalonia\Controls\Control $flyoutOwner
	 * @return \System\Void|void
	 */
	public static function ShowAttachedFlyout($flyoutOwner){}
	/**
	 * @param \Avalonia\Controls\Control $placementTarget
	 * @return \System\Void|void
	 */
	abstract public function ShowAt($placementTarget);
	/**
	 * @return \System\Void|void
	 */
	abstract public function Hide();
	/**
	 * @return \System\Void|void
	 */
	protected function OnOpened(){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnClosed(){}
	private function GetPropertyChangedSubscribers(){}
}