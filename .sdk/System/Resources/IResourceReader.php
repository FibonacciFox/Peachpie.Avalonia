<?php
namespace System\Resources;
interface IResourceReader
{


	/**
	 * @return \System\Void|void
	 */
	public function Close();
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	public function GetEnumerator();
}