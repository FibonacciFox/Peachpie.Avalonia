<?php
namespace Avalonia\Controls;
final class LayoutDiagnosticBridge extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @return \System\Void|void
	 */
	public function SetupBridge(){}
	private function OnDiagnosticsPropertyChanged($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\RendererDiagnostics $diagnostics
	 * @param \Avalonia\Layout\LayoutManager $layoutManager
	 */
	public function __construct($diagnostics, $layoutManager){}
}