function AfficherRegion()
{
    $.ajax(
    {
        type:"get",
        url:"index.php/Ctrl/",
        data:"id="+id,
        success:function(data)
        {
            $('#div').empty();
            $('#div').empty();
            $('#div').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}