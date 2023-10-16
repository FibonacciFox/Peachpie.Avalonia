<?php
namespace System\Diagnostics\SymbolStore;
/**
 */
interface ISymbolDocumentWriter
{
	/**
	 * @param \System\Guid $algorithmId
	 * @param \System\Byte[] $checkSum
	 */
	public function SetCheckSum($algorithmId, $checkSum);
	/**
	 * @param \System\Byte[] $source
	 */
	public function SetSource($source);
}
