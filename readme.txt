[hr]
[center][color=red][size=16pt][b]IMAGE FLOATING TO LEFT OR RIGHT BBCODE v1.22[/b][/size][/color]
[url=http://www.simplemachines.org/community/index.php?action=profile;u=253913][b]By Dougiefresh[/b][/url] -> [url=http://custom.simplemachines.org/mods/index.php?mod=3983]Link to Mod[/url]
[/center]
[hr]

[color=blue][b][size=12pt][u]Introduction[/u][/size][/b][/color]
This modification adds two BBCodes to allow a user to float an image to the left or right of the text.

The two BBCodes takes these forms:
[code]
[imgleft]{url}[/imgleft]
[imgright]{url}[/imgright]
[imgleft {params}]{url}[/imgleft]
[imgright {params}]{url}[/imgright]
[/code]
where [b]{url}[/b] is the image URL and the optional acceptable parameters are:
[code]
[b]alt[/b] - Alternate text if the event that the image can't be displayed.
[b]width[/b] - Width of the image.  Expressed in pixels.
[b]height[/b] - Height of the image.  Expressed in pixels.
[b]margin[/b] - Margin around the image.  Expressed in pixels.
[b]margin-left[/b] - The image's left margin.  Expressed in pixels.
[b]margin-right[/b] - The image's right margin.  Expressed in pixels.
[b]margin-top[/b] - The image's top margin.  Expressed in pixels.
[b]margin-bottom[/b] - The image's bottom margin.  Expressed in pixels.
[/code]
Except for [b]border-style[/b], the border parameters are optional if borders around the image is desired:
[code]
[b]border-style[/b] - [b]REQUIRED![/b] Border style.  Valid answers: [b]dotted[/b], [b]dashed[/b], [b]solid[/b], [b]double[/b], [b]groove[/b], [b]ridge[/b], [b]inset[/b], [b]outset[/b]
[b]border-width[/b] - Border width.  Expressed in pixels.
[b]border-color[/b] - Border color.  Expressed either as [b]#xxx[/b], [b]#xxxxxx[/b], [b]rbg(x,x,x)[/b], or [b]{text}[/b]
[/code]

[color=blue][b][size=12pt][u]Admin Settings[/u][/size][/b][/color]
This BBCode may be disabled by going into the [b]Admin[/b] => [b]Forum[/b] => [b]Posts and Topics[/b] => [b]Bulletin Board Code[/b] and unchecking the bbcodes you don't want to use.  You may also be uninstall this mod in order to disable it.

[color=blue][b][size=12pt][u]Compatibility Notes[/u][/size][/b][/color]
This mod was tested on SMF 2.0.10, but should work on SMF 2.1 Beta 1, as well as SMF 2.0 and up.  SMF 1.x is not and will not be supported.

SMF 2.1 Beta 2 Nightly (as of Sept 4th, 2015) has corrected the flaw reported in [url=http://www.simplemachines.org/community/index.php?topic=538611.0]REPORT: Potentially "Fatal Flaw" in SMF's bbcode parser[/url], thus the operation that calls the "fix parameter order" function is ignored for those nightlies.

[color=blue][b][size=12pt][u]Changelog[/u][/size][/b][/color]
The changelog can be viewed at [url=http://www.xptsp.com/board/free-modifications/image-float-bbcode/?tab=1]XPtsp.com[/url].

[color=blue][b][size=12pt][u]License[/u][/size][/b][/color]
Copyright (c) 2015 - 2018, Douglas Orend
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
