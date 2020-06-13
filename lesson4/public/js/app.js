$(function(){
    $('#showMore').click(function(e){
        e.preventDefault();
        let lastId = $('.progects-blocks .progects-blocks-item').last().attr('data-id');
        console.log(lastId);
        $.ajax({
            type: 'POST',
            url: '../server/moreProduct.php',
            data: {lastItem: lastId},
            success: function(data){
                $('.progects-blocks').append(data);
            }
        });
    });
});