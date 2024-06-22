<?php
namespace Avalonia\Media\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CroppedBitmapOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Media\IImage $source
	 * @param \Avalonia\PixelRect $sourceRect
	 */
	#[MethodOverride]public function __construct_2 ($source, $sourceRect){}
}
class CroppedBitmap extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IImage,
	\Avalonia\Media\IAffectsRender,
	\System\IDisposable
{
	use CroppedBitmapOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IImage]
	 */
	public static $SourceProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\PixelRect]
	 */
	public static $SourceRectProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\IImage
	 */
	public $Source;
	/**
	 * @property
	 * @var \Avalonia\PixelRect
	 */
	public $SourceRect;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Invalidated($value){}
	private function SourceChanged($e){}
	private function SourceRectChanged($e){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	public function Draw($context, $sourceRect, $destRect){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses CroppedBitmapOverride::__construct_1 <br>public , args: ()<br>
	 * @uses CroppedBitmapOverride::__construct_2 <br>public , args: ($source, $sourceRect)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}