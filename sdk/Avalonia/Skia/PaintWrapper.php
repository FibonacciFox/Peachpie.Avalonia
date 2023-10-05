<?php
namespace Avalonia\Skia;
/**
 */
class PaintWrapper extends \System\ValueType implements 
	\System\IDisposable
{
	/**
	 * @var \SkiaSharp\SKPaint
	 * @field
	 */
	public readonly $Paint;
	/**
	 * @param \SkiaSharp\SKPaint $paint
	 * @return \System\IDisposable
	 */
	public  function ApplyTo($paint){}
	/**
	 * @param \System\IDisposable $disposable
	 * @return \System\Void|void
	 */
	public  function AddDisposable($disposable){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
}
