<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DesignMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetPreviewWith_1($target, $control){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetPreviewWith_2($target, $control){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public static function GetPreviewWith_1($target){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public static function GetPreviewWith_2($target){}
}
/**
 */
class Design extends \System\Object
{
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 * @field
	 */
	public readonly $HeightProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 * @field
	 */
	public readonly $WidthProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 * @field
	 */
	public readonly $DataContextProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Control]
	 * @field
	 */
	public readonly $PreviewWithProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Styling\IStyle]
	 * @field
	 */
	public readonly $DesignStyleProperty;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsDesignMode;
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsDesignMode(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected static function set_IsDesignMode($value){}
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
	 * @uses DesignMethodsOverride::SetPreviewWith_1 ($target, $control)
	 * @uses DesignMethodsOverride::SetPreviewWith_2 ($target, $control)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetPreviewWith(mixed ...$args){}
	/**
	 * @uses DesignMethodsOverride::GetPreviewWith_1 ($target)
	 * @uses DesignMethodsOverride::GetPreviewWith_2 ($target)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetPreviewWith(mixed ...$args){}
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
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
