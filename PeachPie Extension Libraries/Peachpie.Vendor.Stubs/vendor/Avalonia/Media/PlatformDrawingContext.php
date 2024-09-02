<?php
namespace Avalonia\Media;
final class PlatformDrawingContext extends \Avalonia\Media\DrawingContext implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \Avalonia\Media\RenderOptions
	 */
	public $RenderOptions;
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $impl
	 * @param \System\Boolean|bool $ownsImpl
	 */
	public function __construct($impl, $ownsImpl){}
}