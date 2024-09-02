<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositionSimpleTransform extends \Avalonia\Rendering\Composition\Server\SimpleServerRenderResource implements
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\ITransform
{
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfValueProperty;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 */
	public $Value;
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
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @param \Avalonia\Matrix $value
	 * @return \System\Void|void
	 */
	protected static function SerializeAllChanges($writer, $value){}
}