
Dynamsoft.BarcodeReader._bUseFullFeature = false;
let scanner = null;
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
                console.log('BIP')
                let _user = user.uid
                let _codeBar = data.code
                let _productName = data.product.generic_name
                let _productBrand = data.product.brands
                let _data = "codeBar="+_codeBar+"&user="+_user+"&brand="+_productBrand+"&name="+_productName ;
                callScript("../Treatment/addProductToBD.php",_data);
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