<?php

//================================================================================
// (c)2014 Bradford Technologies, Inc., All Rights Reserved
//
// This document contains trade secret data that belongs to Bradford Technologies, Inc.
// and is protected by the copyright laws. Information herein may not be
// used, copied or disclosed in whole or part without prior written
// consent from Bradford Technologies, Inc..
//
// File:          BTPhotoTest.php
// Author:        Gavin
// Create Date:   October 10, 2014
// Description:   This file contains the unit tests for the BTPhoto class.
//
// Assumptions:
// Modified Date: 10/10/2014
//
//================================================================================

namespace  Foo;

class BarTest extends \PHPUnit_Framework_TestCase
{
    public function testBarFunctionTest()
    {
        $expected = "Hello Test!";
        $bar = new Bar;

        $acutal = $bar->test();
        $this->assertSame($expected, $acutal);
    }
}
