<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum D3D11_BIND_FLAG implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case D3D11_BIND_VERTEX_BUFFER = 1;
	case D3D11_BIND_INDEX_BUFFER = 2;
	case D3D11_BIND_CONSTANT_BUFFER = 4;
	case D3D11_BIND_SHADER_RESOURCE = 8;
	case D3D11_BIND_STREAM_OUTPUT = 16;
	case D3D11_BIND_RENDER_TARGET = 32;
	case D3D11_BIND_DEPTH_STENCIL = 64;
	case D3D11_BIND_UNORDERED_ACCESS = 128;
	case D3D11_BIND_DECODER = 512;
	case D3D11_BIND_VIDEO_ENCODER = 1024;
}
