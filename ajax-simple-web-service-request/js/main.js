$('#btn').on('click', function(){
    clear();
   getApi();
});

function getApi(){
    quote_url = "https://thatsthespir.it/api";
    $.ajax({url: quote_url, success: function(quote){
            getImg(quote);
            getData(quote);
        }
    });
}

function clear(){
    $('img').remove();

}

function getImg(quote){
    img = document.createElement('img');
    img.setAttribute('class', 'circle');
    img.src = quote.photo;
    if (quote.photo !== '' ){
        $('#content').append(img);
    } else {
        $('.circle').removeAttr('src');
    }
}

function getData(quote){
    //get quote
    quotes = '<blockquote><q>' + quote.quote + '</q></blockquote>';
    name_author = '<h3>' + quote.author + '</h3>';
    //get name author
    $('#quote').html(quotes + name_author);
}
