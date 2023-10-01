<?php
namespace Avalonia\Input\TextInput;
/**
 */
interface ITextInputMethodImpl
{
	/**
	 * @param \Avalonia\Input\TextInput\TextInputMethodClient $client
	 */
	public function SetClient($client);
	/**
	 * @param \Avalonia\Rect $rect
	 */
	public function SetCursorRect($rect);
	/**
	 * @param \Avalonia\Input\TextInput\TextInputOptions $options
	 */
	public function SetOptions($options);
	/**
	 */
	public function Reset();
}
