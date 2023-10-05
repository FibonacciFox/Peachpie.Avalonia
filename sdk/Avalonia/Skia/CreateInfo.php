<?php
namespace Avalonia\Skia;
/**
 */
class CreateInfo extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Width;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Height;
	/**
	 * @var \Avalonia\Vector
	 * @field
	 */
	public $Dpi;
	/**
	 * @var \System\Nullable_1[Avalonia\Platform\PixelFormat]
	 * @field
	 */
	public $Format;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $DisableTextLcdRendering;
	/**
	 * @var \SkiaSharp\GRContext
	 * @field
	 */
	public $GrContext;
	/**
	 * @var \Avalonia\Skia\ISkiaGpu
	 * @field
	 */
	public $Gpu;
	/**
	 * @var \Avalonia\Skia\ISkiaGpuRenderSession
	 * @field
	 */
	public $Session;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $DisableManualFbo;
}
