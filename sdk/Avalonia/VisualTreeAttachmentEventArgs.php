<?php
namespace Avalonia;
/**
 */
class VisualTreeAttachmentEventArgs extends \System\EventArgs
{
	/**
	 * @return \Avalonia\Visual
	 */
	public  function get_Parent(){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	public  function get_Root(){}
}
