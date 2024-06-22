<?php
namespace Avalonia\Controls;
class DefinitionBase extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_parentIndex;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\DefinitionBase+SharedSizeScope]
	 */
	protected static $PrivateSharedSizeScopeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 */
	public static $SharedSizeGroupProperty;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $SharedSizeGroup;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @return \System\Void|void
	 */
	protected function OnEnterParentTree(){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnExitParentTree(){}
	/**
	 * @param \Avalonia\Controls\Grid $grid
	 * @return \System\Void|void
	 */
	protected function OnBeforeLayout($grid){}
	/**
	 * @param \System\Double|double $minSize
	 * @return \System\Void|void
	 */
	protected function UpdateMinSize($minSize){}
	/**
	 * @param \System\Double|double $minSize
	 * @return \System\Void|void
	 */
	protected function SetMinSize($minSize){}
	/**
	 * @param \Avalonia\AvaloniaObject $d
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected static function OnIsSharedSizeScopePropertyChanged($d, $e){}
	/**
	 * @param \Avalonia\Controls\DefinitionBase $definition
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected static function OnUserSizePropertyChanged($definition, $e){}
	private function SetFlags($value, $flags){}
	private function CheckFlagsAnd($flags){}
	private static function OnSharedSizeGroupPropertyChanged($definition, $e){}
	private static function SharedSizeGroupPropertyValueValid($id){}
	private static function OnPrivateSharedSizeScopePropertyChanged($definition, $e){}
	/**
	 * @param \Avalonia\AvaloniaProperty ...$properties
	 * @return \System\Void|void
	 */
	protected static function AffectsParentMeasure(...$properties){}
	private function GetPropertyChangedSubscribers(){}
}