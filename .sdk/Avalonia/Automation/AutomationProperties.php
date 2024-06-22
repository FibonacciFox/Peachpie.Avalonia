<?php
namespace Avalonia\Automation;
class AutomationProperties extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 */
	public static $AcceleratorKeyProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Automation\AccessibilityView]
	 */
	public static $AccessibilityViewProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 */
	public static $AccessKeyProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 */
	public static $AutomationIdProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Nullable_1[Avalonia\Automation\Peers\AutomationControlType]]
	 */
	public static $ControlTypeOverrideProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 */
	public static $HelpTextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsColumnHeaderProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsRequiredForFormProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsRowHeaderProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Automation\IsOffscreenBehavior]
	 */
	public static $IsOffscreenBehaviorProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 */
	public static $ItemStatusProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 */
	public static $ItemTypeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Control]
	 */
	public static $LabeledByProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Automation\AutomationLiveSetting]
	 */
	public static $LiveSettingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\String]
	 */
	public static $NameProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 */
	public static $PositionInSetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 */
	public static $SizeOfSetProperty;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const AutomationPositionInSetDefault = '-1';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const AutomationSizeOfSetDefault = '-1';
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
	 * @param \System\Nullable_1 $value [generic: Avalonia\Automation\Peers\AutomationControlType]
	 * @return \System\Void|void
	 */
	public static function SetControlTypeOverride($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Nullable_1[Avalonia\Automation\Peers\AutomationControlType]
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
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsColumnHeader($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean|bool
	 */
	public static function GetIsColumnHeader($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsRequiredForForm($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean|bool
	 */
	public static function GetIsRequiredForForm($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean|bool
	 */
	public static function GetIsRowHeader($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean|bool $value
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
}