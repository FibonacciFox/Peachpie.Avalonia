<?php
namespace Avalonia\Automation;
/**
 */
class AutomationProperties extends \System\Object
{
	/**
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 * @field
	 */
	public readonly $AcceleratorKeyProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Automation\AccessibilityView]
	 * @field
	 */
	public readonly $AccessibilityViewProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 * @field
	 */
	public readonly $AccessKeyProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 * @field
	 */
	public readonly $AutomationIdProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Nullable_1[Avalonia\Automation\Peers\AutomationControlType]]
	 * @field
	 */
	public readonly $ControlTypeOverrideProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 * @field
	 */
	public readonly $HelpTextProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsColumnHeaderProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsRequiredForFormProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsRowHeaderProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Automation\IsOffscreenBehavior]
	 * @field
	 */
	public readonly $IsOffscreenBehaviorProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 * @field
	 */
	public readonly $ItemStatusProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 * @field
	 */
	public readonly $ItemTypeProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Control]
	 * @field
	 */
	public readonly $LabeledByProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Automation\AutomationLiveSetting]
	 * @field
	 */
	public readonly $LiveSettingProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 * @field
	 */
	public readonly $NameProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 * @field
	 */
	public readonly $PositionInSetProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 * @field
	 */
	public readonly $SizeOfSetProperty;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $AutomationPositionInSetDefault;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $AutomationSizeOfSetDefault;
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function SetAcceleratorKey($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\String|string
	 */
	public static function GetAcceleratorKey($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \Avalonia\Automation\AccessibilityView $value
	 * @return \System\Void|void
	 */
	public static function SetAccessibilityView($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \Avalonia\Automation\AccessibilityView
	 */
	public static function GetAccessibilityView($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function SetAccessKey($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\String|string
	 */
	public static function GetAccessKey($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function SetAutomationId($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\String|string
	 */
	public static function GetAutomationId($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public static function SetControlTypeOverride($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Nullable_1
	 */
	public static function GetControlTypeOverride($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function SetHelpText($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\String|string
	 */
	public static function GetHelpText($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsColumnHeader($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean
	 */
	public static function GetIsColumnHeader($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsRequiredForForm($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean
	 */
	public static function GetIsRequiredForForm($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean
	 */
	public static function GetIsRowHeader($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsRowHeader($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \Avalonia\Automation\IsOffscreenBehavior $value
	 * @return \System\Void|void
	 */
	public static function SetIsOffscreenBehavior($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \Avalonia\Automation\IsOffscreenBehavior
	 */
	public static function GetIsOffscreenBehavior($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function SetItemStatus($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\String|string
	 */
	public static function GetItemStatus($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function SetItemType($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\String|string
	 */
	public static function GetItemType($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \Avalonia\Controls\Control $value
	 * @return \System\Void|void
	 */
	public static function SetLabeledBy($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \Avalonia\Controls\Control
	 */
	public static function GetLabeledBy($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \Avalonia\Automation\AutomationLiveSetting $value
	 * @return \System\Void|void
	 */
	public static function SetLiveSetting($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \Avalonia\Automation\AutomationLiveSetting
	 */
	public static function GetLiveSetting($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function SetName($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\String|string
	 */
	public static function GetName($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function SetPositionInSet($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Int32|int
	 */
	public static function GetPositionInSet($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function SetSizeOfSet($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Int32|int
	 */
	public static function GetSizeOfSet($element){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
