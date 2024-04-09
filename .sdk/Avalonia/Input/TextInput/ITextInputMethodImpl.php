<?php
namespace Avalonia\Input\TextInput;
interface ITextInputMethodImpl
{

	/**
	 * @param \Avalonia\Input\TextInput\TextInputMethodClient $client
	 * @return \System\Void|void
	 */
	public function SetClient($client);
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function SetCursorRect($rect);
	/**
	 * @param \Avalonia\Input\TextInput\TextInputOptions $options
	 * @return \System\Void|void
	 */
	public function SetOptions($options);
	/**
	 * @return \System\Void|void
	 */
	public function Reset();
}