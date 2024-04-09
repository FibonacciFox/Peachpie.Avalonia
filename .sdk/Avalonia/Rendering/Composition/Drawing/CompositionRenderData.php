<?php
namespace Avalonia\Rendering\Composition\Drawing;
class CompositionRenderData extends \System\Object implements
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\System\IDisposable
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Drawing\ServerCompositionRenderData
	 * @since readonly
	 */
	public $Server;
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource $resource
	 * @return \System\Void|void
	 */
	public function AddResource($resource){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @return \Avalonia\Rendering\Composition\Server\SimpleServerObject
	 */
	public function TryGetServer($c){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @return \System\Void|void
	 */
	public function SerializeChanges($c, $writer){}
	/**
	 * @param \Avalonia\Point $pt
	 * @return \System\Boolean|bool
	 */
	public function HitTest($pt){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 */
	public function __construct($compositor){}
}