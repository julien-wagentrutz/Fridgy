
let _user = localStorage.getItem('userId')
callScript('../Treatment/stats.php','userId='+ _user + '&stat=1', '#total_product_js')
callScript('../Treatment/stats.php','userId='+ _user + '&stat=2', '#total_eat_js')
callScript('../Treatment/stats.php','userId='+ _user + '&stat=3', '#total_trash_js','stat')
