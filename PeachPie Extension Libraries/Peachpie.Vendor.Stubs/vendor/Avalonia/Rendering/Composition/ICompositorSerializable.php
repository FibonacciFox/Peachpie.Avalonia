<?php
namespace Avalonia\Rendering\Composition;
interface ICompositorSerializable
{

	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @return \Avalonia\Rendering\Composition\Server\SimpleServerObject
	 */
	public function TryGetServer($c);
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @return \System\Void|void
	 */
	public function SerializeChanges($c, $writer);
}