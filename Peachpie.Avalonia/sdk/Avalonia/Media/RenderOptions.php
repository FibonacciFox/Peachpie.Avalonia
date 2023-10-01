<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RenderOptionsMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class RenderOptions extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Media\Imaging\BitmapInterpolationMode
	 */
	public  function get_BitmapInterpolationMode(){}
	/**
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $value
	 * @return \System\Void|void
	 */
	public  function set_BitmapInterpolationMode($value){}
	/**
	 * @return \Avalonia\Media\EdgeMode
	 */
	public  function get_EdgeMode(){}
	/**
	 * @param \Avalonia\Media\EdgeMode $value
	 * @return \System\Void|void
	 */
	public  function set_EdgeMode($value){}
	/**
	 * @return \Avalonia\Media\TextRenderingMode
	 */
	public  function get_TextRenderingMode(){}
	/**
	 * @param \Avalonia\Media\TextRenderingMode $value
	 * @return \System\Void|void
	 */
	public  function set_TextRenderingMode($value){}
	/**
	 * @return \Avalonia\Media\Imaging\BitmapBlendingMode
	 */
	public  function get_BitmapBlendingMode(){}
	/**
	 * @param \Avalonia\Media\Imaging\BitmapBlendingMode $value
	 * @return \System\Void|void
	 */
	public  function set_BitmapBlendingMode($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_RequiresFullOpacityHandling(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_RequiresFullOpacityHandling($value){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Media\Imaging\BitmapInterpolationMode
	 */
	public static function GetBitmapInterpolationMode($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $value
	 * @return \System\Void|void
	 */
	public static function SetBitmapInterpolationMode($visual, $value){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Media\Imaging\BitmapBlendingMode
	 */
	public static function GetBitmapBlendingMode($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Media\Imaging\BitmapBlendingMode $value
	 * @return \System\Void|void
	 */
	public static function SetBitmapBlendingMode($visual, $value){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Media\EdgeMode
	 */
	public static function GetEdgeMode($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Media\EdgeMode $value
	 * @return \System\Void|void
	 */
	public static function SetEdgeMode($visual, $value){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Media\TextRenderingMode
	 */
	public static function GetTextRenderingMode($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Media\TextRenderingMode $value
	 * @return \System\Void|void
	 */
	public static function SetTextRenderingMode($visual, $value){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Nullable_1
	 */
	public static function GetRequiresFullOpacityHandling($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public static function SetRequiresFullOpacityHandling($visual, $value){}
	/**
	 * @param \Avalonia\Media\RenderOptions $other
	 * @return \Avalonia\Media\RenderOptions
	 */
	public  function MergeWith($other){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\RenderOptions $left
	 * @param \Avalonia\Media\RenderOptions $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\RenderOptions $left
	 * @param \Avalonia\Media\RenderOptions $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses RenderOptionsMethodsOverride::Equals_1 ($obj)
	 * @uses RenderOptionsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
