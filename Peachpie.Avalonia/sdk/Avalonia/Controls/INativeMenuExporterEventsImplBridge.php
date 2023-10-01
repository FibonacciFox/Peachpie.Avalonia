<?php
namespace Avalonia\Controls;
/**
 */
interface INativeMenuExporterEventsImplBridge
{
	/**
	 */
	public function RaiseNeedsUpdate();
	/**
	 */
	public function RaiseOpening();
	/**
	 */
	public function RaiseClosed();
}
