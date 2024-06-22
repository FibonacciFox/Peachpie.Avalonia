<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositionSimpleGradientBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleBrush implements
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IGradientBrush
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\IGradientStop]
	 * @since readonly
	 */
	public $GradientStops;
	/**
	 * @property
	 * @var \Avalonia\Media\GradientSpreadMethod
	 */
	public $SpreadMethod;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $TransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;

}