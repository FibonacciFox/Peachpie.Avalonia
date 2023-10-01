<?php
namespace Avalonia\Controls;
/**
 */
class TextBoxTextInputMethodClient extends \Avalonia\Input\TextInput\TextInputMethodClient
{
	/**
	 * @param \Avalonia\Controls\Presenters\TextPresenter $presenter
	 * @param \Avalonia\Controls\TextBox $parent
	 * @return \System\Void|void
	 */
	public  function SetPresenter($presenter, $parent){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTextLineText($textLine){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnParentPropertyChanged($sender, $e){}
}
