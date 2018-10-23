-------

# IMAGE FLOATING TO LEFT OR RIGHT BBCODE v1.22

[**By Dougiefresh**](http://www.simplemachines.org/community/index.php?action=profile;u=253913) -> [Link to Mod](http://custom.simplemachines.org/mods/index.php?mod=3983)

-------

## Introduction
This modification adds two BBCodes to allow a user to float an image to the left or right of the text.

The two BBCodes takes these forms:
    
    [imgleft]{url}[/imgleft]
    [imgright]{url}[/imgright]
    [imgleft {params}]{url}[/imgleft]
    [imgright {params}]{url}[/imgright]
    
where **{url}** is the image URL and the optional acceptable parameters are:
    
    **alt** - Alternate text if the event that the image can't be displayed.
    **width** - Width of the image.  Expressed in pixels.
    **height** - Height of the image.  Expressed in pixels.
    **margin** - Margin around the image.  Expressed in pixels.
    **margin-left** - The image's left margin.  Expressed in pixels.
    **margin-right** - The image's right margin.  Expressed in pixels.
    **margin-top** - The image's top margin.  Expressed in pixels.
    **margin-bottom** - The image's bottom margin.  Expressed in pixels.
    
Except for **border-style**, the border parameters are optional if borders around the image is desired:
    
    **border-style** - **REQUIRED!** Border style.  Valid answers: **dotted**, **dashed**, **solid**, **double**, **groove**, **ridge**, **inset**, **outset**
    **border-width** - Border width.  Expressed in pixels.
    **border-color** - Border color.  Expressed either as **#xxx**, **#xxxxxx**, **rbg(x,x,x)**, or **{text}**
    

## Admin Settings
This BBCode may be disabled by going into the **Admin** => **Forum** => **Posts and Topics** => **Bulletin Board Code** and unchecking the bbcodes you don't want to use.  You may also be uninstall this mod in order to disable it.

## Compatibility Notes
This mod was tested on SMF 2.0.10, but should work on SMF 2.1 Beta 1, as well as SMF 2.0 and up.  SMF 1.x is not and will not be supported.

SMF 2.1 Beta 2 Nightly (as of Sept 4th, 2015) has corrected the flaw reported in [REPORT: Potentially "Fatal Flaw" in SMF's bbcode parser](http://www.simplemachines.org/community/index.php?topic=538611.0), thus the operation that calls the "fix parameter order" function is ignored for those nightlies.

## Changelog
The changelog can be viewed at [XPtsp.com](http://www.xptsp.com/board/free-modifications/image-float-bbcode/?tab=1).

## License
Copyright (c) 2015 - 2018, Douglas Orend

All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
