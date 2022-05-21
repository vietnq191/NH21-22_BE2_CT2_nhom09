
     $("#price_range").slider({
        range:true,
        min:Number(document.getElementById("minProducts").innerText),
        max:Number(document.getElementById("maxProducts").innerText),
        values:[Number(document.getElementById("MinProduct").innerText),Number(document.getElementById("MaxProduct").innerText)],
        step:1,
        stop:function(even,ui){
            $('#price_show').html('$'+ui.values[0]+" - $"+ ui.values[1]);
            $('#min').val(ui.values[0]);
            $('#max').val(ui.values[1]);
            $('#MaxProduct').val(ui.values[1]);
            $('#MinProduct').val(ui.values[0]);
        }
    });


