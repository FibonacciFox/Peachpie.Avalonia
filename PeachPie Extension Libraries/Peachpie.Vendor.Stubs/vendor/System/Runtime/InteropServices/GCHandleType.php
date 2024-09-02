<?php
namespace System\Runtime\InteropServices;
enum GCHandleType
{
	
	case Weak = '0';
	case WeakTrackResurrection = '1';
	case Normal = '2';
	case Pinned = '3';

}