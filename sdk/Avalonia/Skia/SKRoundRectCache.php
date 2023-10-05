<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SKRoundRectCacheMethodsOverride
{
	/**
	 * @return \SkiaSharp\SKRoundRect
	 */
	#[MethodOverride] public  function GetAndSetRadii_1($rectangle, $roundedRect){}
	/**
	 * @return \SkiaSharp\SKRoundRect
	 */
	#[MethodOverride] public  function GetAndSetRadii_2($rectangle, $radii){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Clear_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Clear_2(){}
}
/**
 */
class SKRoundRectCache extends \Avalonia\Skia\SKCacheBase_2
{
	/**
	 * @var \System\Collections\Concurrent\ConcurrentBag_1[SkiaSharp\SKRoundRect]
	 * @field
	 */
	protected readonly $Cache;
	/**
	 * @uses SKRoundRectCacheMethodsOverride::GetAndSetRadii_1 ($rectangle, $roundedRect)
	 * @uses SKRoundRectCacheMethodsOverride::GetAndSetRadii_2 ($rectangle, $radii)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAndSetRadii(mixed ...$args){}
	/**
	 * @param \SkiaSharp\SKRoundRect $rect
	 * @return \System\Void|void
	 */
	public  function ReturnReset($rect){}
	/**
	 * @uses SKRoundRectCacheMethodsOverride::Clear_1 ()
	 * @uses SKRoundRectCacheMethodsOverride::Clear_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
}
