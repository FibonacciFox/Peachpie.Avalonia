<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositor2
{
	/**
	 */
	public function CreateAmbientLight();
	/**
	 */
	public function CreateAnimationGroup();
	/**
	 */
	public function CreateBackdropBrush();
	/**
	 */
	public function CreateDistantLight();
	/**
	 */
	public function CreateDropShadow();
	/**
	 */
	public function CreateImplicitAnimationCollection();
	/**
	 */
	public function CreateLayerVisual();
	/**
	 */
	public function CreateMaskBrush();
	/**
	 */
	public function CreateNineGridBrush();
	/**
	 */
	public function CreatePointLight();
	/**
	 */
	public function CreateSpotLight();
	/**
	 */
	public function CreateStepEasingFunction();
	/**
	 * @param \System\Int32|int $stepCount
	 */
	public function CreateStepEasingFunctionWithStepCount($stepCount);
}
