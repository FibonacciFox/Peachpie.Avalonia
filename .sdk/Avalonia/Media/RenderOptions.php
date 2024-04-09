<?php
namespace Avalonia\Media;
final class RenderOptions extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Media\Imaging\BitmapInterpolationMode
	 */
	public $BitmapInterpolationMode;
	/**
	 * @property
	 * @var \Avalonia\Media\EdgeMode
	 */
	public $EdgeMode;
	/**
	 * @property
	 * @var \Avalonia\Media\TextRenderingMode
	 */
	public $TextRenderingMode;
	/**
	 * @property
	 * @var \Avalonia\Media\Imaging\BitmapBlendingMode
	 */
	public $BitmapBlendingMode;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Boolean]
	 */
	public $RequiresFullOpacityHandling;
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
	 * @return \System\Nullable_1[System\Boolean]
	 */
	public static function GetRequiresFullOpacityHandling($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \System\Nullable_1 $value [generic: System\Boolean]
	 * @return \System\Void|void
	 */
	public static function SetRequiresFullOpacityHandling($visual, $value){}
	/**
	 * @param \Avalonia\Media\RenderOptions $other
	 * @return \Avalonia\Media\RenderOptions
	 */
	public function MergeWith($other){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\RenderOptions $left
	 * @param \Avalonia\Media\RenderOptions $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\RenderOptions $left
	 * @param \Avalonia\Media\RenderOptions $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}