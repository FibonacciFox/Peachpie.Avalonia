<?php
namespace Avalonia\Controls;
final class ToolTipService extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Controls\ToolTipService
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function TipChanged($e){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function TipOpenChanged($e){}
	private function ControlDetaching($sender, $e){}
	private function ControlPointerEntered($sender, $e){}
	private function ControlPointerExited($sender, $e){}
	private function ControlEffectiveViewportChanged($sender, $e){}
	private function ToolTipClosed($sender, $e){}
	private function ToolTipPointerExited($sender, $e){}
	private function StartShowTimer($showDelay, $control){}
	private function Open($control){}
	private function Close($control){}
	private function StopTimer(){}
}