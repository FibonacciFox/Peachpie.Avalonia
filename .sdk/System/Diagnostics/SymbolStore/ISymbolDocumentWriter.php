<?php
namespace System\Diagnostics\SymbolStore;
interface ISymbolDocumentWriter
{


	/**
	 * @param \System\Guid $algorithmId
	 * @param \System\Byte $checkSum
	 * @return \System\Void|void
	 */
	public function SetCheckSum($algorithmId, $checkSum);
	/**
	 * @param \System\Byte $source
	 * @return \System\Void|void
	 */
	public function SetSource($source);
}