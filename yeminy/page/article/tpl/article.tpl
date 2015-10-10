<br>
<button class="btn btn-default" onclick="system.back();">zurück</button>
<br>
<br>
<div class="list_element" text_id="${id}" style="text-align: justify;">
    <p style="float: left; font-size: 10pt; margin-top: 7px;">Author: <i>${author_name}</i></p>
    <p style="float: right; font-size: 10pt; margin-top: 7px;">${ago}</p>
    <div style="clear: both;"></div>
    <div style="border-top: solid 1px black; width: 100%;"></div>
    <h2>${id}</h2>
    <br>
    ${text}
    <p style="float: right; font-size: 10pt; margin-top: 7px;">Veröffentlicht: ${published}</p>
    <br>
    <br>
    <br>
    <div class="fb-comments" data-href="http://www.neopolimatrix.eu/#!article;article.${id}" data-numposts="20" data-colorscheme="light"></div>
</div>
<br>
<br>
<button class="btn btn-default" onclick="system.back();">zurück</button>
<br>
<br>