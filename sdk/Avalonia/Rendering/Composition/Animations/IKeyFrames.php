<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
interface IKeyFrames
{
	/**
	 * @param \System\Single $normalizedProgressKey
	 * @param \System\String|string $value
	 * @param \Avalonia\Animation\Easings\IEasing $easingFunction
	 */
	public function InsertExpressionKeyFrame($normalizedProgressKey, $value, $easingFunction);
}
