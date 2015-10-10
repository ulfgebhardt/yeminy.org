<div class ="list_element" onclick="system.load('article;article.${id}')">
    <div class="list_element_hover article" style="border-bottom: 1px black solid; text-align: justify;">
        <p style="float: left; font-size: 10pt; margin-top: 7px;">Author: <i>${author_name}</i></p>
        <p style="float: right; font-size: 10pt; margin-top: 7px;">${ago}</p>
        <div style="clear: both;"></div>
        <div style="border-top: solid 1px black; width: 100%;"></div>
        <h2>${id}</h2>
        <br>
        ${text}
        <p style="float: right; font-size: 10pt; margin-top: 7px;">Veröffentlicht: ${published}</p>
        <br>
    </div>
    <div class="btn btn-default" style="margin-top: 10px; width: 35%;">Weiterlesen...</div>
</div>