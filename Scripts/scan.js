let productCard = document.querySelector(".expiryDateCard")

const soundButton = document.querySelector('.sound')
const soundIcon = document.querySelector('#soundIcon')

soundButton.addEventListener('click', ()=>
{
    if(soundIcon.classList.contains('soundOn'))
    {
        soundIcon.src = "../Images/Icons/soundOff.svg"
        soundIcon.classList = "soundOff"
    }else
    {
        soundIcon.src = "../Images/Icons/soundOn.svg"
        soundIcon.classList = "soundOn"
    }
})

Dynamsoft.BarcodeReader._bUseFullFeature = false;
let scanner = null;
const bip = document.querySelector('audio')
Dynamsoft.BarcodeScanner.createInstance({
    UIElement: document.querySelector('#div-video-container'),
    onFrameRead: results => {
    },
    onUnduplicatedRead: (txt, result) =>
    {
        fetch('https://world.openfoodfacts.org/api/v0/product/'+ txt +'.json')
            .then(response => {
                return response.json()
            })
            .then(data => {
                // Work with JSON data here
                if(soundIcon.classList == 'soundOn')
                {
                    bip.play()
                }else
                {
                    console.log('bip')
                }

                let _user = userCurrent.uid
                let _codeBar = data.code
                let _productName = data.product.generic_name
                let _productBrand = data.product.brands
                let _productImg = data.product.image_front_url
                let _productQuantity = data.product.quantity
                console.log(data)
                productCard.classList.add('flexExpiryDateCard')

                let inputUser = document.querySelector('#user')
                let inputCodeBar = document.querySelector('#codeBar')
                let inputProductName = document.querySelector('#nameProduct')
                let inputProductBrand = document.querySelector('#brand')
                let inputProductQuantity = document.querySelector('#quantity')
                let inputProductImg = document.querySelector('#imgSrc')
                let textName = document.querySelector('#textProductName')
                let textBrand = document.querySelector('#textProductBrand')
                let cardImg = document.querySelector('#imgCard')

                cardImg.src = _productImg
                textName.innerText = _productName
                textBrand.innerText = _productBrand
                inputUser.value = _user
                inputCodeBar.value = _codeBar
                inputProductName.value = _productName
                inputProductBrand.value = _productBrand
                inputProductImg.value = _productImg
                inputProductQuantity.value = _productQuantity

               // let _data = "codeBar="+_codeBar+"&user="+_user+"&brand="+_productBrand + "&productQuantity="+_productQuantity + "&name="+_productName +"&imgSrc="+_productImg ;
               // callScript("../Treatment/addProductToBD.php",_data);
               // window.location.replace("https://julienwagentrutz.com/Pages/homePage.php");
            })
            .catch(err => {
                // Do something for an error here
            })

    }
}).then(async s => {
    scanner = s;
    await usePresetRuntimeSettings(s, "balance");
    scanner.show().catch(ex=>{
        console.log(ex);
        alert(ex.message || ex);
        scanner.hide();
    });
});

let usePresetRuntimeSettings = async (reader, mode) => {
    await reader.resetRuntimeSettings();
    let settings = await reader.getRuntimeSettings();

    switch(mode.toLowerCase()){
        case "bestcoverage":
            settings.deblurLevel = 9;
            settings.expectedBarcodesCount = 512;
            settings.scaleDownThreshold = 100000;
            settings.localizationModes = [
                Dynamsoft.EnumLocalizationMode.LM_CONNECTED_BLOCKS,
                Dynamsoft.EnumLocalizationMode.LM_SCAN_DIRECTLY,
                Dynamsoft.EnumLocalizationMode.LM_STATISTICS,
                Dynamsoft.EnumLocalizationMode.LM_LINES,
                0,0,0,0
            ];
            if(Dynamsoft.BarcodeReader._bUseFullFeature){
                settings.localizationModes[4] = Dynamsoft.EnumLocalizationMode.LM_STATISTICS_MARKS;
            }
            settings.furtherModes.grayscaleTransformationModes = [
                Dynamsoft.EnumGrayscaleTransformationMode.GTM_ORIGINAL,
                Dynamsoft.EnumGrayscaleTransformationMode.GTM_INVERTED,
                0,0,0,0,0,0
            ];
            break;
        case "bestspeed":
            settings.deblurLevel = 3;
            settings.expectedBarcodesCount = 512;
            settings.localizationModes = [
                Dynamsoft.EnumLocalizationMode.LM_SCAN_DIRECTLY,
                0,0,0,0,0,0,0
            ];
            break;
        case "balance":
            settings.deblurLevel = 5;
            settings.expectedBarcodesCount = 512;
            settings.localizationModes = [
                Dynamsoft.EnumLocalizationMode.LM_CONNECTED_BLOCKS,
                Dynamsoft.EnumLocalizationMode.LM_SCAN_DIRECTLY,
                0,0,0,0,0,0,0
            ];
            break;
    }
    settings.region.measuredByPercentage = 1;
    settings.region.left = 25;
    settings.region.top = 25;
    settings.region.right = 25;
    settings.region.bottom = 25;
    await reader.updateRuntimeSettings(settings);

};