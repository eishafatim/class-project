$(document).on("click",".inc",function(){
    let productId = $(this).closest('.QTYBOX').find('.productId').val();
    console.log(productId);
    let productQty = $(this).closest('.QTYBOX').find('.num-product');
    let productQTYInt = parseInt(productQty.val());
    //console.log(productQTYInt);
    if(!NAN(productQTYInt)){
        let UpdateQTY = productQTYInt ;
        console.log(UpdateQTY);
    }
    });
    
    
    
    
    (document).on("click",".dec",function(){
        let productId = $(this).closest('.QTYBOX').find('.productId').val();
        console.log(productId);
        let productQty = $(this).closest('.QTYBOX').find('.num-product');
        let productQTYInt = parseInt(productQty.val());
        console.log(productQTYInt);
        if(!NAN(productQTYInt)){
            let UpdateQTY = productQTYInt ;
            console.log(UpdateQTY);
        }
        });