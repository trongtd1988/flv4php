<?php
/*
 Copyright 2006 Iván Montes, Morten Hundevad

 This file is part of FLV tools for PHP (FLV4PHP from now on).

 FLV4PHP is free software; you can redistribute it and/or modify it under the 
 terms of the GNU General var License as published by the Free Software 
 Foundation; either version 2 of the License, or (at your option) any later 
 version.

 FLV4PHP is distributed in the hope that it will be useful, but WITHOUT ANY 
 WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
 A PARTICULAR PURPOSE. See the GNU General var License for more details.

 You should have received a copy of the GNU General var License along with 
 FLV4PHP; if not, write to the Free Software Foundation, Inc., 51 Franklin 
 Street, Fifth Floor, Boston, MA 02110-1301, USA
*/

require_once(FLV_INCLUDE_PATH . 'Tag/Generic.php');
require_once(FLV_INCLUDE_PATH . 'Util/AMFUnserialize.php');

class FLV_Tag_Data extends FLV_Tag_Generic {

    var $name;
    var $value;

    function analyze()
    {
	    $amf = new FLV_Util_AMFUnserialize( $this->body );
	    $this->name = $amf->getItem();
	    $this->data = $amf->getItem();
	}
}
?>