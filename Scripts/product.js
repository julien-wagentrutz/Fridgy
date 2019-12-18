
let eatButtons
let trashButtons

function buttons()
{
    eatButtons = document.querySelectorAll('.eat_js')
    trashButtons = document.querySelectorAll('.trash_js')
    for (let i = 0; i<eatButtons.length;i++)
    {
        eatButtons[i].addEventListener(
            'click',
            () =>
            {
                let productId = trashButtons[i].dataset.idproduct

                callScript('../Treatment/productEatOrTrash.php','choice=0&idProduct='+ productId)
                let card = document.querySelector('.productCard[data-idproduct= "' + productId + '" ]')
                card.classList.add('rigjdfok')
            }
        )

        trashButtons[i].addEventListener(
            'click',
            () =>
            {
                let productId = trashButtons[i].dataset.idproduct
                callScript('../Treatment/productEatOrTrash.php','choice=1&idProduct='+ productId)
                let card = document.querySelector('.productCard[data-idproduct= "' + productId + '" ]')
                card.classList.add('rigjdfok')
            }
        )


    }

}



callScript('../Treatment/getProductFromUser.php','userId=' + window.localStorage.getItem('userId'),'#card_product_js','button')

