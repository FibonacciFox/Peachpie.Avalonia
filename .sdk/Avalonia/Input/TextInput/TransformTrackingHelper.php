<?php
namespace Avalonia\Input\TextInput;
class TransformTrackingHelper extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Matrix]
	 */
	public $Matrix;
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public function SetVisual($visual){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function add_MatrixChanged($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function remove_MatrixChanged($value){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function SubscribeToParents(){}
	private function UnsubscribeFromParents(){}
	private function UpdateMatrix(){}
	private function OnAttachedToVisualTree($sender, $visualTreeAttachmentEventArgs){}
	private function EnqueueForUpdate(){}
	private function PropertyChangedHandler($sender, $e){}
	private function OnDetachedFromVisualTree($sender, $visualTreeAttachmentEventArgs){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \System\Action_2 $cb [generic: Avalonia\Visual,System\Nullable_1[Avalonia\Matrix]
	 * @return \System\IDisposable
	 */
	public static function Track($visual, $cb){}
	/**
	 */
	public function __construct(){}
}