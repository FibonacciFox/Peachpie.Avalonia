<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 */
class ClassicDesktopStyleApplicationLifetime extends \System\Object implements 
	\Avalonia\Controls\ApplicationLifetimes\IClassicDesktopStyleApplicationLifetime,
	\Avalonia\Controls\ApplicationLifetimes\IControlledApplicationLifetime,
	\Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime,
	\System\IDisposable
{
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $Args;
	/**
	 * @var \Avalonia\Controls\ShutdownMode
	 * @property
	 */
	public $ShutdownMode;
	/**
	 * @var \Avalonia\Controls\Window
	 * @property
	 */
	public $MainWindow;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\Window]
	 * @property
	 */
	public readonly $Windows;
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnWindowClosed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnWindowOpened($sender, $e){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Startup($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Startup($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ShutdownRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ShutdownRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Exit($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Exit($value){}
	/**
	 * @return \System\String[]
	 */
	public  function get_Args(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_Args($value){}
	/**
	 * @return \Avalonia\Controls\ShutdownMode
	 */
	public  function get_ShutdownMode(){}
	/**
	 * @param \Avalonia\Controls\ShutdownMode $value
	 * @return \System\Void|void
	 */
	public  function set_ShutdownMode($value){}
	/**
	 * @return \Avalonia\Controls\Window
	 */
	public  function get_MainWindow(){}
	/**
	 * @param \Avalonia\Controls\Window $value
	 * @return \System\Void|void
	 */
	public  function set_MainWindow($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_Windows(){}
	/**
	 * @param \Avalonia\Controls\Window $window
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleWindowClosed($window){}
	/**
	 * @param \System\Int32|int $exitCode
	 * @return \System\Void|void
	 */
	public  function Shutdown($exitCode){}
	/**
	 * @param \System\Int32|int $exitCode
	 * @return \System\Boolean
	 */
	public  function TryShutdown($exitCode){}
	/**
	 * @param \System\String[] $args
	 * @return \System\Int32|int
	 */
	public  function Start($args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShowMainWindow(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Controls\ApplicationLifetimes\ShutdownRequestedEventArgs $e
	 * @param \System\Boolean $isProgrammatic
	 * @param \System\Boolean $force
	 * @param \System\Int32|int $exitCode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DoShutdown($e, $isProgrammatic, $force, $exitCode){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\ApplicationLifetimes\ShutdownRequestedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnShutdownRequested($sender, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
