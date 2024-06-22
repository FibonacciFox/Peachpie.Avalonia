<?php
namespace Avalonia\Rendering\Composition\Animations;
interface IKeyFrames
{


	/**
	 * @param \System\Single $normalizedProgressKey
	 * @param \System\String|string $value
	 * @param \Avalonia\Animation\Easings\IEasing $easingFunction
	 * @return \System\Void|void
	 */
	public function InsertExpressionKeyFrame($normalizedProgressKey, $value, $easingFunction);
}