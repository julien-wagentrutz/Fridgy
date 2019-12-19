
let eatButtons
let trashButtons

function buttons()
{
    eatButtons = document.querySelectorAll('.eat_js')
    trashButtons = document.querySelectorAll('.trash_js')
    for (let i = 0; i<eatButtons.length;i++)
    {
        let productId = trashButtons[i].dataset.idproduct
        let card = document.querySelector('.productCard[data-idproduct= "' + productId + '" ]')

        sideBar(card)

        eatButtons[i].addEventListener(
            'click',
            () =>
            {

                callScript('../Treatment/productEatOrTrash.php','choice=0&idProduct='+ productId)
                card.classList.add('rigjdfok')
            }
        )

        trashButtons[i].addEventListener(
            'click',
            () =>
            {
                callScript('../Treatment/productEatOrTrash.php','choice=1&idProduct='+ productId)
                card.classList.add('rigjdfok')
            }
        )


    }

}

callScript('../Treatment/getProductFromUser.php','userId=' + window.localStorage.getItem('userId'),'#card_product_js','button')

