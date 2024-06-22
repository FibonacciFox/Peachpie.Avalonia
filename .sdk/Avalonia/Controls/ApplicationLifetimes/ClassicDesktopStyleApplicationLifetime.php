<?php
namespace Avalonia\Controls\ApplicationLifetimes;
class ClassicDesktopStyleApplicationLifetime extends \System\Object implements
	\Avalonia\Controls\ApplicationLifetimes\IClassicDesktopStyleApplicationLifetime,
	\Avalonia\Controls\ApplicationLifetimes\IControlledApplicationLifetime,
	\Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $Args;
	/**
	 * @property
	 * @var \Avalonia\Controls\ShutdownMode
	 */
	public $ShutdownMode;
	/**
	 * @property
	 * @var \Avalonia\Controls\Window
	 */
	public $MainWindow;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\Window]
	 * @since readonly
	 */
	public $Windows;
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ApplicationLifetimes\ControlledApplicationLifetimeStartupEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Startup($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ApplicationLifetimes\ControlledApplicationLifetimeStartupEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Startup($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ApplicationLifetimes\ShutdownRequestedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_ShutdownRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ApplicationLifetimes\ShutdownRequestedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_ShutdownRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ApplicationLifetimes\ControlledApplicationLifetimeExitEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Exit($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ApplicationLifetimes\ControlledApplicationLifetimeExitEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Exit($value){}
	private function HandleWindowClosed($window){}
	/**
	 * @param \System\Int32|int $exitCode
	 * @return \System\Void|void
	 */
	public function Shutdown($exitCode){}
	/**
	 * @param \System\Int32|int $exitCode
	 * @return \System\Boolean|bool
	 */
	public function TryShutdown($exitCode){}
	/**
	 * @return \System\Void|void
	 */
	protected function SubscribeGlobalEvents(){}
	/**
	 * @param \System\String $args
	 * @return \System\Void|void
	 */
	protected function SetupCore($args){}
	/**
	 * @param \System\String $args
	 * @return \System\Int32|int
	 */
	public function Start($args){}
	private function ShowMainWindow(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function DoShutdown($e, $isProgrammatic, $force, $exitCode){}
	private function OnShutdownRequested($sender, $e){}
	/**
	 */
	public function __construct(){}
}