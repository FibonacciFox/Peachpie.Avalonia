<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositionSimpleRadialGradientBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleGradientBrush implements
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IRadialGradientBrush
{
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfCenterProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfGradientOriginProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfRadiusProperty;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $Center;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $GradientOrigin;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Radius;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\IGradientStop]
	 * @since readonly
	 */
	public $GradientStops;
	/**
	 * @property
	 * @var \Avalonia\Media\GradientSpreadMethod
	 * @since readonly
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