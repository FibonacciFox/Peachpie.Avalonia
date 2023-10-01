<?php
namespace Avalonia\Controls;
/**
 */
class RefreshRequestedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @return \Avalonia\Controls\RefreshCompletionDeferral
	 */
	public  function GetDeferral(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function IncrementCount(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function DecrementCount(){}
}
