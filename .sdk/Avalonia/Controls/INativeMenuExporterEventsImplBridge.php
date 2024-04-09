<?php
namespace Avalonia\Controls;
interface INativeMenuExporterEventsImplBridge
{

	/**
	 * @return \System\Void|void
	 */
	public function RaiseNeedsUpdate();
	/**
	 * @return \System\Void|void
	 */
	public function RaiseOpening();
	/**
	 * @return \System\Void|void
	 */
	public function RaiseClosed();
}