var testWord
$('#adresseInscription').on('keydown',function(e){
    this.value!=''? testWord = this.value:testWord = '';
    if(e.key == 'Backspace')
    {
        testWord = testWord.slice(0,testWord.length-1);
    }
    if(e.key !='Backspace' && e.key!='Enter' && e.key !='Control' && e.key!='Shift')
    {
        testWord += e.key
    }
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (!regex.test(key) && !e.key=='Backspace') {
        e.preventDefault();
        return false;
    }

    if(testWord.length >= 3)
    {
        apiurl = 'https://api-adresse.data.gouv.fr/search/?q='+this.value;
        
        var p = callAjax(apiurl,'get');
        p.done(function(data){
            console.log(data.features);
            $('#inputAdresse').children('div').remove();
            data.features.forEach(element => {
            $('<div>').attr({'id':element.properties.id}).text(element.properties.label).appendTo($('#inputAdresse'));
            $('#'+element.properties.id).on('mouseover',function(){
                $(this).css({'background-color':'#2795f5'});
            })
            $('#'+element.properties.id).on('mouseout',function(){
                $(this).css({'background-color': 'white'});
            })
            $('#'+element.properties.id).on('click',function(){
                $('#adresseInscription').val(element.properties.name);
                $('#cpInscription').val(element.properties.postcode);
                $('#villeInscription').val(element.properties.city);
                $('#inputAdresse').children('div').remove();
            })
            })
        })
    }
    
    if(this.value=='')
    {
        $('#inputAdresse').children('div').remove();  
    }

})


function callAjax(userUrl,userMethod)
{
    d = $.Deferred();
    $.ajax({
        url:userUrl,
        dataType : 'json',
        method:userMethod,
        success:function(data){
            // console.log(data)
            d.resolve(data);
        },
        error:function(xhr){
            d.reject(xhr);
        }
    })
    return d.promise();
}
