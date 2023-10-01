<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SkiaSharpExtensionsMethodsOverride
{
	/**
	 * @return \SkiaSharp\SKPoint
	 */
	#[MethodOverride] public static function ToSKPoint_1($p){}
	/**
	 * @return \SkiaSharp\SKPoint
	 */
	#[MethodOverride] public static function ToSKPoint_2($p){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function ToAvalonia_1($colorType){}
	/**
	 * @return \Avalonia\Media\TextAlignment
	 */
	#[MethodOverride] public static function ToAvalonia_2($a){}
	/**
	 * @return \Avalonia\Media\FontStyle
	 */
	#[MethodOverride] public static function ToAvalonia_3($slant){}
}
/**
 */
class SkiaSharpExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \SkiaSharp\SKFilterQuality
	 */
	public static function ToSKFilterQuality($interpolationMode){}
	/**
	 * @param \Avalonia\Media\Imaging\BitmapBlendingMode $blendingMode
	 * @return \SkiaSharp\SKBlendMode
	 */
	public static function ToSKBlendMode($blendingMode){}
	/**
	 * @uses SkiaSharpExtensionsMethodsOverride::ToSKPoint_1 ($p)
	 * @uses SkiaSharpExtensionsMethodsOverride::ToSKPoint_2 ($p)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToSKPoint(mixed ...$args){}
	/**
	 * @param \Avalonia\Rect $r
	 * @return \SkiaSharp\SKRect
	 */
	public static function ToSKRect($r){}
	/**
	 * @param \Avalonia\RoundedRect $r
	 * @return \SkiaSharp\SKRoundRect
	 */
	public static function ToSKRoundRect($r){}
	/**
	 * @param \SkiaSharp\SKRect $r
	 * @return \Avalonia\Rect
	 */
	public static function ToAvaloniaRect($r){}
	/**
	 * @param \Avalonia\Matrix $m
	 * @return \SkiaSharp\SKMatrix
	 */
	public static function ToSKMatrix($m){}
	/**
	 * @param \Avalonia\Media\Color $c
	 * @return \SkiaSharp\SKColor
	 */
	public static function ToSKColor($c){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $fmt
	 * @return \SkiaSharp\SKColorType
	 */
	public static function ToSkColorType($fmt){}
	/**
	 * @uses SkiaSharpExtensionsMethodsOverride::ToAvalonia_1 ($colorType)
	 * @uses SkiaSharpExtensionsMethodsOverride::ToAvalonia_2 ($a)
	 * @uses SkiaSharpExtensionsMethodsOverride::ToAvalonia_3 ($slant)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToAvalonia(mixed ...$args){}
	/**
	 * @param \SkiaSharp\SKColorType $fmt
	 * @return \Avalonia\Platform\PixelFormat
	 */
	public static function ToPixelFormat($fmt){}
	/**
	 * @param \Avalonia\Platform\AlphaFormat $fmt
	 * @return \SkiaSharp\SKAlphaType
	 */
	public static function ToSkAlphaType($fmt){}
	/**
	 * @param \SkiaSharp\SKAlphaType $fmt
	 * @return \Avalonia\Platform\AlphaFormat
	 */
	public static function ToAlphaFormat($fmt){}
	/**
	 * @param \Avalonia\Media\GradientSpreadMethod $m
	 * @return \SkiaSharp\SKShaderTileMode
	 */
	public static function ToSKShaderTileMode($m){}
	/**
	 * @param \Avalonia\Media\TextAlignment $a
	 * @return \SkiaSharp\SKTextAlign
	 */
	public static function ToSKTextAlign($a){}
	/**
	 * @param \SkiaSharp\SKPath $src
	 * @return \SkiaSharp\SKPath
	 */
	public static function Clone($src){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
