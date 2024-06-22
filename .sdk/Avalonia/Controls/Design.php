<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DesignOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetPreviewWith_1 ($target, $control){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\ResourceDictionary $target
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetPreviewWith_2 ($target, $control){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $target
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride]public static function GetPreviewWith_1 ($target){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\ResourceDictionary $target
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride]public static function GetPreviewWith_2 ($target){}
}
class Design extends \System\Object
{
	use DesignOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 */
	public static $HeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 */
	public static $WidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $DataContextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Control]
	 */
	public static $PreviewWithProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Styling\IStyle]
	 */
	public static $DesignStyleProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsDesignMode;
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function SetHeight($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetHeight($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function SetWidth($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetWidth($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetDataContext($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Object|object
	 */
	public static function GetDataContext($control){}
	/**
	 * @uses DesignOverride::SetPreviewWith_1 <br>public , args: ($target, $control)<br>
	 * @uses DesignOverride::SetPreviewWith_2 <br>public , args: ($target, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetPreviewWith (\override ...$args){}
	/**
	 * @uses DesignOverride::GetPreviewWith_1 <br>public , args: ($target)<br>
	 * @uses DesignOverride::GetPreviewWith_2 <br>public , args: ($target)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Controls\Control|mixed|\override
	 */
	#[MethodOverridePublic]function GetPreviewWith (\override ...$args){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Styling\IStyle $value
	 * @return \System\Void|void
	 */
	public static function SetDesignStyle($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Styling\IStyle
	 */
	public static function GetDesignStyle($control){}
	/**
	 * @param \Avalonia\Controls\Control $target
	 * @param \Avalonia\Controls\Control $source
	 * @return \System\Void|void
	 */
	public static function ApplyDesignModeProperties($target, $source){}
}