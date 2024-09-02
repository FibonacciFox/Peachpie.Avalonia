<?php
namespace Avalonia\Media;
interface ISceneBrushContent
{

	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\Nullable_1 $transform [generic: Avalonia\Matrix]
	 * @return \System\Void|void
	 */
	public function Render($context, $transform);
}