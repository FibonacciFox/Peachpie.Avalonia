<?php
namespace Avalonia\Rendering\Composition;
/**
 */
interface ICompositorSerializable
{
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 */
	public function TryGetServer($c);
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 */
	public function SerializeChanges($c, $writer);
}
