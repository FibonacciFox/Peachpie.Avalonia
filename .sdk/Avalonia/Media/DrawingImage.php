<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DrawingImageOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Media\Drawing $drawing
	 */
	#[MethodOverride]public function __construct_2 ($drawing){}
}
class DrawingImage extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IImage,
	\Avalonia\Media\IAffectsRender
{
	use DrawingImageOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Drawing]
	 */
	public static $DrawingProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\Drawing
	 */
	public $Drawing;
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
	private function Draw($context, $sourceRect, $destRect){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected function RaiseInvalidated($e){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses DrawingImageOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DrawingImageOverride::__construct_2 <br>public , args: ($drawing)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}